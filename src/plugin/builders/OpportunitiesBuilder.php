<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Opportunities/OpportunitiesOpportunity_type.php';
require_once 'custom/include/beanbuilder/model/Opportunities/OpportunitiesLead_source.php';
require_once 'custom/include/beanbuilder/model/Opportunities/OpportunitiesSales_stage.php';

class OpportunitiesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Opportunities');
    }
    
    
    function opportunity_type($opportunity_type = '')
    {
        $this->bean->opportunity_type = $opportunity_type;
        return $this;
    }
	
    function account_id($account_id = '')
    {
        $this->bean->account_id = $account_id;
        return $this;
    }
	
    function campaign_id($campaign_id = '')
    {
        $this->bean->campaign_id = $campaign_id;
        return $this;
    }
	
    function lead_source($lead_source = '')
    {
        $this->bean->lead_source = $lead_source;
        return $this;
    }
	
    function amount($amount = '')
    {
        $this->bean->amount = $amount;
        return $this;
    }
	
    function amount_usdollar($amount_usdollar = '')
    {
        $this->bean->amount_usdollar = $amount_usdollar;
        return $this;
    }
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function date_closed($date_closed = '')
    {
        $this->bean->date_closed = $date_closed;
        return $this;
    }
	
    function next_step($next_step = '')
    {
        $this->bean->next_step = $next_step;
        return $this;
    }
	
    function sales_stage($sales_stage = '')
    {
        $this->bean->sales_stage = $sales_stage;
        return $this;
    }
	
    function probability($probability = '')
    {
        $this->bean->probability = $probability;
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