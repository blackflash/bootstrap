<?php

namespace Todo;

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form,
	Nette\Database\Connection;

class compactNewsControl extends UI\Control {

    /** @var Nette\Database\Table\Selection */
	private $selected;

	/** @var TaskRepository */
	private $generalRepository;

    public function __construct(GeneralRepository $generalRepository)
	{
		parent::__construct(); // vždy je potřeba volat rodičovský konstruktor
		$this->generalRepository = $generalRepository;
	}

	public function getNews(){
		//return $this->context->generalRepository->getByTable("component_compact_news");
	}

	public function render()
    {
        $this->template->setFile(__DIR__ . '/CompactNews.latte');
        $this->template->news = $this->generalRepository->getByTable("component_compact_news");
        $this->template->render();
    }


}