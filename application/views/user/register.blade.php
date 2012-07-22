
@section('content')
 <div class="row">
   <div class="six columns centered">
     <h3>Register for an Account</h3>
     <hr/>
     	{{ Form::open('auth/register') }}
     	 <p>
     	   Email: {{ Form::text('email', Form_RegisterUser::old('email') ) }}
     	   {{ $errors->has('email') ? $errors->first('email') : '' }}
     	 </p>

     	 <p>
     	   Password: {{ Form::password('password') }}
     	 </p>

     	<p>
     	  Confirm Password: {{ Form::password('password_confirmation') }}
     	  {{ $errors->has('password') ? $errors->first('password'): '' }}
     	</p>

     	  <p>
     	    {{ Form::submit('submit',array('class'=>'[radius, round] button')) }}
     	  </p>

     	{{ Form::close() }}
   </div>
 </div>

@endsection