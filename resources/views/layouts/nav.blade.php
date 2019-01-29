<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">

	
		
	<ul class="nav navbar-nav">
	@foreach($navCategories as $navCategory)  
	
	
		@if(isset($subCategories[$navCategory->CategoryId]))
			
			<li class="dropdown">			  
			
			
			  <a href="{{$navCategory->Link != ''?$navCategory->Link:'#'}}" class="dropdown-toggle" data-toggle="dropdown">{{$navCategory->CategoryName}} <b class="caret"></b></a>
			  
			  
			  
			  <ul class="dropdown-menu">
				@foreach($subCategories[$navCategory->CategoryId] as $subCategory)
					<li><a href="{{$subCategory->Link != ''?$subCategory->Link:'#'}}"><b>{{$subCategory->CategoryName}}</b></a></li>
					
					@foreach($items[$subCategory->SubCategoryID] as $item)
						&nbsp;&nbsp;<li><a href="{{$item->Link != ''?$item->Link:'#'}}">{{$item->Product}}</a></li>
					@endforeach
					
					
				@endforeach
				
			  </ul>
			  
			  
			  
			</li>
			
		@else
		
			<li class="nav-item active">			  			
			  <a href="{{$navCategory->Link != ''?$navCategory->Link:'#'}}" class="dropdown-toggle" data-toggle="dropdown">{{$navCategory->CategoryName}} <b class="caret"></b></a>
			</li>
		
		@endif
	
	
	@endforeach
    </ul>	  
	
  </div>
</nav>
