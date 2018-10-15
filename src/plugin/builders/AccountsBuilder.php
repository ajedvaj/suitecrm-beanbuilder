<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Accounts/AccountsAccount_type.php';
require_once 'custom/include/beanbuilder/model/Accounts/AccountsIndustry.php';

class AccountsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Accounts');
    }
    
    
    function account_type($account_type = '')
    {
        $this->bean->account_type = $account_type;
        return $this;
    }
	
    function industry($industry = '')
    {
        $this->bean->industry = $industry;
        return $this;
    }
	
    function annual_revenue($annual_revenue = '')
    {
        $this->bean->annual_revenue = $annual_revenue;
        return $this;
    }
	
    function phone_fax($phone_fax = '')
    {
        $this->bean->phone_fax = $phone_fax;
        return $this;
    }
	
    function billing_address_street($billing_address_street = '')
    {
        $this->bean->billing_address_street = $billing_address_street;
        return $this;
    }
	
    function billing_address_city($billing_address_city = '')
    {
        $this->bean->billing_address_city = $billing_address_city;
        return $this;
    }
	
    function billing_address_state($billing_address_state = '')
    {
        $this->bean->billing_address_state = $billing_address_state;
        return $this;
    }
	
    function billing_address_postalcode($billing_address_postalcode = '')
    {
        $this->bean->billing_address_postalcode = $billing_address_postalcode;
        return $this;
    }
	
    function billing_address_country($billing_address_country = '')
    {
        $this->bean->billing_address_country = $billing_address_country;
        return $this;
    }
	
    function rating($rating = '')
    {
        $this->bean->rating = $rating;
        return $this;
    }
	
    function phone_office($phone_office = '')
    {
        $this->bean->phone_office = $phone_office;
        return $this;
    }
	
    function phone_alternate($phone_alternate = '')
    {
        $this->bean->phone_alternate = $phone_alternate;
        return $this;
    }
	
    function website($website = '')
    {
        $this->bean->website = $website;
        return $this;
    }
	
    function ownership($ownership = '')
    {
        $this->bean->ownership = $ownership;
        return $this;
    }
	
    function employees($employees = '')
    {
        $this->bean->employees = $employees;
        return $this;
    }
	
    function ticker_symbol($ticker_symbol = '')
    {
        $this->bean->ticker_symbol = $ticker_symbol;
        return $this;
    }
	
    function shipping_address_street($shipping_address_street = '')
    {
        $this->bean->shipping_address_street = $shipping_address_street;
        return $this;
    }
	
    function shipping_address_city($shipping_address_city = '')
    {
        $this->bean->shipping_address_city = $shipping_address_city;
        return $this;
    }
	
    function shipping_address_state($shipping_address_state = '')
    {
        $this->bean->shipping_address_state = $shipping_address_state;
        return $this;
    }
	
    function shipping_address_postalcode($shipping_address_postalcode = '')
    {
        $this->bean->shipping_address_postalcode = $shipping_address_postalcode;
        return $this;
    }
	
    function shipping_address_country($shipping_address_country = '')
    {
        $this->bean->shipping_address_country = $shipping_address_country;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	
    function sic_code($sic_code = '')
    {
        $this->bean->sic_code = $sic_code;
        return $this;
    }
	
    function email_opt_out($email_opt_out = '')
    {
        $this->bean->email_opt_out = $email_opt_out;
        return $this;
    }
	
    function invalid_email($invalid_email = '')
    {
        $this->bean->invalid_email = $invalid_email;
        return $this;
    }
	
    function campaign_id($campaign_id = '')
    {
        $this->bean->campaign_id = $campaign_id;
        return $this;
    }
	
    function campaign_name($campaign_name = '')
    {
        $this->bean->campaign_name = $campaign_name;
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