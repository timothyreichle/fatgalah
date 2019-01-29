
$(document).ready(function(){

	

	$(document).scroll(function() {
	  if ($(document).scrollTop() >= 40) {
		//move to smaller nav bar		
		$("#topBar").hide();
		$(".navbar").height(40);
	  }else{		
		$("#topBar").show();
		$(".navbar").height(80);
	  
	  }
	})
		

});