<?php

require_once '../core/BeanBuilder.php';


class CallsBuilder extends BeanBuilder
{
    const STATUS_PLANNED = "Planned";
    const STATUS_HELD = "Held";
    const STATUS_NOT_HELD = "Not Held";

    /**
     * Constructor
     *
     * Initializes new Calls bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Calls');
        $this->bean->is_read = 0;
    }
    
    function status($status = self::STATUS_PLANNED)
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
    
    function duration($hours, $minutes){
        $this->bean->duration_hours = $hours;
        $this->bean->duration_minutes = $minutes;
        return $this;
    }

}

?>