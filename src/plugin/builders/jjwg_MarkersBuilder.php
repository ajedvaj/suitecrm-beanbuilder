<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/jjwg_Markers/jjwg_MarkersMarker_image.php';

class jjwg_MarkersBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('jjwg_Markers');
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
	
    function jjwg_maps_lat($jjwg_maps_lat = '')
    {
        $this->bean->jjwg_maps_lat = $jjwg_maps_lat;
        return $this;
    }
	
    function jjwg_maps_lng($jjwg_maps_lng = '')
    {
        $this->bean->jjwg_maps_lng = $jjwg_maps_lng;
        return $this;
    }
	
    function marker_image($marker_image = '')
    {
        $this->bean->marker_image = $marker_image;
        return $this;
    }
	   
	
}