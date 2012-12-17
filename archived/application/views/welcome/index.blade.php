@section('content')

	<div class="wrapper">
			<h1>welcome.to.geleyi
        @if(Sentry::check())
        {{ Sentry::user()->username }}
        @endif
      </h1>
	  <h2>...future of African Fashion</h2>
</div>
@endsection