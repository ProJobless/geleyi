<?php
$message = (Session::get('create_group_message')) ? Session::get('create_group_message') : "";
?>
{{ Form::open('group/process/create', 'POST') }}

{{ $message }}

{{ Form::label('group_name', 'Group Name') }}
{{ Form::text('group_name','',  ['class'=>'three']) }}

{{ Form::label('group_level', 'Group Level') }}
{{ Form::text('group_level', '',['class'=>'two']) }}

{{ Form::submit('Create',['class'=>'button']) }}

{{ Form::close() }}

