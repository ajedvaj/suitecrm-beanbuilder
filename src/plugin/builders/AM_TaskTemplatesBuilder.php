<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AM_TaskTemplates/AM_TaskTemplatesStatus.php';
require_once 'custom/include/beanbuilder/model/AM_TaskTemplates/AM_TaskTemplatesPriority.php';
require_once 'custom/include/beanbuilder/model/AM_TaskTemplates/AM_TaskTemplatesRelationship_type.php';
require_once 'custom/include/beanbuilder/model/AM_TaskTemplates/AM_TaskTemplatesUtilization.php';

class AM_TaskTemplatesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AM_TaskTemplates');
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
	
    function percent_complete($percent_complete = '')
    {
        $this->bean->percent_complete = $percent_complete;
        return $this;
    }
	
    function predecessors($predecessors = '')
    {
        $this->bean->predecessors = $predecessors;
        return $this;
    }
	
    function milestone_flag($milestone_flag = '')
    {
        $this->bean->milestone_flag = $milestone_flag;
        return $this;
    }
	
    function relationship_type($relationship_type = '')
    {
        $this->bean->relationship_type = $relationship_type;
        return $this;
    }
	
    function task_number($task_number = '')
    {
        $this->bean->task_number = $task_number;
        return $this;
    }
	
    function order_number($order_number = '')
    {
        $this->bean->order_number = $order_number;
        return $this;
    }
	
    function estimated_effort($estimated_effort = '')
    {
        $this->bean->estimated_effort = $estimated_effort;
        return $this;
    }
	
    function utilization($utilization = '')
    {
        $this->bean->utilization = $utilization;
        return $this;
    }
	
    function duration($duration = '')
    {
        $this->bean->duration = $duration;
        return $this;
    }
	   
}