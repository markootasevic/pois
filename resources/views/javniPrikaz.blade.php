@extends('layouts.app')

@section('content')

	@foreach($potvrdjeneInicijative as $potvrdjenaInicijativa)
		{{$potvrdjenaInicijativa}}
		<br>
		{{$potvrdjenaInicijativa->getZaposleni()->email}}
		<br>

	@endforeach

@stop