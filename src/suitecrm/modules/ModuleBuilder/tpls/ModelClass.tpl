<?php

class {{$class.name}} {

{{foreach from=$class.fields key='field' item='val'}}
    const {{$field}} = "{{$val}}";
{{/foreach}}
		
}