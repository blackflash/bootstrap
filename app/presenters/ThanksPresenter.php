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


}
