function setupPaginate(container,tag){

	var ajaxPage = null;

	function getPage(url, container){

		if(ajaxPage){
			ajaxPage.abort();
			ajaxPage = null
		}
		
		
		
		$(container).find('.view').html('<img src="/images/UI/loading.gif">');
		
		ajaxPage = $.get(url, {}, function(data){
			container.html(data);
		})
	}

	
    container.on('click', '.pagination a', function(e) {
		
        e.preventDefault();

        $('#load a').css('color', '#dfecf6');
        $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

        var url = $(this).attr('href');  		
        		
		getPage(url, container);
		
		
        window.history.pushState({'tag':tag, 'url':url, 'original':false}, "", url);
    });
	

    container.on('click', '.ajaxlink', function(e) {
		
        e.preventDefault();

        $('#load a').css('color', '#dfecf6');
        $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

        var url = $(this).attr('href');  		
        		
		getPage(url, container);	
		
        window.history.pushState({'tag':tag, 'url':url, 'original':false}, "", url);
    });

	$(window).on('popstate', function(event) {
		if(event.originalEvent.state.tag == tag){
			getPage(event.originalEvent.state.url, container);	
		}
	});
	
	
	history.replaceState({'tag':tag, 'url':window.location.href, "original":true}, "", window.location.href);

}
