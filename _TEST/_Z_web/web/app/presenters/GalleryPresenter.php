<?php

/**
 * Homepage presenter.
 */
class GalleryPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Galéria';
	}


}
