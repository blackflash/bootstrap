<?php

use Nette\Mail\Message;

/**
 * Homepage presenter.
 */
class ContactPresenter extends BasePresenter
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
		$this->template->title = 'Contact';
		$this->template->basic   = $this->generalRepository->getByTableAndId("basic_info","id","1")->fetch();
	}

	public function handlejsonSendEmail($username, $useremail, $usertext){

		$mailer = new Nette\Mail\SmtpMailer(array(
		  'host' => 'smtp.gmail.com',
		  'port' => 465,
		  'username' => 'ado.gaspar@gmail.com',
		  'password' => 'blackflash',
		  'secure' => 'ssl'
		));

		$mail = new Message;

		$mail->setFrom($useremail, $this->template->basic->website_title.' website ')
		    ->addTo('ado.gaspar@gmail.com')
		    ->setSubject('Robot from '. $this->template->basic->website_title. ' website - '.$username)
		    ->setBody("User email: ".$useremail."\n"."User text: \n\n".$usertext);

	    try
		{
		  $mailer->send($mail);
		}
		catch (SmtpException $e)
		{
		  echo $e->getMessage();
		}
		
	}


}
