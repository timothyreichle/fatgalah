
$(document).ready(function(){

	

	$(document).scroll(function() {
	  if ($(document).scrollTop() >= 40) {
		//move to smaller nav bar		
		$(".navbar").height(40);		
	  }else{		
		$(".navbar").height(80);
	  
	  }
	})
		

});