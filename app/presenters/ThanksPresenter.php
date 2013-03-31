<?php

/**
 * Team presenter.
 */
class ThanksPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Thanks';
	}

	// http://localhost/bootstrap/thanks/?do=test&a=2&b=5
	public function handletest($a, $b){
		print_r($a+$b);
		die();
	}

	// update prepared questionnaire
	public function handlejsonTest($a,$b){
        echo json_encode(array("text"=> $a+$b));
	}


}
