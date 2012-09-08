<?php
// get all existing groups
$groups = Sentry::group()->all();
?>
@section('content')
<br/>
<?php
//@todo: this page is viewable by only user(self) & admin
?>

<div class="row">
  <div class="nine columns">
    {{ Form::open('user/update','POST') }}
      <p>
        {{ Form::label('username','username') }}
        {{ Form::text('username',$user->username) }}
      </p>
    <p>
      {{ Form::label('first_name', 'First Name') }}
      {{ Form::text('first_name',$user->get('metadata.first_name')) }}
    </p>

    <p>
      {{ Form::label('last_name', 'Last Name') }}
      {{ Form::text('last_name',$user->get('metadata.last_name')) }}
    </p>

    <?php //@todo: make visible to only admins ?>
    <p>
      <label for="user_group">Assign to Group</label>
      <select name="user_group">
        @foreach ($groups as $group)
          <option value="{{ $group }}">{{ $group }}</option>
        @endforeach
      </select>
    </p>

    <p>
      {{ Form::submit('submit', ["class"=>"button"]) }}
    </p>

    {{ Form::close() }}
  </div>
</div>
@endsection