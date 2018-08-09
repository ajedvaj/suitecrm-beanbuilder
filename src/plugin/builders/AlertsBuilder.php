<?php
require_once '../core/BeanBuilder.php';
require_once '../model/AlertsType.php';

/**
 *  Class AlertsBuilder
 *
 * Builder class for creating new Alert beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/Alerts/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class AlertsBuilder extends BeanBuilder
{


    /**
     * Constructor
     *
     * Initializes new Alerts bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Alerts');
        $this->bean->is_read = 0;
    }


    /**
     * Sets target module for Alert bean
     *
     * @param string $targetModule
     *            module name of target module
     * @return AlertsBuilder
     */
    function targetModule($targetModule = '')
    {
        $this->bean->target_module = $targetModule;
        return $this;
    }

    /**
     * Sets type for Alert bean
     *
     * @param string $targetModule
     *            type one of $TYPE_INFO / $TYPE_SUCCESS / $TYPE_WARNING / $TYPE_ERROR
     * @return AlertsBuilder
     */
    function type($type = AlertsType::INFO)
    {
        $this->bean->type = $type;
        return $this;
    }

}

?>