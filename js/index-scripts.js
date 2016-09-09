 	
	
	
	
	/*
	
	$("section").click(function(){
									$("section").removeClass('current');
									$( this ).fadeTo("slow",0.33);
									$( this ).addClass('current');
                           	     });
                           	     
    */
    $(".menu-item").click(function(){
    									//console.log( $( this ).data("target-id") );
    									dest_element=$("body").find('#'+$( this ).data("target-id"));
    									//$(dest_element).fadeTo("slow",0.33);
    									animTo(dest_element);
    								}
   );

   function animTo(element){
   		if($(element).length){
   			//console.log(element);
   			
   			if($(window).scrollTop()<150) add=60; else add=30;  //bootstrapowy affix nie daje się poprawnie zmierzyć!
   			$("html, body").delay(10).animate({ scrollTop: $(element).offset().top-add }, 700);
   			
   		}
   }