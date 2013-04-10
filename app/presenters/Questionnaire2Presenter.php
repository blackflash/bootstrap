<?php

/**
 * Team presenter.
 */
class Questionnaire2Presenter extends BasePresenter
{

	
	protected function startup()
	{
	    parent::startup();
	}

	public function renderDefault($questionnaire_id,$page){

		$this->template->questionnaire_id 	= $questionnaire_id;
		$this->template->questionnaire		= $this->context->generalRepository->getByTableAndId("questionnaire","questionnaire_id",$questionnaire_id)->fetch();
		
		$this->template->title = $this->template->questionnaire->title;
		$this->template->language_pack		= $this->context->generalRepository->getByTableAndId("language_pack","questionnaire_id",$questionnaire_id);
		
		//$this->template->categories			= $this->context->generalRepository->getByTableAndId("questionnaire_category","questionnaire_id",$questionnaire_id);
		//$this->template->questions 			= $this->prepareQuestions($this->template->categories);

		$this->template->page = $page.".latte";
	}


	protected function testUpdate($r_questionnaire_id,$question_id,$rate){
		$this->context->generalRepository->updateQuestionnaire("result_question",$r_questionnaire_id,$question_id,$rate);
	}

	//pripravi otazky rozdelene podla kategorii
	protected function prepareQuestions($categories){
		$questions = array();
		$temp = array();

		foreach ($categories as $key => $value) {
			
			$group = array();
			$groupOfQuestions = $this->context->generalRepository->getByTableAndId("questionnaire_question","category_id",$value->category_id);
			foreach ($groupOfQuestions as $key => $value2) {
				if($value->category_id == $value2->category_id){
					$group[$value2->question_id]["question_id"] = $value2->question_id;
					$group[$value2->question_id]["category_id"] = $value2->category_id;
					$group[$value2->question_id]["text_SK"]     = $value2->text_SK;
					$group[$value2->question_id]["text_EN"]     = $value2->text_EN;

				}
					$temp += $group;
			}

			$questions[$value->category_id] = $group;
		}
		return $temp;
	}


	//pripravi len otazky
	protected function inserQuestionToResultTable($r_questionnaire_id,$categories){
		$questions = array();

		foreach ($categories as $key => $value) {
			
			$group = array();
			$groupOfQuestions = $this->context->generalRepository->getByTableAndId("questionnaire_question","category_id",$value->category_id);
			foreach ($groupOfQuestions as $key => $value2) {
				if($value->category_id == $value2->category_id){
					$group["r_question_id"]      = "";
					$group["r_questionnaire_id"] = $r_questionnaire_id;
					$group["question_id"]        = $value2->question_id;
					$group["category_id"]        = $value2->category_id;
				}
				$this->context->generalRepository->insertRowByTable("result_question",$group);
			}
		}
		return $questions;
	}


	// Prepade empty questionnaire to be filled in future
	public function handlejsonPrepareQuestionnaire($questionnaire_id,$language){
		if ($this->isAjax()) {

			$ip = $_SERVER['REMOTE_ADDR'];

			$questionnaireData = array(
				"r_questionnaire_id" => "",
				"questionnaire_id"   => $questionnaire_id,
				"ip_adress"			 =>	$ip,
				"language_selected"  => $language,
				"room"               => NULL,
				"submit_time"        => NULL,
				"score"              => NULL
			);

			//insert to result_questionnaire
			$this->context->generalRepository->insertRowByTable("result_questionnaire",$questionnaireData);

			$r_questionnaire_id = $this->context->generalRepository->getLastInsertedId("result_questionnaire","r_questionnaire_id");
			$categories			= $this->context->generalRepository->getByTableAndId("questionnaire_category","questionnaire_id",$questionnaire_id);

			//insert Questions
			$this->inserQuestionToResultTable($r_questionnaire_id, $categories);
	        echo json_encode($r_questionnaire_id);
	        die();
	    }
	}

	// update prepared questionnaire
	public function handlejsonUpdateQuestionnaire($r_questionnaire_id,$question_id,$rate){
		if ($this->isAjax()) {

			if($this->context->generalRepository->updateQuestionnaire("result_question",$r_questionnaire_id,$question_id,$rate))
	        echo json_encode(true);
	    	else
	        echo json_encode(false);
	        die();
	    }
	}


	// update summary evaluation to prepared questionnaire
	public function handlejsonUpdateSummaryEvaluationQuestionnaire($r_questionnaire_id,$room,$summaryEva,$score){
		if ($this->isAjax()) {

			date_default_timezone_set('Europe/Bratislava');
			$date = new DateTime();
			$submit_time = date('Y-m-d H:i:s',$date->getTimestamp());

			$data = array(
				'room' => $room, 
				'submit_time' => $submit_time, 
				'summary_evaluation' => $summaryEva,
				'score' => $score
			);

			if($this->context->generalRepository->updateTableById("result_questionnaire","r_questionnaire_id",$r_questionnaire_id,$data))
	        echo json_encode(true);
	    	else
	        echo json_encode(false);
	        die();
	    }
	}




}
