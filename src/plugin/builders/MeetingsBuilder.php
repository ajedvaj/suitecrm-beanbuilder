<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsStatus.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsType.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsReminder_time.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsEmail_reminder_time.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsRepeat_type.php';
require_once 'custom/include/beanbuilder/model/Meetings/MeetingsDuration.php';

class MeetingsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Meetings');
    }
	
    function location($location = '')
    {
        $this->bean->location = $location;
        return $this;
    }
	
    function password($password = '')
    {
        $this->bean->password = $password;
        return $this;
    }
	
    function join_url($join_url = '')
    {
        $this->bean->join_url = $join_url;
        return $this;
    }
	
    function host_url($host_url = '')
    {
        $this->bean->host_url = $host_url;
        return $this;
    }
	
    function displayed_url($displayed_url = '')
    {
        $this->bean->displayed_url = $displayed_url;
        return $this;
    }
	
    function creator($creator = '')
    {
        $this->bean->creator = $creator;
        return $this;
    }
	
    function external_id($external_id = '')
    {
        $this->bean->external_id = $external_id;
        return $this;
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
	
    function type($type = '')
    {
        $this->bean->type = $type;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	
    function reminder_time($reminder_time = '')
    {
        $this->bean->reminder_time = $reminder_time;
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
	
    function sequence($sequence = '')
    {
        $this->bean->sequence = $sequence;
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
    
    function jjwg_maps_address_c($jjwg_maps_address_c = '')
    {
        $this->bean->jjwg_maps_address_c = $jjwg_maps_address_c;
        return $this;
    }
	
    function jjwg_maps_geocode_status_c($jjwg_maps_geocode_status_c = '')
    {
        $this->bean->jjwg_maps_geocode_status_c = $jjwg_maps_geocode_status_c;
        return $this;
    }
	
    function jjwg_maps_lat_c($jjwg_maps_lat_c = '')
    {
        $this->bean->jjwg_maps_lat_c = $jjwg_maps_lat_c;
        return $this;
    }
	
    function jjwg_maps_lng_c($jjwg_maps_lng_c = '')
    {
        $this->bean->jjwg_maps_lng_c = $jjwg_maps_lng_c;
        return $this;
    }
	   
	
}