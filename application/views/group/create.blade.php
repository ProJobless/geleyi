<?php
$get_rules = DB::query("SELECT DISTINCT * FROM rules");
?>
{{ Form::open('group/process/create', 'POST') }}

{{ (Session::get('message')) ? Session::get('message') : "" }}
<p>
    {{ Form::label('group_name', 'Group Name') }}
    {{ Form::text('group_name','', ['class'=>'three']) }}

</p>

<p>
    {{ Form::label('group_level', 'Group Permission (Use JSON syntax)') }}
    {{ Form::text('group_permission') }}

</p>

<p>
    Available Permissions: <br/>
    @foreach($get_rules as $rule)
      {{ $rule->rule }}</br/>
    @endforeach
</p>
{{ Form::submit('Create',['class'=>'button']) }}

{{ Form::close() }}

