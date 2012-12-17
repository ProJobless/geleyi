<table>

  <thead>
  <th>Name</th>
  <th>Permissions</th>
  </thead>

  <tbody>
  @foreach($groups as $key => $value)
    <tr>
      <td>{{ $value['name'] }} </td>
      <td>{{ $value['permissions'] }}</td>
      <td>{{ HTML::link("group/edit/{$value['id']}",'Modify') }}</td>
      <td>{{ HTML::link("group/delete/{$value['id']}",'Delete') }}</td>
    </tr>
  @endforeach
  </tbody>

</table>

