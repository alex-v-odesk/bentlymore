jQuery(document).ready(function($){function e(e,t,n,a,o){var r=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?($(t).addClass(n),"function"==typeof o&&o.call()):($(t).removeClass(n),"function"==typeof o&&o.call())},offset:a})}e("header_trigger",".sticky_clone, .nav_dropdown","active","-157px",null),e("sec_two",".free_consultation_desktop, .free_consultation_tablet","active","0%",null),e("footer",".free_consultation_desktop, .free_consultation_tablet","hide","70%",null);var t=new Waypoint({element:document.getElementById("banner_trigger"),handler:function(e){jQuery("#banner_trigger").addClass("animate")},offset:0}),n=new Waypoint({element:document.getElementById("sec_two"),handler:function(e){jQuery("#sec_two").addClass("animate")},offset:200}),a=new Waypoint({element:document.getElementById("sec_three_trigger"),handler:function(e){jQuery("#sec_three_trigger").addClass("animate")},offset:300}),o=new Waypoint({element:document.getElementById("video_trigger"),handler:function(e){jQuery("#video_trigger").addClass("animate")},offset:600}),r=new Waypoint({element:document.getElementById("sec_four"),handler:function(e){jQuery("#sec_four").addClass("animate")},offset:-500}),r=new Waypoint({element:document.getElementById("sec_five_trigger"),handler:function(e){jQuery("#sec_five_trigger").addClass("animate")},offset:50}),r=new Waypoint({element:document.getElementById("sec_six_trigger"),handler:function(e){jQuery("#sec_six_trigger").addClass("animate")},offset:70})});