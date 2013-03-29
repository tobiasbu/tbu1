        
var khover = false;

        jQuery(document).ready(function() {

         

          $('.brand').hover(
   function(e){
    if (khover == false) {
      $('#brand-smoke').sprite({fps: 15, no_of_frames: 30, rewind: false});
      khover = true;
      }
   },
   function(e){
    if (khover == true) {
      $('#brand-smoke').spStop(true);  
      $('#brand-smoke').destroy();
      khover = false;
    }
         }
);
        

        	//$('.brand').hover(function() {
        		
             
            

            //}, function() {
            	 
    	    	
    	   // });

				            
        });(jQuery);

