<?php

/**
 * Team presenter.
 */
class QuestionnairePresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Questionnaire';
		//$this->template->tasks = $this->taskRepository->findIncomplete();
		

	}

	public function handlefeedback1()
	{
		
		$data = array(
			'product_id' => $_POST["button"], 
			'time' => NULL
		);

		$this->context->galleryRepository->insertRowByTable("questionnaire",$data);

		$this->redirect('Questionnaire:default');
	}


}
