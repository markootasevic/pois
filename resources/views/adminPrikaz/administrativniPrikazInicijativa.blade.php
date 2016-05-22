@extends('layouts.app')


@section('style')

<link href="{!! asset('css/adminStyle.css') !!}" media="all" rel="stylesheet" type="text/css" />

@stop

@section('content')

<body>

<div class="col-md-3"></div>
<div class="container">
	<ul class="nav nav-tabs">
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'junkInicijative')">Neobradjene incijative</a></li>
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'prihvaceneIncijative')">Prihvaćene inicijative</a></li>
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'add/remove_nalog')">Dodaj/Obriši nalog</a></li>
	</ul>
</div>
<div class="col-md-3"></div>
<div id="junkInicijative" class="tabcontent">
  <h3>Neobradjene incijative</h3>

  <table style="width:100%">
    <tr>
      <th>Naziv inicijative</th>
      <th>Zakon</th> 
      <th>PrivredniSubjekat/Ime podnosioca</th>
      <th>Tip inicijative</th>
      <th>Vreme podnosenja</th>
    </tr>

  @foreach($inicijative as $inicijativa)

    
      <tr onclick="window.document.location='{{route('inicijativaPopUp', ['inicijativaId' => $inicijativa->id])}}'">
        <td>{{$inicijativa->nazivProcedure}}</td>
        <td>{{$inicijativa->nazivZakona}}</td> 
        <td>
          @if($inicijativa->nazivPrivrednogSubjekta)
            {{$inicijativa->nazivPrivrednogSubjekta}}
          @else
            {{$inicijativa->imePrezime}}
          @endif
        </td>
        <td>{{$inicijativa->tip}}</td>
        <td>{{$inicijativa->created_at->diffForHumans()}}</td>
      </tr>
    
  @endforeach

  </table>
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