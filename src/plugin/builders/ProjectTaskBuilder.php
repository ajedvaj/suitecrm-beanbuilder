<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/ProjectTask/ProjectTaskStatus.php';
require_once 'custom/include/beanbuilder/model/ProjectTask/ProjectTaskRelationship_type.php';
require_once 'custom/include/beanbuilder/model/ProjectTask/ProjectTaskPriority.php';

class ProjectTaskBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('ProjectTask');
    }
    
    
    function project_id($project_id = '')
    {
        $this->bean->project_id = $project_id;
        return $this;
    }
	
    function project_task_id($project_task_id = '')
    {
        $this->bean->project_task_id = $project_task_id;
        return $this;
    }
	
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function relationship_type($relationship_type = '')
    {
        $this->bean->relationship_type = $relationship_type;
        return $this;
    }
	
    function predecessors($predecessors = '')
    {
        $this->bean->predecessors = $predecessors;
        return $this;
    }
	
    function date_start($date_start = '')
    {
        $this->bean->date_start = $date_start;
        return $this;
    }
	
    function time_start($time_start = '')
    {
        $this->bean->time_start = $time_start;
        return $this;
    }
	
    function time_finish($time_finish = '')
    {
        $this->bean->time_finish = $time_finish;
        return $this;
    }
	
    function date_finish($date_finish = '')
    {
        $this->bean->date_finish = $date_finish;
        return $this;
    }
	
    function duration($duration = '')
    {
        $this->bean->duration = $duration;
        return $this;
    }
	
    function duration_unit($duration_unit = '')
    {
        $this->bean->duration_unit = $duration_unit;
        return $this;
    }
	
    function actual_duration($actual_duration = '')
    {
        $this->bean->actual_duration = $actual_duration;
        return $this;
    }
	
    function percent_complete($percent_complete = '')
    {
        $this->bean->percent_complete = $percent_complete;
        return $this;
    }
	
    function date_due($date_due = '')
    {
        $this->bean->date_due = $date_due;
        return $this;
    }
	
    function time_due($time_due = '')
    {
        $this->bean->time_due = $time_due;
        return $this;
    }
	
    function parent_task_id($parent_task_id = '')
    {
        $this->bean->parent_task_id = $parent_task_id;
        return $this;
    }
	
    function priority($priority = '')
    {
        $this->bean->priority = $priority;
        return $this;
    }
	
    function milestone_flag($milestone_flag = '')
    {
        $this->bean->milestone_flag = $milestone_flag;
        return $this;
    }
	
    function order_number($order_number = '')
    {
        $this->bean->order_number = $order_number;
        return $this;
    }
	
    function task_number($task_number = '')
    {
        $this->bean->task_number = $task_number;
        return $this;
    }
	
    function estimated_effort($estimated_effort = '')
    {
        $this->bean->estimated_effort = $estimated_effort;
        return $this;
    }
	
    function actual_effort($actual_effort = '')
    {
        $this->bean->actual_effort = $actual_effort;
        return $this;
    }
	
    function utilization($utilization = '')
    {
        $this->bean->utilization = $utilization;
        return $this;
    }
	
}