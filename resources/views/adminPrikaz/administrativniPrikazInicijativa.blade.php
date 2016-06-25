@extends('layouts.app')


@section('style')

<link href="{!! asset('css/adminStyle.css') !!}" media="all" rel="stylesheet" type="text/css" />

@stop

@section('content')

<body>

<div class="col-md-3"></div>
<div class="container">
	<ul class="nav nav-tabs ">
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'junkInicijative')">Neobradjene incijative</a></li>
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'prihvaceneIncijative')">Prihvaćene inicijative</a></li>
	  <li><a href="#" class="tablinks" onclick="openTab(event, 'add/remove_nalog')">Dodaj/Obriši nalog</a></li>
	</ul>
</div>
<div class="col-md-3"></div>
<div id="junkInicijative" class="tabcontent">
  <h3>Neobradjene incijative</h3>

  <form action='{{url('/postCheckbox')}}' method="post">
    {{csrf_field()}}
  <table style="width:100%">
    <tr>
      @if(Auth::user()->admin == 1 )
        <th></th>
      @endif
      <th>Naziv inicijative</th>
      <th>Zakon</th> 
      <th>PrivredniSubjekat/Ime podnosioca</th>
      <th>Tip inicijative</th>
      <th>Vreme podnosenja</th>
      <th></th>
    </tr>

  @foreach($inicijative as $inicijativa)

    <!-- window.document.location='{{route('inicijativaPopUp', ['inicijativaId' => $inicijativa->id])}}' -->
      <tr>
        @if(Auth::user()->admin == 1)
          @if($inicijativa->user_id == null)
            <td><input type="checkbox" name="check_list[]" value={{$inicijativa->id}}></td>
          @else 
            <td><input type="checkbox" name="check_list[]" value={{$inicijativa->id}} data-toggle="tooltip" title="Inicijativa je vec dodeljena" disabled ></td>
          @endif
        @endif
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
        <td><a href="{{route('inicijativaPopUp', ['inicijativaId' => $inicijativa->id])}}"><input type = "button" class="btn btn-primary" value = "otvori"> </a></td>
      </tr>
    
  @endforeach

  </table>

  @if(Auth::user()->admin == 1)
    <select name = "zaposleni">
      @foreach($users as $user)
    <option value= {{$user->id}}>{{$user->name}}</option>
      @endforeach
    
    </select>

    <input type = "submit" class="btn btn-primary" value = "Dodeli inicijative zaposlenom">
  @endif

</form>

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

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>




@stop