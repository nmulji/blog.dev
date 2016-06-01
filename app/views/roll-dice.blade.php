@extends('layouts.master')

@section('content')
	<p>Your guess is {{ $guess }}</p>	
	<p>The random number is {{ $randomNumber }}</p>
	<p>{{ $message }}</p>
@stop