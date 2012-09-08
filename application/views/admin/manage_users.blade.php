@section('nav')
  @parent
  <li>{{HTML::link('dashboard','Dashboard') }}</li>
@endsection
@section('content')
<div class="row">
  <h3>View All Users</h3>
  <div class="nine columns">
    <table>
     @foreach($users as $user)
        <tr>
          <td>
            {{ $user['id'] }}
          </td>
          <td>
            {{ $user['username'] }}
          </td>
          <td>
            {{ $user['email'] }}
          </td>
          <td>
            {{ HTML::link('user/edit/'.$user['id'],'edit users') }}
          </td>
          <td>
            {{ HTML::link('user/delete/'.$user['id'],'delete user') }}
          </td>
        </tr>
     @endforeach
    </table>
  </div>

  <div class="three columns">
    <ul>
      <li>{{ HTML::link('user/new','Add New User') }}</li>
    </ul>
  </div>
</div>

@endsection
