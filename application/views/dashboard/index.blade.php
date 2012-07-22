@section('title')
  Geleyi / Dashboard
@endsection

@section('content')
<div class="row">
  <div class="nine columns centered">
   <h2>Dashboard</h2>
    <hr/>

    <h4>Welcome {{ Sentry::user()->username }}</h4>

    {{ HTML::link('user/profile','view profile') }}

  </div>
</div>
@endsection
