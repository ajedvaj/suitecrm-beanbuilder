<?php
require_once '../core/BeanBuilder.php';
require_once '../model/TasksPriority.php';
require_once '../model/TasksStatus.php';

/**
 * Class TasksBuilder
 *
 * Builder class for creating new Task beans.
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/Task/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class TasksBuilder extends BeanBuilder
{

    /**
     * Constructor
     *
     * Initializes new Tasks bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Tasks');
    }

    function status($status = TasksStatus::STATUS_NOT_STARTED)
    {
        $this->bean->status = $status;
        return $this;
    }

    function parent($parentType, $parentId)
    {
        $this->bean->parent_type = $parentType;
        $this->bean->parent_id = $parentId;
        return $this;
    }

    function priorty($priority = TasksPriority::PRIORITY_MEDIUM)
    {
        $this->bean->priority = $priority;
        return $this;
    }
    
    function startDate(DateTime $startDate)
    {
        $this->bean->date_start = $startDate->format('Y-m-d H:i:s');
        return $this;
    }
    
    function dueDate(DateTime $dueDate)
    {
        $this->bean->date_due = $dueDate->format('Y-m-d H:i:s');
        return $this;
    }
    
    /**
     * Calculates date_due for Task bean.
     * 
     * Formula: date_start + duration in days  = date_due [
     * If date_start is empty it will take current date - new DateTime('now') 
     * 
     * @param int $duration
     * @return TasksBuilder
     */
    function duration($duration)
    {
        $start = empty($this->bean->date_start) ? new DateTime('now') : $this->bean->date_start;
        $end = new DateTime('now + ' . $duration . ' days');
        
        $this->startDate($start);
        $this->dueDate($end);
        
        return $this;
    }
}

?>