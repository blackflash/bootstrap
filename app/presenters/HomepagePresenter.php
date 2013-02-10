<?php

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	private $taskRepository;

	protected function startup()
	{
	    parent::startup();
	    $this->taskRepository = $this->context->taskRepository;
	}


	public function signInFormSubmitted($form)
	{
	    try {
	        $user = $this->getUser();
	        $values = $form->getValues();


	        if ($values->persistent) {
	            $user->setExpiration('+30 days', FALSE);
	        }

	        $user->login($values->username, $values->password);

	        $this->template->username = $values->username;

	        $this->flashMessage('Login was successful.', 'success');

	        $this->redirect('Admin:');
	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Incorrect login or password.');
	    }
	}

	public function renderDefault()
	{
		$this->template->title = 'Home';

		parent::createComponentSignInForm();

		// PARSER XML
		//$this->startXMLParse();
		
		
	}

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
