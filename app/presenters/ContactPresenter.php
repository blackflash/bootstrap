<?php

/**
 * Homepage presenter.
 */
class ContactPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	    $this->taskRepository = $this->context->taskRepository;
	}

	public function renderDefault()
	{
		$this->template->title = 'Contact';
		//$this->template->tasks = $this->taskRepository->findIncomplete();
	}

	private function skuska(){
		echo "<pre>";
		print_r("test");
		echo "</pre>";
		die();
	}


}
