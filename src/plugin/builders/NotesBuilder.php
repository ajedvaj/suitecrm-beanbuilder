<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';

class NotesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Notes');
    }
    
    
    function file_mime_type($file_mime_type = '')
    {
        $this->bean->file_mime_type = $file_mime_type;
        return $this;
    }
	
    function file_url($file_url = '')
    {
        $this->bean->file_url = $file_url;
        return $this;
    }
	
    function filename($filename = '')
    {
        $this->bean->filename = $filename;
        return $this;
    }
	
    function parent_type($parent_type = '')
    {
        $this->bean->parent_type = $parent_type;
        return $this;
    }
	
    function parent_id($parent_id = '')
    {
        $this->bean->parent_id = $parent_id;
        return $this;
    }
	
    function contact_id($contact_id = '')
    {
        $this->bean->contact_id = $contact_id;
        return $this;
    }
	
    function portal_flag($portal_flag = '')
    {
        $this->bean->portal_flag = $portal_flag;
        return $this;
    }
	
    function embed_flag($embed_flag = '')
    {
        $this->bean->embed_flag = $embed_flag;
        return $this;
    }
	
    function account_id($account_id = '')
    {
        $this->bean->account_id = $account_id;
        return $this;
    }
	
    function opportunity_id($opportunity_id = '')
    {
        $this->bean->opportunity_id = $opportunity_id;
        return $this;
    }
	
    function acase_id($acase_id = '')
    {
        $this->bean->acase_id = $acase_id;
        return $this;
    }
	
    function lead_id($lead_id = '')
    {
        $this->bean->lead_id = $lead_id;
        return $this;
    }
    
    function attachment($filename, $mimetype){
        $this->filename($filename)->fileMimeType($mimeType);
        return $this;
    }
	
}