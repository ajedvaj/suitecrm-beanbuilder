<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class jjwg_Address_CacheBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('jjwg_Address_Cache');
    }
    
    
    function lat($lat = '')
    {
        $this->bean->lat = $lat;
        return $this;
    }
	
    function lng($lng = '')
    {
        $this->bean->lng = $lng;
        return $this;
    }
	   
	
}