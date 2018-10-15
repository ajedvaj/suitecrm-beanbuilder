<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Campaigns/CampaignsStatus.php';
require_once 'custom/include/beanbuilder/model/Campaigns/CampaignsCampaign_type.php';
require_once 'custom/include/beanbuilder/model/Campaigns/CampaignsFrequency.php';

class CampaignsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Campaigns');
    }
    
    
    function tracker_key($tracker_key = '')
    {
        $this->bean->tracker_key = $tracker_key;
        return $this;
    }
	
    function tracker_count($tracker_count = '')
    {
        $this->bean->tracker_count = $tracker_count;
        return $this;
    }
	
    function refer_url($refer_url = '')
    {
        $this->bean->refer_url = $refer_url;
        return $this;
    }
	
    function tracker_text($tracker_text = '')
    {
        $this->bean->tracker_text = $tracker_text;
        return $this;
    }
	
    function start_date($start_date = '')
    {
        $this->bean->start_date = $start_date;
        return $this;
    }
	
    function end_date($end_date = '')
    {
        $this->bean->end_date = $end_date;
        return $this;
    }
	
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function impressions($impressions = '')
    {
        $this->bean->impressions = $impressions;
        return $this;
    }
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function budget($budget = '')
    {
        $this->bean->budget = $budget;
        return $this;
    }
	
    function expected_cost($expected_cost = '')
    {
        $this->bean->expected_cost = $expected_cost;
        return $this;
    }
	
    function actual_cost($actual_cost = '')
    {
        $this->bean->actual_cost = $actual_cost;
        return $this;
    }
	
    function expected_revenue($expected_revenue = '')
    {
        $this->bean->expected_revenue = $expected_revenue;
        return $this;
    }
	
    function campaign_type($campaign_type = '')
    {
        $this->bean->campaign_type = $campaign_type;
        return $this;
    }
	
    function objective($objective = '')
    {
        $this->bean->objective = $objective;
        return $this;
    }
	
    function content($content = '')
    {
        $this->bean->content = $content;
        return $this;
    }
	
    function frequency($frequency = '')
    {
        $this->bean->frequency = $frequency;
        return $this;
    }
	
    function survey_name($survey_name = '')
    {
        $this->bean->survey_name = $survey_name;
        return $this;
    }
	
    function survey_id($survey_id = '')
    {
        $this->bean->survey_id = $survey_id;
        return $this;
    }
	   
	
}