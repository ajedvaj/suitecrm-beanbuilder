<?php

require_once 'BeanBuilder.php';

/**
 *  Class SecurityGroupBuilder
 *
 * Builder class for creating new SecurityGroup beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/SecurityGroups/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class SecurityGroupBuilder extends BeanBuilder
{

    
    /**
     * Constructor
     *
     * Initializes new SecurityGroups bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('SecurityGroups');
    }

    /**
     * Sets noninheritable for SecuirtyGroup bean
     *
     * @param boolean $noninheritable
     *            true or false
     * @return SecurityGroupBuilder
     */
    function noninheritable($noninheritable = false)
    {
        $this->bean->noninheritable = $noninheritable;
        return $this;
    }

   
}

?>