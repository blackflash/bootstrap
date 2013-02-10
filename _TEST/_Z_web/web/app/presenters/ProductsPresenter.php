<?php

/**
 * Products presenter.
 */
class ProductsPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Produkty';
	}

	public function handlecalculateHash($password, $salt = null)
	{
	    if ($salt === null) {
	        $salt = '$2a$07$' . Nette\Utils\Strings::random(32) . '$';
	    }
	   echo "<pre>";
	   print_r(crypt($password, $salt));
	   echo "</pre>";
	   die();
	}

	public function renderloadPage()
	{
		$title = $this->getParam('title');
		$page = $this->getParam('page');
		
		$this->template->title = $title;
		
		$this->redirect('Products:'.$page, $title);
	}

	public function renderpriemyselnaTomografia($title){
		$this->template->title = $title;
	}

	public function rendersuradnicovaMetrologia($title){
		$this->template->title = $title;
	}

	public function rendermaterialovaAnalyza($title){
		$this->template->title = $title;
	}

	public function rendertermoviznaDiagnostika($title){
		$this->template->title = $title;
	}

	public function renderrapidPrototyping($title){
		$this->template->title = $title;
	}

}
