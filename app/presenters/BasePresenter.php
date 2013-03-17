<?php

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	protected function startup()
	{
	    parent::startup();
	}

	public function beforeRender()
	{	
		$this->template->title = 'Home';
	}

	public function handleSignOut()
	{
	    $this->getUser()->logout();
	    $this->redirect('Homepage:');
	}

	protected function createComponentSignInForm()
	{
	    $form = new UI\Form();
	    $form->addText('username', '', 30, 20)->setAttribute('placeholder', 'login');
	    $form->addPassword('password', '', 30)->setAttribute('placeholder', 'password');
	    $form->addCheckbox('persistent', 'Pamatovat si mě na tomto počítači');
	    $form->addSubmit('login', 'Login');
	    $form->onSuccess[] = $this->signInFormSubmitted;
	    return $form;
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

	        $this->flashMessage('Login was successful', 'success');

	        $this->redirect('Admin:');
	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Incorrect username or password..');
	    }
	}
	
}
