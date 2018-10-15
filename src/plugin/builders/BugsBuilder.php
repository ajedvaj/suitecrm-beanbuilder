<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsType.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsStatus.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsPriority.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsResolution.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsSource.php';
require_once 'custom/include/beanbuilder/model/Bugs/BugsProduct_category.php';

class BugsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Bugs');
    }
    
    
    function bug_number($bug_number = '')
    {
        $this->bean->bug_number = $bug_number;
        return $this;
    }
	
    function type($type = '')
    {
        $this->bean->type = $type;
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
	
    function resolution($resolution = '')
    {
        $this->bean->resolution = $resolution;
        return $this;
    }
	
    function work_log($work_log = '')
    {
        $this->bean->work_log = $work_log;
        return $this;
    }
	
    function found_in_release($found_in_release = '')
    {
        $this->bean->found_in_release = $found_in_release;
        return $this;
    }
	
    function release_name($release_name = '')
    {
        $this->bean->release_name = $release_name;
        return $this;
    }
	
    function fixed_in_release($fixed_in_release = '')
    {
        $this->bean->fixed_in_release = $fixed_in_release;
        return $this;
    }
	
    function fixed_in_release_name($fixed_in_release_name = '')
    {
        $this->bean->fixed_in_release_name = $fixed_in_release_name;
        return $this;
    }
	
    function source($source = '')
    {
        $this->bean->source = $source;
        return $this;
    }
	
    function product_category($product_category = '')
    {
        $this->bean->product_category = $product_category;
        return $this;
    }
	   
	
}