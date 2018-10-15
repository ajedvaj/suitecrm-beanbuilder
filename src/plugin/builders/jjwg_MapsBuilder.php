<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/jjwg_Maps/jjwg_MapsUnit_type.php';
require_once 'custom/include/beanbuilder/model/jjwg_Maps/jjwg_MapsModule_type.php';

class jjwg_MapsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('jjwg_Maps');
    }
    
    
    function distance($distance = '')
    {
        $this->bean->distance = $distance;
        return $this;
    }
	
    function unit_type($unit_type = '')
    {
        $this->bean->unit_type = $unit_type;
        return $this;
    }
	
    function module_type($module_type = '')
    {
        $this->bean->module_type = $module_type;
        return $this;
    }
	
    function parent_type($parent_type = '')
    {
        $this->bean->parent_type = $parent_type;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	   
	
}