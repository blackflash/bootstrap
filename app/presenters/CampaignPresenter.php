<?php

/**
 * Campaign presenter.
 */
class CampaignPresenter extends BasePresenter
{

	private $taskRepository;
	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault()
	{
		$this->template->title = 'Campaign';


		$this->template->campaign  = $this->context->generalRepository->getByTableAndId("campaign","campaign_id","2");
		$this->template->products_services  = $this->context->generalRepository->getByTableAndId("campaign_ps","category_id",$this->template->campaign->fetch()->category_id);

		/*foreach ($this->template->products_services as $key => $value) {
			foreach ($value as $key2 => $value2) {
				echo "<pre>";
				print_r($key2." ".$value2);
				echo "</pre>";
			}
		}
		
		die();

		$this->template->campaigns  = $this->context->generalRepository->getByTable("campaign");
		$this->template->cities     = $this->context->generalRepository->getByTable("city");
		$this->template->locations  = $this->context->generalRepository->getByTable("location");
		$this->template->categories = $this->context->generalRepository->getByTable("campaign_ps_category");
		*/


	}


}
