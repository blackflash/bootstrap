<?php

/**
 * Team presenter.
 */
class TeamPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	    $this->taskRepository = $this->context->taskRepository;
	}

	public function renderDefault()
	{
		$this->template->title = 'Team';
		//$this->template->tasks = $this->taskRepository->findIncomplete();
		

	}


}
