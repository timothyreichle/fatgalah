
@extends('layouts.main')

@section('script')

<script src='js/paginate.js'></script>
		
<Script>

$(document).ready(function(){
	setupPaginate($('#charterContainer'),'Charter');
	alert('ready');
});

</script>

@endsection

@section('content')
	<h2>Welcome to our list of charters</h2>
	
	<div id="charterContainer">
		@include('charter.list')
	</div>
	
@endsection