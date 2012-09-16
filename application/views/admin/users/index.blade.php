
<h3>View All Users</h3>
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

<div>
  <ul>
    <li>{{ HTML::link('user/new','Add New User') }}</li>
  </ul>
</div>
</div>

