@if(session('info'))
	<div class = "alert alert-info" role = "alert">
		{{ session('info') }}
	</div>
@endif