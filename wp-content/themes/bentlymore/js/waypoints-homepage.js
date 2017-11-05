

jQuery(document).ready(function($){




     function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName) {
            var waypoint = new Waypoint({
                element: document.getElementById(triggerElementId),
                handler: function(direction) {
                    if (direction === 'down') {
                        $(animatedElement).addClass(className);
    
                        if(typeof functionName === 'function') {
                            functionName.call();
                        }
                    }
    
                    else {
                        $(animatedElement).removeClass(className);
    
                        if(typeof functionName === 'function') {
                            functionName.call();
                        }
                    }
                },
                offset: offsetVal
            });
        }
        
       
       createWaypoint("header_trigger", ".sticky_clone, .nav_dropdown", "active", "-157px", null);
    
       createWaypoint("sec_two", ".free_consultation_desktop, .free_consultation_tablet", "active", "0%", null);
			 
			 createWaypoint("footer", ".free_consultation_desktop, .free_consultation_tablet", "hide", "70%", null);


}); // Document Ready

