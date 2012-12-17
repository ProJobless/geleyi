<?php
$get_rules = DB::query("SELECT DISTINCT * FROM rules");
$msg = Session::get("msg");
$e = Session::get('errors');

?>

{{ ($msg) ? $msg : "" }}
{{ ($e) ? $e : "" }}

{{ Form::open("group/edit/{$group->id}", 'POST') }}

<p>
    {{ Form::label('group_name', 'Group Name') }}
    {{ Form::text('group_name',$group->name) }}

</p>
<p>
    {{ Form::label('group_level', 'Group Permissions (JSON)') }}
    {{Form::text('group_permissions', $group->permissions,['class'=>'two']) }}

</p>
<p>
    Add Permissions: <br/>
  <?php foreach ($get_rules as $value => $key): ?>
    {{ $key->rule }} >>  ({{$key->description }})<br/>
  <?php endforeach ?>

</p>

{{ Form::submit('Edit',['class'=>'button']) }}

{{ Form::close() }}

