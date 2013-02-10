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
		//$this->template->tasks = $this->taskRepository->findIncomplete();

		/*
		$xml = simplexml_load_file("http://www.silver.ag/publicdoc/complete_01.xml");

		echo "<pre>";
		
		foreach ($xml as $key => $value) {
			
			foreach($value->parameter as $key2 => $value2){
				print_r($value2->attributes);
			}
		}

		echo "</pre>";
		die();
		*/
		
		
	}


}
