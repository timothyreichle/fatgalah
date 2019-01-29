
@extends('layouts.main')

@section('content')
	<h2>Welcome to our list of charters</h2>
	
	<div id="charterContainer">
		@include('charter.list')
	</div>
	
@endsection