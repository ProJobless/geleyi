@section('title')
  {{ Sentry::user()->username }} / Profile
@endsection

@section('content')
<div class="row">
  <div class="nine columns centered">
    <h2>Profile</h2>
    <hr/>
    {{-- display information about the user --}}
    {{ HTML::link('','edit') }}
  </div>
</div>

@endsection