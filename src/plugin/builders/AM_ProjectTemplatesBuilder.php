<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AM_ProjectTemplates/AM_ProjectTemplatesStatus.php';
require_once 'custom/include/beanbuilder/model/AM_ProjectTemplates/AM_ProjectTemplatesPriority.php';

class AM_ProjectTemplatesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AM_ProjectTemplates');
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
	
    function override_business_hours($override_business_hours = '')
    {
        $this->bean->override_business_hours = $override_business_hours;
        return $this;
    }
	   
	
}