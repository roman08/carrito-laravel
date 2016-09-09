@if (Auth::user()->type == 'admin' or Auth::user() == 'editor')
	<li><a href="admin/home">Administración</a></li>
@endif