<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AOS_Contracts/AOS_ContractsStatus.php';
require_once 'custom/include/beanbuilder/model/AOS_Contracts/AOS_ContractsContract_type.php';
require_once 'custom/include/beanbuilder/model/AOS_Contracts/AOS_ContractsShipping_tax.php';

class AOS_ContractsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AOS_Contracts');
    }
    
    
    function reference_code($reference_code = '')
    {
        $this->bean->reference_code = $reference_code;
        return $this;
    }
	
    function start_date($start_date = '')
    {
        $this->bean->start_date = $start_date;
        return $this;
    }
	
    function end_date($end_date = '')
    {
        $this->bean->end_date = $end_date;
        return $this;
    }
	
    function total_contract_value($total_contract_value = '')
    {
        $this->bean->total_contract_value = $total_contract_value;
        return $this;
    }
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function customer_signed_date($customer_signed_date = '')
    {
        $this->bean->customer_signed_date = $customer_signed_date;
        return $this;
    }
	
    function company_signed_date($company_signed_date = '')
    {
        $this->bean->company_signed_date = $company_signed_date;
        return $this;
    }
	
    function renewal_reminder_date($renewal_reminder_date = '')
    {
        $this->bean->renewal_reminder_date = $renewal_reminder_date;
        return $this;
    }
	
    function contract_type($contract_type = '')
    {
        $this->bean->contract_type = $contract_type;
        return $this;
    }
	
    function contract_account_id($contract_account_id = '')
    {
        $this->bean->contract_account_id = $contract_account_id;
        return $this;
    }
	
    function opportunity_id($opportunity_id = '')
    {
        $this->bean->opportunity_id = $opportunity_id;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function call_id($call_id = '')
    {
        $this->bean->call_id = $call_id;
        return $this;
    }
	
    function total_amt($total_amt = '')
    {
        $this->bean->total_amt = $total_amt;
        return $this;
    }
	
    function subtotal_amount($subtotal_amount = '')
    {
        $this->bean->subtotal_amount = $subtotal_amount;
        return $this;
    }
	
    function discount_amount($discount_amount = '')
    {
        $this->bean->discount_amount = $discount_amount;
        return $this;
    }
	
    function tax_amount($tax_amount = '')
    {
        $this->bean->tax_amount = $tax_amount;
        return $this;
    }
	
    function shipping_amount($shipping_amount = '')
    {
        $this->bean->shipping_amount = $shipping_amount;
        return $this;
    }
	
    function shipping_tax($shipping_tax = '')
    {
        $this->bean->shipping_tax = $shipping_tax;
        return $this;
    }
	
    function shipping_tax_amt($shipping_tax_amt = '')
    {
        $this->bean->shipping_tax_amt = $shipping_tax_amt;
        return $this;
    }
	
    function total_amount($total_amount = '')
    {
        $this->bean->total_amount = $total_amount;
        return $this;
    }
	   
}