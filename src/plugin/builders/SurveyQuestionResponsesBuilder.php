<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class SurveyQuestionResponsesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('SurveyQuestionResponses');
    }
    
    
    function answer($answer = '')
    {
        $this->bean->answer = $answer;
        return $this;
    }
	
    function answer_bool($answer_bool = '')
    {
        $this->bean->answer_bool = $answer_bool;
        return $this;
    }
	
    function answer_datetime($answer_datetime = '')
    {
        $this->bean->answer_datetime = $answer_datetime;
        return $this;
    }
	
    function surveyquestion_id($surveyquestion_id = '')
    {
        $this->bean->surveyquestion_id = $surveyquestion_id;
        return $this;
    }
	
    function surveyresponse_id($surveyresponse_id = '')
    {
        $this->bean->surveyresponse_id = $surveyresponse_id;
        return $this;
    }
	   
	
}