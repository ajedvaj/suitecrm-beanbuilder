<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesTemplate_ddown_c.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesShipping_tax.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesStage.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesTerm.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesApproval_status.php';
require_once 'custom/include/beanbuilder/model/AOS_Quotes/AOS_QuotesInvoice_status.php';

class AOS_QuotesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AOS_Quotes');
    }
    
    
    function approval_issue($approval_issue = '')
    {
        $this->bean->approval_issue = $approval_issue;
        return $this;
    }
	
    function billing_account_id($billing_account_id = '')
    {
        $this->bean->billing_account_id = $billing_account_id;
        return $this;
    }
	
    function billing_contact_id($billing_contact_id = '')
    {
        $this->bean->billing_contact_id = $billing_contact_id;
        return $this;
    }
	
    function billing_address_street($billing_address_street = '')
    {
        $this->bean->billing_address_street = $billing_address_street;
        return $this;
    }
	
    function billing_address_city($billing_address_city = '')
    {
        $this->bean->billing_address_city = $billing_address_city;
        return $this;
    }
	
    function billing_address_state($billing_address_state = '')
    {
        $this->bean->billing_address_state = $billing_address_state;
        return $this;
    }
	
    function billing_address_postalcode($billing_address_postalcode = '')
    {
        $this->bean->billing_address_postalcode = $billing_address_postalcode;
        return $this;
    }
	
    function billing_address_country($billing_address_country = '')
    {
        $this->bean->billing_address_country = $billing_address_country;
        return $this;
    }
	
    function shipping_address_street($shipping_address_street = '')
    {
        $this->bean->shipping_address_street = $shipping_address_street;
        return $this;
    }
	
    function shipping_address_city($shipping_address_city = '')
    {
        $this->bean->shipping_address_city = $shipping_address_city;
        return $this;
    }
	
    function shipping_address_state($shipping_address_state = '')
    {
        $this->bean->shipping_address_state = $shipping_address_state;
        return $this;
    }
	
    function shipping_address_postalcode($shipping_address_postalcode = '')
    {
        $this->bean->shipping_address_postalcode = $shipping_address_postalcode;
        return $this;
    }
	
    function shipping_address_country($shipping_address_country = '')
    {
        $this->bean->shipping_address_country = $shipping_address_country;
        return $this;
    }
	
    function expiration($expiration = '')
    {
        $this->bean->expiration = $expiration;
        return $this;
    }
	
    function number($number = '')
    {
        $this->bean->number = $number;
        return $this;
    }
	
    function opportunity_id($opportunity_id = '')
    {
        $this->bean->opportunity_id = $opportunity_id;
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
	
    function currency_id($currency_id = '')
    {
        $this->bean->currency_id = $currency_id;
        return $this;
    }
	
    function stage($stage = '')
    {
        $this->bean->stage = $stage;
        return $this;
    }
	
    function term($term = '')
    {
        $this->bean->term = $term;
        return $this;
    }
	
    function terms_c($terms_c = '')
    {
        $this->bean->terms_c = $terms_c;
        return $this;
    }
    
    function template_ddown_c($template_ddown_c = '')
    {
        $this->bean->template_ddown_c = $template_ddown_c;
        return $this;
    }
	
    function approval_status($approval_status = '')
    {
        $this->bean->approval_status = $approval_status;
        return $this;
    }
	
    function invoice_status($invoice_status = '')
    {
        $this->bean->invoice_status = $invoice_status;
        return $this;
    }
	
    function subtotal_tax_amount($subtotal_tax_amount = '')
    {
        $this->bean->subtotal_tax_amount = $subtotal_tax_amount;
        return $this;
    }
	
}