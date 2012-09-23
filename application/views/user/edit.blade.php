<?php
// get all existing groups
$groups = Sentry::group()->all();
$user_groups = \Sentry\Sentry::user($user->id)->groups();

//@todo: this page is viewable by only user(self) & admin
?>

{{ (Session::get('success')) ? Session::get('success') : '' }}


{{ Form::open('user/edit/'.$user->id,'POST') }}
<p>
    {{ $errors->has('username') ? $errors->first('username') : '' }}
    {{ Form::label('username','username') }}
    {{ Form::text('username',$user->username) }}
</p>
<p>
    {{ $errors->has('first_name') ? $errors->first('first_name') : '' }}

    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name',$user->get('metadata.first_name')) }}
</p>

<p>
    {{ $errors->has('last_name') ? $errors->first('last_name') : '' }}

    {{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name',$user->get('metadata.last_name')) }}
</p>

<p>
    {{ $errors->has('label') ? $errors->first('label') : '' }}

    {{ Form::label('label', 'Fashion Label') }}
    {{ Form::text('label',$user->get('metadata.label')) }}
</p>

<?php //@todo: make visible to only admins ?>
<p>
    Belongs to:
<ul>
    @foreach($user_groups as $value => $ug)
    <li>{{ $ug['name'] }} | {{ $ug['permissions'] }}</li>
    @endforeach
</ul>
</p>

<p>
    <label for="user_group">Assign to Group</label>
    <select name="add_group">
        <option value="">none</option>
        @foreach ($groups as $group => $key)
        <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
        @endforeach
    </select>
</p>

<p>
    <label for="user_group">Remove from Group</label>
    <select name="remove_group">
        <option value="">none</option>
        @foreach ($groups as $group => $key)
        <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
        @endforeach
    </select>
</p>

<p>
    {{ Form::submit('submit', ["class"=>"button"]) }}
</p>

{{ Form::close() }}
