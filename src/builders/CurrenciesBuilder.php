<?php
require_once '../core/BeanBuilder.php';
require_once '../model/CurrenciesStatus.php';

/**
 *  Class CurrenciesBuilder
 *
 * Builder class for creating new Currency beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/Currencies/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class CurrenciesBuilder extends BeanBuilder
{

    /**
     * Constructor
     *
     * Initializes new Currencies bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Currencies');
    }

    function iso4217($iso4217){
        $this->bean->iso4217 = $iso4217;
        return $this;
    }

    function conversionRate($conversionRate){
        $this->bean->conversion_rate = $conversionRate;
        return $this;
    }
    
    function symbol($symbol){
        $this->bean->symbol = $symbol;
        return $this;
    }
    
    function status($status){
        $this->bean->status = $status;
        return $this;
    }
}

?>