<?php
require_once '../core/BeanBuilder.php';

/**
 *  Class NotesBuilder
 *
 * Builder class for creating new Note beans. 
 * Class only creates new instance of an object, to persist this object one must call SugarBean::save() function.
 *
 * @package Custom/Notes/Builder
 * @author Antonio Jedvaj <antonio_vrb@hotmail.com>
 */
class NotesBuilder extends BeanBuilder
{

    /**
     * Constructor
     *
     * Initializes new Notes bean
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct('Notes');
    }


    function parent($parentType, $parentId)
    {
        $this->bean->parent_type = $parentType;
        $this->bean->parent_id = $parentId;
        return $this;
    }
    
    function contactId($contactId){
        $this->bean->contact_id = $contactId;
        return $this;
    }
    
    function contact(SugarBean $contact){
        $this->bean->contact_id = $contact->id;
        return $this;
    }
    
    function displayInPortal($displayInPortal){
        $this->bean->portal_flag = $displayInPortal;
        return $this;
    }
    
    function embedInEmail($embedInEmail){
        $this->bean->embed_flag = $embedInEmail;
        return $this;
    }
    
    function fileMimeType($mimeType){
        $this->bean->file_mime_type = $imeType;
        return $this;
    }
    
    function filename($filename){
        $this->bean->filename = $filename;
        return $this;
    }
    
    function attachment($filename, $mimetype){
        $this->filename($filename)->fileMimeType($mimeType);
        return $this;
    }
}

?>