{{$types->links()}}


<div class ="view">
@foreach($types as $type)

	<a href="/charter?page={{$page}}&sort=price" class="ajaxlink">Sort by Price</a>

	<div class="charter_type">{{$type->type_desc}}</div>
	
	
	@foreach($resources[$type->id] as $resource)
		<div class="ship_header">
			{{$resource->res_desc}}  {{$resource->capacity}}  {{ date("Y-m-d",strtotime($resource->timestamp))}} {{$resource->duration->days}}D/{{$resource->duration->nights}}N  {{$resource->duration->notes}}
		</div>
		
		
		
		@foreach($classes[$resource->res_id] as $class)				
			{{$class->class_name}} ${{$class->price}} {{$class->quantity}} <br/>
		@endforeach
		
		
		
	@endforeach

	

@endforeach
</div>
{{$types->links()}}