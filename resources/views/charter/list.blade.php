{{$types->appends(['sort'=>$sort])->links()}}


<div class ="view">


@if($sort == "price")
	<a href="/charter?page={{$page}}" class="ajaxlink">Default Sort</a>
@else
	<a href="/charter?page={{$page}}&sort=price" class="ajaxlink">Sort by Price</a>
@endif

@foreach($types as $type)

	<div class="container-fluid">
	
		<div class="row">			
			<div class="col charter_type">
				{{$type->type_desc}}
			</div>
		</div>
		
		@foreach($resources[$type->id] as $resource)	
			
			<div class="row ">
				
				<div class="col-md-2 offset-md-1 ship_header">{{$resource->res_desc}}</div>
				<div class="col-md-2 ship_header">{{$resource->capacity}}</div>
				<div class="col-md-2 ship_header">{{date("Y-m-d",strtotime($resource->timestamp))}}</div>
				<div class="col-md-2 ship_header">{{$resource->duration->days}}D/{{$resource->duration->nights}}N  {{$resource->duration->notes}}</div>
										
			</div>
			
		
		
		
			<div class="row class_header">
				<div class="col-md-2 offset-md-2">Name</div>
				<div class="col-md-2">Price</div>
				<div class="col-md-2">Quantity</div>
			</div>
			
			
			
			@foreach($classes[$resource->res_id] as $class)		

				<div class="row class_row">
					<div class="col-md-2 offset-md-2">{{$class->class_name}}</div>
					<div class="col-md-2">${{$class->price}}</div>
					<div class="col-md-2">{{$class->quantity}}</div>
				</div>
			
				 
			@endforeach
		
		
		
		@endforeach
	
	</div>

@endforeach
</div>