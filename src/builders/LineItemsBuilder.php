<?php

require_once 'BeanBuilder.php';

/**
 *  Class LineItemsBuilder
 *
 * Builder class for creating new AOS_Products_Quotes beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/AOS_Products_Quotes/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class LineItemsBuilder extends BeanBuilder
{

    
    /**
     * Constructor
     *
     * Initializes new AOS_Products_Quotes bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('AOS_Products_Quotes');
    }

    function partNumber($part_number)
    {
        $this->bean->part_number = $part_number;
        return $this;
    }
    
    function number($number)
    {
        $this->bean->number = $number;
        return $this;
    }
    
    function productQuantity($productQuantity){
        $this->bean->product_qty = $productQuantity;
        return $this;
    }
    
    function productListPrice($productListPrice){
        $this->bean->product_list_price = $productListPrice;
        return $this;
    }
    
    function productDiscount($productDiscount) {
        $this->bean->product_discount = $productDiscount;
        return $this;
    }
    
    function productDiscountAmount($productDiscountAmount){
        $this->bean->product_discount_amount = $productDiscountAmount;
        return $this;
    }
   
    /**
     * Sets discount for AOS_Products_Quotes bean
     *
     * @param float $discount
     * @return LineItemsBuilder
     */
    function discount($discount){
        $this->bean->discount = $discount;
        return $this;
    }
    
    function productUnitPrice($product_unit_price){
        $this->bean->product_unit_price = $product_unit_price;
        return $this;
    }
    
    function productTotalPrice($productTotalPrice){
        $this->bean->product_total_price = $productTotalPrice;
        return $this;
    }
    
    function vat($vat){
        $this->bean->vat = $vat;
        return $this;
    }
    
    function vatAmt($vatAmt){
        $this->bean->vat_amt = $vatAmt;
        return $this;
    }
    
    function parent($parentType, $parentId)
    {
        $this->bean->parent_type = $parentType;
        $this->bean->parent_id = $parentId;
        return $this;
    }
    
    function productId($productId){
        $this->bean->product_id = $productId;
        return $this;
    }
    
    function lineItemsGroupId($groupId){
        $this->bean->group_id = $groupId;
        return $this;
    }
    
    function itemDescription($itemDescription){
       $this->bean->item_description = $itemDescription;
       return $this;
   }
}

?>