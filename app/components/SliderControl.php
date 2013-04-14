<?php

namespace Todo;

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form,
	Nette\Database\Connection;

class sliderControl extends UI\Control {

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
        $this->template->setFile(__DIR__ . '/Slider.latte');
        $this->template->slider = $this->generalRepository->getByTableAndId("component_slider","is_active","1");
        $this->template->is_active = $this->generalRepository->getByTableAndId("component_list","title","component_slider")->fetch()->is_active;
        $this->template->render();
    }


}