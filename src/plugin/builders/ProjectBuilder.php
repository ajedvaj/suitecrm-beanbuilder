<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Project/ProjectStatus.php';
require_once 'custom/include/beanbuilder/model/Project/ProjectPriority.php';

class ProjectBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Project');
    }
    
    
    function estimated_start_date($estimated_start_date = '')
    {
        $this->bean->estimated_start_date = $estimated_start_date;
        return $this;
    }
	
    function estimated_end_date($estimated_end_date = '')
    {
        $this->bean->estimated_end_date = $estimated_end_date;
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
	
    function override_business_hours($override_business_hours = '')
    {
        $this->bean->override_business_hours = $override_business_hours;
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