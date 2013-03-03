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

	public function renderDefault($campaign_id)
	{
		$this->template->title = 'Campaign';
		$this->template->campaign_id = $campaign_id;

		$this->template->campaign  			= $this->context->generalRepository->getByTableAndId("campaign","campaign_id",$campaign_id);
		$this->template->products_services  = $this->context->generalRepository->getByTableAndId("campaign_ps","category_id",$this->template->campaign->fetch()->category_id);
	
		
	}

	public function handlejsonsubmitFeedback($ps_id, $campaign_id){
		if ($this->isAjax()) {

			$data = array(
				'ps_id' => $ps_id,
				'campaign_id' => $campaign_id
			 );

			$jsondata = $this->context->galleryRepository->insertRowByTable("campaign_result",$data);

	        echo json_encode($jsondata);
	        die();
	    }
	}


}
