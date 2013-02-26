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

	public function renderDefault($title = "Gallery",$page = "namespaces", $gallery_id = "")
	{
		$this->template->title = 'Gallery';
		$this->template->gallery_namespaces = $this->context->galleryRepository->getByTableAndId("gallery","is_active","1");
		$this->template->namespaces = $this->context->galleryRepository->getByTable("gallery_namespace");

		//prepade array of images for namespaces
		$namespaces = $this->makeUniqueNamespacesArray($this->context->galleryRepository->getArrayOfActiveGalleries());

		$this->template->namespaces_images = $this->context->galleryRepository->getRandomImages($namespaces,"namespace_id");

		$arrayName = array();

		foreach ($this->template->namespaces as $key => $value) {
			$arrayName += array($value->namespace_id => $value->name);
		}

		$this->template->namespaces = $arrayName;

		// prepare galleries images
		$temp = array();
		$gallery = $this->context->galleryRepository->getByTableAndIdWithOrder("gallery","is_active","1","gallery_id","ASC");
		foreach ($gallery as $key => $value) {
			$temp += array($value->gallery_id => $this->context->galleryRepository->getRandomImage("gallery_photo","gallery_id",$value->gallery_id));
		}
		
		$this->template->galleries_images = $temp;
		
		switch ($title) {

	    	case 'Gallery - photos':
				$this->template->gallery_photo = $this->context->galleryRepository->getByTableAndIdWithOrder("gallery_photo","gallery_id",$gallery_id,"data_col","asc");
				$this->template->gallery_video = $this->context->galleryRepository->getByTableAndId("gallery_video","gallery_id",$gallery_id);




				if(isset($this->template->gallery_video->fetch()->namespace_id)){

					$videoTemp = $this->context->galleryRepository->getByTableAndId("gallery_video","gallery_id",$gallery_id)->fetch()->namespace_id;

					$this->template->videoCheckNamespace = $videoTemp;
				}else $this->template->videoCheckNamespace = "";


    		break;
    		default:
	    		$this->template->includeBoard = $page.".latte";
	    	break;
	    }

	    $this->template->includeBoard = $page.".latte";

	}

	protected function makeUniqueNamespacesArray($data){

		$namespaces = array();

		foreach ($data as $key => $value) {
			array_push($namespaces,$value->namespace_id);
		}
		return array_unique($namespaces);
	}

}
