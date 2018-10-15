<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/AOK_KnowledgeBase/AOK_KnowledgeBaseStatus.php';

class AOK_KnowledgeBaseBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('AOK_KnowledgeBase');
    }
    
    
    function status($status = '')
    {
        $this->bean->status = $status;
        return $this;
    }
	
    function revision($revision = '')
    {
        $this->bean->revision = $revision;
        return $this;
    }
	
    function additional_info($additional_info = '')
    {
        $this->bean->additional_info = $additional_info;
        return $this;
    }
	
    function user_id_c($user_id_c = '')
    {
        $this->bean->user_id_c = $user_id_c;
        return $this;
    }
	
    function author($author = '')
    {
        $this->bean->author = $author;
        return $this;
    }
	
    function user_id1_c($user_id1_c = '')
    {
        $this->bean->user_id1_c = $user_id1_c;
        return $this;
    }
	
    function approver($approver = '')
    {
        $this->bean->approver = $approver;
        return $this;
    }
	   
	
}