<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class FP_Event_LocationsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('FP_Event_Locations');
    }
    
    
    function address($address = '')
    {
        $this->bean->address = $address;
        return $this;
    }
	
    function address_city($address_city = '')
    {
        $this->bean->address_city = $address_city;
        return $this;
    }
	
    function address_country($address_country = '')
    {
        $this->bean->address_country = $address_country;
        return $this;
    }
	
    function address_postalcode($address_postalcode = '')
    {
        $this->bean->address_postalcode = $address_postalcode;
        return $this;
    }
	
    function address_state($address_state = '')
    {
        $this->bean->address_state = $address_state;
        return $this;
    }
	
    function capacity($capacity = '')
    {
        $this->bean->capacity = $capacity;
        return $this;
    }
	   
	
}