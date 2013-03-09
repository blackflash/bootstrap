<?php

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form,
	Nette\Database\Connection;

class compactNewsControl extends UI\Control {

	public function getNews(){
		//return $this->context->generalRepository->getByTable("component_compact_news");
		return "test";
	}


}