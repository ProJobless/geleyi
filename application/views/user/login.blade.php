@section('content')


 <div class="row">
   <div class="five columns centered">
     <h3>Login</h3>
     <hr/>
     {{ Form::open('auth/login') }}
     	<p>
     	  Email: {{ Form::text('email',Form_Login::old('email')) }}
     	  {{ $errors->has('email') ? $errors->first('email') : '' }}
     	</p>
     	<p>
     	  Password: {{ Form::password('password'); }}
     	  {{ $errors->has('email') ? $errors->first('email') : '' }}
     	</p>
     	  <p>
     	    Remember me {{ Form::checkbox('remember_me') }}
     	  </p>
     	<p>
     	  {{ Form::submit('login') }}
     	</p>
     	{{ Form::close() }}

     	<p>
     	{{ HTML::link('reset_password','Forgot Password') }}  |  {{ HTML::link('register','Register') }}
     	</p>
   </div>
 </div>

@endsection