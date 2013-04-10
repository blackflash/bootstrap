<?php

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{


	/**
	 * Sign in form component factory.
	 * @return Nette\Application\UI\Form
	 */
	protected function createComponentSignInForm()
	{
	    $form = new UI\Form();
	    $form->addText('username', 'Login:', 30, 20);
	    $form->addPassword('password', 'Password:', 30);
	    $form->addCheckbox('persistent', 'Remember');
	    $form->addSubmit('login', 'Login');
	    $form->onSuccess[] = $this->signInFormSubmitted;
	    return $form;
	}

	public function renderDefault()
	{
		$this->template->title = 'Login';
		
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
	        $this->flashMessage('Login was successful.', 'success');

	        $this->redirect('Admin:');
	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Incorrect login or password.');
	    }
	}

	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('You have been signed out.');
		$this->redirect('Homepage:');
	}

}
