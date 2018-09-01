<?php

require_once '../core/BeanBuilder.php';
{{foreach from=$class.requires item='require'}}
require_once('{{$require}}');
{{/foreach}}

class {{$class.name}} extends BeanBuilder
{

    function __construct()
    {
        parent::__construct('{{$class.module}}');
    }
    
    {{foreach from=$class.fields key='field' item='def'}}

    function {{$field}}(${{$field}} = '')
    {
        $this->bean->{{$field}} = ${{$field}};
        return $this;
    }
	{{/foreach}}
   
	
}
