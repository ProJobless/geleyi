@layout('layouts.main')


@section('content')
	<h1>reset password</h1>

	{{ Form::open('auth/reset_password') }}

	<p>
	  Email: {{ Form::text('email', Form_ResetPassword::old('email')) }}
	  {{ $errors->has('email') ? $errors->first('email') : '' }}
	</p>

	<p>
	  New Password {{ Form::password('password') }}
	</p>
	<p>
	  Confirm New Password {{ Form::password('password_comfirmation') }}
	  {{ $errors->has('password') ? $errors->first('password') : '' }}
	</p>
	<p>
	  {{ Form::submit('submit') }}
	</p>
	{{ Form::close() }}
@endsection
