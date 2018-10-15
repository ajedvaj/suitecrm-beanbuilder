<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class SurveyResponsesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('SurveyResponses');
    }
    
    
    function question_responses_display($question_responses_display = '')
    {
        $this->bean->question_responses_display = $question_responses_display;
        return $this;
    }
	
    function happiness($happiness = '')
    {
        $this->bean->happiness = $happiness;
        return $this;
    }
	
    function email_response_sent($email_response_sent = '')
    {
        $this->bean->email_response_sent = $email_response_sent;
        return $this;
    }
	
    function account_id($account_id = '')
    {
        $this->bean->account_id = $account_id;
        return $this;
    }
	
    function campaign_id($campaign_id = '')
    {
        $this->bean->campaign_id = $campaign_id;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function survey_id($survey_id = '')
    {
        $this->bean->survey_id = $survey_id;
        return $this;
    }
	   
	
}