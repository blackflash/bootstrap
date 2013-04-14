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

	public function render()
    {
        $this->template->setFile(__DIR__ . '/CompactNews.latte');
        $this->template->is_active = $this->generalRepository->getByTableAndId("component_list","title","component_compact_news")->fetch()->is_active;
        $this->template->news = $this->generalRepository->getByTableAndId("component_compact_news","is_active","1");
        $this->template->render();
    }


}