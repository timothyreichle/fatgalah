<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#"><img src="/images/UI/loading.gif" style="height:100%; width:100%"></a>
  
  <div id="topBar">
	Help| Contact | Login | Join | $AUD
  </div>
  
  <div id="searchBar">
	Search: <input type="text">
  </div>
  
  
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
