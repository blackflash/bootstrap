<?php

/**
 * Team presenter.
 */
class Questionnaire2Presenter extends BasePresenter
{

	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault($page = "slideshow")
	{
		$this->template->title = 'Questionnaire2';

		$this->template->page = $page.".latte";

	}

}
