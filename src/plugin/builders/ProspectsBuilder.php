<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Prospects/ProspectsSalutation.php';
require_once 'custom/include/beanbuilder/model/Prospects/ProspectsLawful_basis.php';
require_once 'custom/include/beanbuilder/model/Prospects/ProspectsLawful_basis_source.php';

class ProspectsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Prospects');
    }
    
    
    function salutation($salutation = '')
    {
        $this->bean->salutation = $salutation;
        return $this;
    }
	
    function first_name($first_name = '')
    {
        $this->bean->first_name = $first_name;
        return $this;
    }
	
    function last_name($last_name = '')
    {
        $this->bean->last_name = $last_name;
        return $this;
    }
	
    function title($title = '')
    {
        $this->bean->title = $title;
        return $this;
    }
	
    function photo($photo = '')
    {
        $this->bean->photo = $photo;
        return $this;
    }
	
    function department($department = '')
    {
        $this->bean->department = $department;
        return $this;
    }
	
    function do_not_call($do_not_call = '')
    {
        $this->bean->do_not_call = $do_not_call;
        return $this;
    }
	
    function phone_home($phone_home = '')
    {
        $this->bean->phone_home = $phone_home;
        return $this;
    }
	
    function phone_mobile($phone_mobile = '')
    {
        $this->bean->phone_mobile = $phone_mobile;
        return $this;
    }
	
    function phone_work($phone_work = '')
    {
        $this->bean->phone_work = $phone_work;
        return $this;
    }
	
    function phone_other($phone_other = '')
    {
        $this->bean->phone_other = $phone_other;
        return $this;
    }
	
    function phone_fax($phone_fax = '')
    {
        $this->bean->phone_fax = $phone_fax;
        return $this;
    }
	
    function lawful_basis($lawful_basis = '')
    {
        $this->bean->lawful_basis = $lawful_basis;
        return $this;
    }
	
    function date_reviewed($date_reviewed = '')
    {
        $this->bean->date_reviewed = $date_reviewed;
        return $this;
    }
	
    function lawful_basis_source($lawful_basis_source = '')
    {
        $this->bean->lawful_basis_source = $lawful_basis_source;
        return $this;
    }
	
    function primary_address_street($primary_address_street = '')
    {
        $this->bean->primary_address_street = $primary_address_street;
        return $this;
    }
	
    function primary_address_city($primary_address_city = '')
    {
        $this->bean->primary_address_city = $primary_address_city;
        return $this;
    }
	
    function primary_address_state($primary_address_state = '')
    {
        $this->bean->primary_address_state = $primary_address_state;
        return $this;
    }
	
    function primary_address_postalcode($primary_address_postalcode = '')
    {
        $this->bean->primary_address_postalcode = $primary_address_postalcode;
        return $this;
    }
	
    function primary_address_country($primary_address_country = '')
    {
        $this->bean->primary_address_country = $primary_address_country;
        return $this;
    }
	
    function alt_address_street($alt_address_street = '')
    {
        $this->bean->alt_address_street = $alt_address_street;
        return $this;
    }
	
    function alt_address_city($alt_address_city = '')
    {
        $this->bean->alt_address_city = $alt_address_city;
        return $this;
    }
	
    function alt_address_state($alt_address_state = '')
    {
        $this->bean->alt_address_state = $alt_address_state;
        return $this;
    }
	
    function alt_address_postalcode($alt_address_postalcode = '')
    {
        $this->bean->alt_address_postalcode = $alt_address_postalcode;
        return $this;
    }
	
    function alt_address_country($alt_address_country = '')
    {
        $this->bean->alt_address_country = $alt_address_country;
        return $this;
    }
	
    function assistant($assistant = '')
    {
        $this->bean->assistant = $assistant;
        return $this;
    }
	
    function assistant_phone($assistant_phone = '')
    {
        $this->bean->assistant_phone = $assistant_phone;
        return $this;
    }
	
    function tracker_key($tracker_key = '')
    {
        $this->bean->tracker_key = $tracker_key;
        return $this;
    }
	
    function birthdate($birthdate = '')
    {
        $this->bean->birthdate = $birthdate;
        return $this;
    }
	
    function lead_id($lead_id = '')
    {
        $this->bean->lead_id = $lead_id;
        return $this;
    }
	
    function account_name($account_name = '')
    {
        $this->bean->account_name = $account_name;
        return $this;
    }
	
    function campaign_id($campaign_id = '')
    {
        $this->bean->campaign_id = $campaign_id;
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