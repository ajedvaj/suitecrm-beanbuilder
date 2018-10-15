<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class jjwg_AreasBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('jjwg_Areas');
    }
    
    
    function city($city = '')
    {
        $this->bean->city = $city;
        return $this;
    }
	
    function state($state = '')
    {
        $this->bean->state = $state;
        return $this;
    }
	
    function country($country = '')
    {
        $this->bean->country = $country;
        return $this;
    }
	
    function coordinates($coordinates = '')
    {
        $this->bean->coordinates = $coordinates;
        return $this;
    }
	   
	
}