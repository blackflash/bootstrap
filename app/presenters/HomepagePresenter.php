<?php

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	private $generalRepository;

	protected function startup()
	{
	    parent::startup();
	}

	public function inject(Todo\GeneralRepository $generalRepository)
	{
		$this->generalRepository = $generalRepository;
	}



	public function renderDefault()
	{
		$this->template->title = 'Home';

		parent::createComponentSignInForm();

		$this->template->slider = $this->context->generalRepository->getByTableAndId("component_slider","is_active","1");

		// PARSER XML
		//$this->startXMLParse();
	}


	/*---------- PAYPAL ----------*/
	public function handlepaypal(){
		// read the post from PayPal system and add 'cmd'  
		$req = 'cmd=_notify-validate';  
		foreach ($_POST as $key => $value) {  
			$value = urlencode(stripslashes($value));  
			$req .= "&$key=$value";  
		}  
		
		// post back to PayPal system to validate  
		$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";  
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";  
		$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";  
		  
		$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);  
			if (!$fp) {  
			// HTTP ERROR  
			} else {  
				fputs ($fp, $header . $req);  
				while (!feof($fp)) {  
					$res = fgets ($fp, 1024);  
					if (strcmp ($res, "VERIFIED") == 0) {  

						$email            = $_POST['payer_email'];
						$txn_id           = $_POST['txn_id'];
						$item_name        = $_POST['item_name'];
						$item_number      = $_POST['item_number'];
						$payment_status   = $_POST['payment_status'];
						$payment_amount   = $_POST['mc_gross'];
						$payment_currency = $_POST['mc_currency'];
						$receiver_email   = $_POST['receiver_email'];
						$user_id          = $_POST["custom"]; 		//our user id

						$txn_id_check = $this->context->generalRepository->getCountOfRowsByTableAndId("transaction_log","txn_id",$txn_id);
						
						if($txn_id_check != 1){
							if($receiver_email == "ado.gaspar@gmail.com"){
								$this->context->generalRepository->insertRowByTable("transaction_log",array('txn_id' => $txn_id, "email" => $email ));
								$balance = $this->context->generalRepository->findBy("user_profile", array('user_id' => $user_id  ))->fetch();
								$balance = $balance->balance + 5;
								$this->context->generalRepository->updateTableById("user_profile","user_id",$user_id, array('balance' => $balance));
			  				}
			  			}
			  			
					}  
					else if (strcmp ($res, "INVALID") == 0) {  
					  
						echo "<pre>";
						print_r("there was a problem with transaction !");
						echo "</pre>";
						die();
					}  
				}  
			fclose ($fp);  
		}  
	}

	// Component news
	protected function createComponentCompactNews()
	{
		return new Todo\CompactNewsControl($this->generalRepository);
	}

	// Component slider
	protected function createComponentSlider()
	{
		return new Todo\SliderControl($this->generalRepository);
	}

	/*------------------------- XML PARSER ------------------------------*/

	function startXMLParse(){
		$xml = simplexml_load_file("http://localhost/bootstrap/www/uploads/test01.xml");

		
		/*$xml = simplexml_load_file("http://localhost/bootstrap/www/mydoc.xml");
		foreach ($xml as $key => $value) {
			echo "<pre>";
			print_r($value);
			echo "</pre>";
		}
		die();
		*/

		echo "<pre>";

		/* Parameters
			<id>
			<field>
			<objectid>
			<phase>
			<idx>
			<owner>		
			<bondid>
		*/

		$xmlstr = "<row></row>";
		$loopXML = new SimpleXMLElement($xmlstr);
		$uniqueXML = new SimpleXMLElement($xmlstr);
		

		$stack = $this->parseMakeArrayOfHays($xml);
		

		foreach ($stack as $key => $value) {

			$loopXML = $this->parseMakeHay($xml,$value);
			$this->simplexml_merge($uniqueXML, $loopXML);
		}
		
		foreach ($uniqueXML as $key => $value) {
			print_r($value);
		}		

		$uniqueXML->asXML("mydoc.xml");

		die();
	}

	function simplexml_merge (SimpleXMLElement &$xml1, SimpleXMLElement $xml2)
	{
		// convert SimpleXML objects into DOM ones
		$dom1 = new DomDocument();
		$dom2 = new DomDocument();
		$dom1->loadXML($xml1->asXML());
		$dom2->loadXML($xml2->asXML());
		 
		// pull all child elements of second XML
		$xpath = new domXPath($dom2);
		$xpathQuery = $xpath->query('/*/*');
		 
		for ($i = 0; $i < $xpathQuery->length; $i++)
		{
			// and pump them into first one
			$dom1->documentElement->appendChild(
			$dom1->importNode($xpathQuery->item($i), true));
		}
		 
		$xml1 = simplexml_import_dom($dom1);
	}

	protected function parseMakeArrayOfHays($xml){
		$xmlstr = "<row></row>";
		$objectidLoop = "";
		$objectidHolder = "temp";
		$stack = array();

		$oneStuff = new SimpleXMLElement($xmlstr);

		foreach ($xml as $key => $value) {
			
			if($objectidHolder == "" || $objectidHolder != $objectidLoop){
					$objectidHolder = (string)$value->objectid;
					$objectidLoop = (string)$value->objectid;
					array_push($stack, $objectidLoop );
			}
					
			if($objectidHolder == $objectidLoop) {
				$objectidLoop = $value->objectid;
			}

		}

		return $stack;

	}

	//vytvori z kopy jedno seno na zaklade objectid
	protected function parseMakeHay($xml,$idOfObject){
		$xmlstr = "<row></row>";
		$oneStuff = new SimpleXMLElement($xmlstr);

		foreach ($xml as $key => $value) {
			
			if($value->objectid == $idOfObject) {
				$row = $oneStuff->addChild("row");
				$row->addChild('id', $value->id);
				$row->addChild('field', $value->field);
				$row->addChild('objectid', $value->objectid);

				$row->addChild('phase', htmlspecialchars($value->phase,ENT_QUOTES));

				$row->addChild('idx', $value->idx);
				$row->addChild('owner', $value->owner);
				$row->addChild('bondid', $value->bondid);
			}

		}

		return $this->parseMakeUniqueStalks($oneStuff);
	}

	//sparsuje cele seno ( uz oddelene cez objectid ) a vytvori unikatne nody stebla daneho objectid
	protected function parseMakeUniqueStalks($xml){

		$xmlstr = "<row></row>";
		$uniqueXML = new SimpleXMLElement($xmlstr);

		foreach ($xml as $key => $value) {
			
			if($value->field == "041\$a1:1:0" && $this->parseCheckDuplicates($uniqueXML,"041\$a1:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', $value->phase);
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

			if($value->field == "100\$91:1:0" && $this->parseCheckDuplicates($uniqueXML,"100\$91:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', $value->phase);
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

			if($value->field == "100\$a1:1:0" && $this->parseCheckDuplicates($uniqueXML,"100\$a1:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', $value->phase);
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

			if($value->field == "242\$a1:1:0" && $this->parseCheckDuplicates($uniqueXML,"242\$a1:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', $value->phase);
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

			if($value->field == "245\$a1:1:0" && $this->parseCheckDuplicates($uniqueXML,"245\$a1:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', $value->phase);
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

			if($value->field == "856\$u1:1:0" && $this->parseCheckDuplicates($uniqueXML,"856\$u1:1:0")){
					$row = $uniqueXML->addChild("row");
					$row->addChild('id', $value->id);
					$row->addChild('field', $value->field);
					$row->addChild('objectid', $value->objectid);
					$row->addChild('phase', htmlspecialchars($value->phase,ENT_QUOTES));
					$row->addChild('idx', $value->idx);
					$row->addChild('owner', $value->owner);
					$row->addChild('bondid', $value->bondid);
			}

		}

		return $uniqueXML;
		
	}

	//prejde XML skontroluje steblo ci je unikatne v sene ( uz oddelene cez objectid )
	protected function parseCheckDuplicates($xml,$string){
		$counter = 0;
		foreach ($xml as $key => $value) {
			if($value->field == $string){
				$counter++;
			} 
		}

		if($counter == 0) return true;
		else return false;
	}


}
