<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Calls/CallsStatus.php';
require_once 'custom/include/beanbuilder/model/Calls/CallsDirection.php';
require_once 'custom/include/beanbuilder/model/Calls/CallsReminder_time.php';
require_once 'custom/include/beanbuilder/model/Calls/CallsEmail_reminder_time.php';
require_once 'custom/include/beanbuilder/model/Calls/CallsRepeat_type.php';

class CallsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Calls');
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
	
    function parent_type($parent_type = '')
    {
        $this->bean->parent_type = $parent_type;
        return $this;
    }
	
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function direction($direction = '')
    {
        $this->bean->direction = $direction;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	
    function reminder_checked($reminder_checked = '')
    {
        $this->bean->reminder_checked = $reminder_checked;
        return $this;
    }
	
    function reminder_time($reminder_time = '')
    {
        $this->bean->reminder_time = $reminder_time;
        return $this;
    }
	
    function email_reminder_checked($email_reminder_checked = '')
    {
        $this->bean->email_reminder_checked = $email_reminder_checked;
        return $this;
    }
	
    function email_reminder_time($email_reminder_time = '')
    {
        $this->bean->email_reminder_time = $email_reminder_time;
        return $this;
    }
	
    function email_reminder_sent($email_reminder_sent = '')
    {
        $this->bean->email_reminder_sent = $email_reminder_sent;
        return $this;
    }
	
    function outlook_id($outlook_id = '')
    {
        $this->bean->outlook_id = $outlook_id;
        return $this;
    }
	
    function accept_status($accept_status = '')
    {
        $this->bean->accept_status = $accept_status;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function repeat_type($repeat_type = '')
    {
        $this->bean->repeat_type = $repeat_type;
        return $this;
    }
	
    function repeat_interval($repeat_interval = '')
    {
        $this->bean->repeat_interval = $repeat_interval;
        return $this;
    }
	
    function repeat_dow($repeat_dow = '')
    {
        $this->bean->repeat_dow = $repeat_dow;
        return $this;
    }
	
    function repeat_until($repeat_until = '')
    {
        $this->bean->repeat_until = $repeat_until;
        return $this;
    }
	
    function repeat_count($repeat_count = '')
    {
        $this->bean->repeat_count = $repeat_count;
        return $this;
    }
	
    function repeat_parent_id($repeat_parent_id = '')
    {
        $this->bean->repeat_parent_id = $repeat_parent_id;
        return $this;
    }
	
    function recurring_source($recurring_source = '')
    {
        $this->bean->recurring_source = $recurring_source;
        return $this;
    }
	   
}