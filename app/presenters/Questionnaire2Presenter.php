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

	public function handlejsonDeletePS($ps_id){
		if ($this->isAjax()) {

			echo "<pre>";
			print_r("Im in !");
			echo "</pre>";
			die();

	        echo json_encode($jsondata);
	        die();
	    }
	}

}
