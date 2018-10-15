<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class SurveyQuestionOptionsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('SurveyQuestionOptions');
    }
    
    
    function sort_order($sort_order = '')
    {
        $this->bean->sort_order = $sort_order;
        return $this;
    }
	
    function survey_question_id($survey_question_id = '')
    {
        $this->bean->survey_question_id = $survey_question_id;
        return $this;
    }
	   
	
}