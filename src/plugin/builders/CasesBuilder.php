<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Cases/CasesType.php';
require_once 'custom/include/beanbuilder/model/Cases/CasesPriority.php';
require_once 'custom/include/beanbuilder/model/Cases/CasesState.php';
require_once 'custom/include/beanbuilder/model/Cases/CasesStatus.php';

class CasesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Cases');
    }
    
    
    function case_number($case_number = '')
    {
        $this->bean->case_number = $case_number;
        return $this;
    }
	
    function type($type = '')
    {
        $this->bean->type = $type;
        return $this;
    }
	
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function priority($priority = '')
    {
        $this->bean->priority = $priority;
        return $this;
    }
	
    function resolution($resolution = '')
    {
        $this->bean->resolution = $resolution;
        return $this;
    }
	
    function work_log($work_log = '')
    {
        $this->bean->work_log = $work_log;
        return $this;
    }
	
    function suggestion_box($suggestion_box = '')
    {
        $this->bean->suggestion_box = $suggestion_box;
        return $this;
    }
	
    function account_id($account_id = '')
    {
        $this->bean->account_id = $account_id;
        return $this;
    }
	
    function state($state = '')
    {
        $this->bean->state = $state;
        return $this;
    }
	
    function contact_created_by_id($contact_created_by_id = '')
    {
        $this->bean->contact_created_by_id = $contact_created_by_id;
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