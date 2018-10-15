<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/FP_events/FP_eventsDuration.php';
require_once 'custom/include/beanbuilder/model/FP_events/FP_eventsActivity_status_type.php';

class FP_eventsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('FP_events');
    }
    
    
    function duration_hours($duration_hours = '')
    {
        $this->bean->duration_hours = $duration_hours;
        return $this;
    }
	
    function duration_minutes($duration_minutes = '')
    {
        $this->bean->duration_minutes = $duration_minutes;
        return $this;
    }
	
    function date_start($date_start = '')
    {
        $this->bean->date_start = $date_start;
        return $this;
    }
	
    function date_end($date_end = '')
    {
        $this->bean->date_end = $date_end;
        return $this;
    }
	
    function budget($budget = '')
    {
        $this->bean->budget = $budget;
        return $this;
    }
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function invite_templates($invite_templates = '')
    {
        $this->bean->invite_templates = $invite_templates;
        return $this;
    }
	
    function accept_redirect($accept_redirect = '')
    {
        $this->bean->accept_redirect = $accept_redirect;
        return $this;
    }
	
    function decline_redirect($decline_redirect = '')
    {
        $this->bean->decline_redirect = $decline_redirect;
        return $this;
    }
	
	
    function activity_status_type($activity_status_type = '')
    {
        $this->bean->activity_status_type = $activity_status_type;
        return $this;
    }
	   
	
}