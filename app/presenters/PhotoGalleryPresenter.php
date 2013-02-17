<?php

/**
 * Gallery presenter.
 */

class PhotoGalleryPresenter extends BasePresenter
{	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Gallery';
		$this->template->gallery_namespaces = $this->context->galleryRepository->getByTableAndId("gallery","is_active","1");
		$this->template->gallery_photo = $this->context->galleryRepository->getByTableAndId("gallery_photo","gallery_id","8");
		//$this->template->gallery_photo = $this->context->galleryRepository->getByTableAndIdWithOrder("gallery_photo","gallery_id","8","data_col","asc");

	}

}
