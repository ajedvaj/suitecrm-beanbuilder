<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Surveys/SurveysStatus.php';

class SurveysBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Surveys');
    }
    
    
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function submit_text($submit_text = '')
    {
        $this->bean->submit_text = $submit_text;
        return $this;
    }
	
    function satisfied_text($satisfied_text = '')
    {
        $this->bean->satisfied_text = $satisfied_text;
        return $this;
    }
	
    function neither_text($neither_text = '')
    {
        $this->bean->neither_text = $neither_text;
        return $this;
    }
	
    function dissatisfied_text($dissatisfied_text = '')
    {
        $this->bean->dissatisfied_text = $dissatisfied_text;
        return $this;
    }
	   
	
}