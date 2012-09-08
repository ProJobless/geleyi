@section('title')
  Geleyi / Dashboard
@endsection

@section('nav')
  @parent
@endsection


@section('content')
<div class="row">
  <div class="nine columns centered">
   <h2>Dashboard</h2>
    <hr/>

    <h4>Welcome {{ Sentry::user()->username }}</h4>

    <ul>
      <li>{{ HTML::link('user/profile','view profile') }}</li>
    </ul>

    {{-- for admins --}}
    <h6>Users</h6>
    <ul>
      <li>{{ HTML::link('admin/view_users','Manage Users') }}</li>
    </ul>

    <h6>Groups</h6>
    <ul>
      <li>{{ HTML::link('group/view/new', 'Create') }}</li>
      <li>{{ HTML::link('group/view/all', 'View All') }}</li>
    </ul>
    {{-- end admin sections -- }}


  </div>
</div>

 <div class="row">

 </div>
@endsection
