<?php

abstract class BeanBuilder {
    /**
     * @var SugarBean $bean object to create
     */
    protected $bean = NULL;
    
    /**
     * Constructor
     *
     * Initializes new SugarBean object
     *
     * @return void
     */
    protected function __construct($moduleName) {
        $this->bean = BeanFactory::newBean($moduleName);
    }
    
    /**
     * Sets name for SugarBean
     *
     * @param string $name bean name
     * @return BeanBuilder
     */
    function name($name){
        $this->bean->name = $name;
        return $this;
    }
    
    
    /**
     * Sets description for SugarBean
     *
     * @param string $description bean description
     * @return BeanBuilder
     */
    function description($description = ''){
        $this->bean->description = $description;
        return $this;
    }
    
    /**
     * Sets id of Assigned User for SugarBean
     *
     * @param string $userId ID of Users bean
     * @return BeanBuilder
     */
    function assignedUser($userId = 1){
        $this->bean->assigned_user_id = $userId;
        return $this;
    }
    
    /**
     * Returns SugarBean object
     *
     * @return SugarBean
     */
    function build(){
        return $this->bean;
    }
}
?>