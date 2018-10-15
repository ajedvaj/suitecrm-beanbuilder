<?php

require_once 'custom/include/beanbuilder/core/BeanBuilder.php';
require_once 'custom/include/beanbuilder/model/Documents/DocumentsDoc_type.php';
require_once 'custom/include/beanbuilder/model/Documents/DocumentsCategory_id.php';
require_once 'custom/include/beanbuilder/model/Documents/DocumentsSubcategory_id.php';
require_once 'custom/include/beanbuilder/model/Documents/DocumentsStatus_id.php';
require_once 'custom/include/beanbuilder/model/Documents/DocumentsTemplate_type.php';

class DocumentsBuilder extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('Documents');
    }
    
    
    function document_name($document_name = '')
    {
        $this->bean->document_name = $document_name;
        return $this;
    }
	
    function doc_id($doc_id = '')
    {
        $this->bean->doc_id = $doc_id;
        return $this;
    }
	
    function doc_type($doc_type = '')
    {
        $this->bean->doc_type = $doc_type;
        return $this;
    }
	
    function doc_url($doc_url = '')
    {
        $this->bean->doc_url = $doc_url;
        return $this;
    }
	
    function filename($filename = '')
    {
        $this->bean->filename = $filename;
        return $this;
    }
	
    function active_date($active_date = '')
    {
        $this->bean->active_date = $active_date;
        return $this;
    }
	
    function exp_date($exp_date = '')
    {
        $this->bean->exp_date = $exp_date;
        return $this;
    }
	
    function category_id($category_id = '')
    {
        $this->bean->category_id = $category_id;
        return $this;
    }
	
    function subcategory_id($subcategory_id = '')
    {
        $this->bean->subcategory_id = $subcategory_id;
        return $this;
    }
	
    function status_id($status_id = '')
    {
        $this->bean->status_id = $status_id;
        return $this;
    }
	
    function document_revision_id($document_revision_id = '')
    {
        $this->bean->document_revision_id = $document_revision_id;
        return $this;
    }
    
    function related_doc_id($related_doc_id = '')
    {
        $this->bean->related_doc_id = $related_doc_id;
        return $this;
    }
	
    function related_doc_rev_id($related_doc_rev_id = '')
    {
        $this->bean->related_doc_rev_id = $related_doc_rev_id;
        return $this;
    }
	
    function is_template($is_template = '')
    {
        $this->bean->is_template = $is_template;
        return $this;
    }
	
    function template_type($template_type = '')
    {
        $this->bean->template_type = $template_type;
        return $this;
    }
	
	   
	
}