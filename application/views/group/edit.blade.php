<?php
//$message = (Session::get('errors')) ? Session::get('errors') : Session::get('success');
?>
{{ Form::open("group/edit/{$group->id}", 'POST') }}

{{-- $message --}}

{{ Form::label('group_name', 'Group Name') }}
{{ Form::text('group_name',$group->name,  ['class'=>'three']) }}

{{ Form::label('group_level', 'Group Level') }}
{{ Form::text('group_level', $group->permissions,['class'=>'two']) }}

{{ Form::submit('Edit',['class'=>'button']) }}

{{ Form::close() }}

