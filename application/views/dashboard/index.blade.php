<h2>Dashboard</h2>
<hr/>

<h4>Welcome {{ Sentry::user()->username }}</h4>

<ul>
    <li>{{ HTML::link('user/profile','view profile') }}</li>
</ul>

@if(Sentry::user()->in_group('admin'))
<h6>Users</h6>
<ul>
    <li>{{ HTML::link('admin/users','Manage Users') }}</li>
</ul>

<h6>Groups</h6>
<ul>
    <li>{{ HTML::link('group/view/new', 'Create') }}</li>
    <li>{{ HTML::link('group/view/all', 'View All') }}</li>
</ul>
@endif

