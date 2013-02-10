<?php

/**
 * Homepage presenter.
 */
class ResearchDevelopmentPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	    $this->taskRepository = $this->context->taskRepository;
	}

	public function renderDefault()
	{
		$this->template->title = 'Veda a výskum';
		$this->template->tasks = $this->taskRepository->findIncomplete();
	}


}
