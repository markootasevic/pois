<html>
<head>
	<title>Checkbox</title>
</head>
<body>

		<?php 
			$array = array(1,2,3,4,5);
		?>
		<form action='{{url('/postCheckbox')}}' method="post">
			{{csrf_field()}}
			@foreach($array as $a)
			<br>
				<input type="checkbox" name="check_list[]" value={{$a}}> {{$a}} </input>
			@endforeach
			<br>
			<input type="submit" />
		</form>

			<br>
			   {{-- ovo 75 je id te inicijative --}}
			 <a href="/download/75" class="btn btn-large pull-right"> Download pdf </a>


</body>
</html>