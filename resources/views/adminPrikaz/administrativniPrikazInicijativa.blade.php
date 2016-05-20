@extends('layouts.app')


@section('style')

<link href="{!! asset('css/adminStyle.css') !!}" media="all" rel="stylesheet" type="text/css" />

@stop

@section('content')

<body>

<p>Click on the links inside the tabbed menu:</p>

<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openTab(event, 'junkInicijative')">Ne obradjene incijative</a></li>
  <li><a href="#" class="tablinks" onclick="openTab(event, 'prihvaceneIncijative')">Prihvaćene inicijative</a></li>
  <li><a href="#" class="tablinks" onclick="openTab(event, 'add/remove_nalog')">Dodaj/Obriši nalog</a></li>
</ul>

<div id="junkInicijative" class="tabcontent">
  <h3>Ne obradjene incijative</h3>
  <br>
  @foreach($data as $a)

  	@foreach($a as $b)
  		{{$b}}
  		<br>
  	@endforeach

  @endforeach
</div>

<div id="prihvaceneIncijative" class="tabcontent">
  <h3>Prihvaćene inicijative</h3>
  <br>
  <?php

  ?> 
</div>

<div id="add/remove_nalog" class="tabcontent">
  <h3>Dodaj/Obriši nalog</h3>
  <?php

  ?>
</div>

<script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>





@stop