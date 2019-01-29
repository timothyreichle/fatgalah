
@extends('layouts.main')



@section('script')

<style type="text/css">
	.charter_type{
		border: 1px solid black;
		font-weight: bold;
	}
	
	.ship_header{
		border: 1px solid black;
		font-weight: bold;
	}
	
			
	.class_header > div{	
		border: 1px solid black;
		font-weight: bold;
	}
	
	
	.class_row > div{	
		border: 1px solid black;
	}
	
</style>

<script src='js/paginate.js'></script>

<Script>

$(document).ready(function(){
	setupPaginate($('#charterContainer'),'Charter');
});

</script>

@endsection

@section('content')
	<h2>Welcome to our list of charters</h2>
	
	<div id="charterContainer">
		@include('charter.list')
	</div>
	
@endsection