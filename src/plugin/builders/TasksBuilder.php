<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Tasks/TasksStatus.php';
require_once 'custom/include/beanbuilder/model/Tasks/TasksPriority.php';

class TasksBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Tasks');
    }
    
    
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function date_due_flag($date_due_flag = '')
    {
        $this->bean->date_due_flag = $date_due_flag;
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
	
    function date_start_flag($date_start_flag = '')
    {
        $this->bean->date_start_flag = $date_start_flag;
        return $this;
    }
	
    function date_start($date_start = '')
    {
        $this->bean->date_start = $date_start;
        return $this;
    }
	
    function parent_type($parent_type = '')
    {
        $this->bean->parent_type = $parent_type;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function priority($priority = '')
    {
        $this->bean->priority = $priority;
        return $this;
    }
	
}