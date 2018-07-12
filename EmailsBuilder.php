<?php
require_once 'BeanBuilder.php';

class EmailsBuilder extends BeanBuilder {
    
    /**
     * Constructor
     *
     * Initializes new Emails bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Emails');
        $this->bean->type = 'out';
        
        $admin = new Administration();
        $admin->retrieveSettings();
        $this->bean->from_addr = $admin->settings['notify_fromaddress'];
        $this->bean->from_name = $admin->settings['notify_fromname'];
    }
    
    /**
     * Sets email text with all html tags
     * 
     * @param String $descriptionHtml
     * @return EmailsBuilder
     */
    function descriptionHtml($descriptionHtml){
        $this->bean->description_html = $descriptionHtml;
        return $this;
    }
    
    /**
     * Sets email addresses to which email needs to be sent
     * 
     * @param String $emailAddresses List of recipient emails separate by comma (,) character
     * @return EmailsBuilder
     */
    function addRecipients($emailAddresses){
        $this->bean->to_addrs = $emailAddress;
        
        $emailAddresses = explode(",", $bean->to_addrs);
        $this->bean->to_addrs_arr = array();
        
        foreach($emailAddresses as $addr){
            array_push($this->bean->to_addrs_arr,array('email' => $addr));
        }
        return $this;
    }
    
}