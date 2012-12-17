<h3>View All Users</h3>
<hr/>
<table>
    <thead>
    <th>UserID</th>
    <th>username</th>
    <th>Email</th>
    <th>Group</th>
    <th>Last Login</th>
    <th>Operation</th>
    </thead>
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
            {{ Sentry::user((int)$user['id'])->groups()[0]['name']}}
        </td>

        <td>
            {{ $user['last_login'] }}
        </td>

        <td>
            {{ HTML::link('user/edit/'.$user['id'],'edit users') }}

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

