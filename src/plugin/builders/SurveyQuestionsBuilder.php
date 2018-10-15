<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/SurveyQuestions/SurveyQuestionsType.php';

class SurveyQuestionsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('SurveyQuestions');
    }
    
    
    function sort_order($sort_order = '')
    {
        $this->bean->sort_order = $sort_order;
        return $this;
    }
	
    function type($type = '')
    {
        $this->bean->type = $type;
        return $this;
    }
	
    function happiness_question($happiness_question = '')
    {
        $this->bean->happiness_question = $happiness_question;
        return $this;
    }
	
    function survey_id($survey_id = '')
    {
        $this->bean->survey_id = $survey_id;
        return $this;
    }
	   
	
}