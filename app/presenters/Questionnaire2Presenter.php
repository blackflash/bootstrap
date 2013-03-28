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

	public function renderDefault($questionnaire_id = "1",$page = "slideshow"){

		$this->template->questionnaire_id 	= $questionnaire_id;
		$this->template->questionnaire		= $this->context->generalRepository->getByTableAndId("questionnaire","questionnaire_id",$questionnaire_id)->fetch();
		$this->template->categories			= $this->context->generalRepository->getByTableAndId("questionnaire_category","questionnaire_id",$questionnaire_id);
		$this->template->language_pack		= $this->context->generalRepository->getByTableAndId("language_pack","questionnaire_id",$questionnaire_id);

		$this->template->title = $this->template->questionnaire->title;
		$this->template->questions 			= $this->prepareQuestions($this->template->categories);
		$this->template->page = $page.".latte";
	
		//$this->testInsert("1","sk");
	}


	protected function testInsert($questionnaire_id,$language){
		$questionnaireData = array(
				"r_questionnaire_id" => "",
				"questionnaire_id"   => $questionnaire_id,
				"start_date"         => NULL,
				"language_selected"  => $language,
				"room"               => NULL,
				"submit_time"        => NULL,
				"score"              => NULL
			);

			//insert to result_questionnaire
			$this->context->generalRepository->insertRowByTable("result_questionnaire",$questionnaireData);

			$r_questionnaire_id = $this->context->generalRepository->getLastInsertedId("result_questionnaire","r_questionnaire_id");
			
			//insert Questions
			$this->inserQuestionToResultTable($r_questionnaire_id, $this->template->categories);
			$jsondata = $r_questionnaire_id;

			echo "<pre>";
			print_r($jsondata);
			echo "</pre>";
			die();
	}

	//pripravi otazky rozdelene podla kategorii
	protected function prepareQuestions($categories){
		$questions = array();

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
			}

			$questions[$value->category_id] = $group;
		}
		return $questions;
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

	public function handlejsonPrepareQuestionnaire($questionnaire_id,$language){
		if ($this->isAjax()) {

			$questionnaireData = array(
				"r_questionnaire_id" => "",
				"questionnaire_id"   => $questionnaire_id,
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




}
