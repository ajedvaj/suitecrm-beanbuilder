<?php

require_once 'BeanBuilder.php';

/**
 *  Class LineItemGroupsBuilder
 *
 * Builder class for creating new AOS_Line_Item_Groups beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class LineItemGroupsBuilder extends BeanBuilder
{

    
    /**
     * Constructor
     *
     * Initializes new AOS_Line_Item_Groups bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('AOS_Line_Item_Groups');
    }


    function parent($parentType, $parentId)
    {
        $this->bean->parent_type = $parentType;
        $this->bean->parent_id = $parentId;
        return $this;
    }
    
    function number($number){
        $this->bean->number = $number;
        return $this;
    }
    
    function currencyId($currencyId){
        $this->bean->currency_id = $currencyId;
        return $this;
    }
    
    function currency(Currency $currency){
        $this->bean->currency_id = $currency->id;
        return $this;
    }
    
    function totalAmt($totalAmt){
        $this->bean->total_amt = $totalAmt;
        return $this;
    }
    
    function discountAmount($discountAmount){
        $this->bean->discount_amount = $discountAmount;
        return $this;
    }
    
    function subtotalAmount($subtotalAmount){
        $this->bean->subtotal_amount = $subtotalAmount;
        return $this;
    }
    
    function taxAmount($taxAmount){
        $this->bean->tax_amount = $tayAmount;
        return $this;
    }
    
    function subtotalTaxAmount($subtotalTaxAmount){
        $this->bean->subtotal_tax_amount = $subtotalTaxAmount;
        return $this;
    }
    
    function totalAmount($totalAmount){
        $this->bean->total_amount = $totalAmount;
        return $this;
    }
}

?>