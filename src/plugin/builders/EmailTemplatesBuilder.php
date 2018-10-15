<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/EmailTemplates/EmailTemplatesType.php';

class EmailTemplatesBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('EmailTemplates');
    }
    
    
    function published($published = '')
    {
        $this->bean->published = $published;
        return $this;
    }
	
    function subject($subject = '')
    {
        $this->bean->subject = $subject;
        return $this;
    }
	
    function body($body = '')
    {
        $this->bean->body = $body;
        return $this;
    }
	
    function body_html($body_html = '')
    {
        $this->bean->body_html = $body_html;
        return $this;
    }
	
    function text_only($text_only = '')
    {
        $this->bean->text_only = $text_only;
        return $this;
    }
	
    function type($type = '')
    {
        $this->bean->type = $type;
        return $this;
    }
	   
	
}