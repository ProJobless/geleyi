<h3>Available permission:</h3>
<ul>
    @foreach($permissions as $permission)
    <li>{{ $permission->rule }}</li>
    @endforeach
</ul>

{{ (Session::get("message")) ? Session::get("message") :"" }}
<h3>Add New Permission:</h3>
{{ Form::open("group/rules","POST") }}
<p>
    {{ Form::label("rule", "Rule Name") }}
    {{ Form::text("rule") }}

</p>

<p>
    {{ Form::label("description", "Description") }}
    {{ Form::text("description") }}
</p>

<p>
    {{ Form::submit("submit") }}
</p>

{{ Form::close() }}
