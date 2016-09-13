<!doctype html>

<html>

<head>

<?php

include("../../shared/head.inc.php");

?>

<title>Bienvenue,Ezin Amoussou !</title>







</head>



<body>



<div class="header">

	<div class="menu">

<?php

include("../../shared/logo.inc.php");

?>

<?php

include("../../shared/ruban_conseil.inc.php");

?>

	</div>

	<div class="wrap_body">

	<div class="navigation">

	 <span><a class="home" href="http://www.jophasworks.com/app/ezin/index.php"></a></span>

	 <span class="txt_nav" > &rsaquo; </span>

	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/administration/conseil.php">Conseil d'administration et de direction</a></span>

	 

	 

	</div>

	<span class="txt_res"><p>Les principaux menbres du conseil d'administration</p></span>

	<div style="clear:both; height:10px;"></div>

		<div class="conseil_container">

		

		<div class="kotchofa_s">

		<a href="#"><i class="conseil_ptr">KOTCHOFA SYLVESTRE</i><br/><i class="conseil_poste">Le président de l'Association des fonds d'entretien routier africain (AFERA)</i></a>

		</div>

		<div class="amouss_pres">

		<a href="http://www.jophasworks.com/app/ezin/ezin/administration/president.php"><i class="conseil_ptr">AMOUSSOU EDMOND PIERRE</i><br/><i class="conseil_poste">Président du conseil d'administration</i></a>

		</div>

			

		</div>

<div style="clear:both; height:10px;"></div>

	</div>

	

<?php

include("../../shared/footer.inc.php");

?>



	<script>!window.jQuery && document.write(unescape('%3Cscript src="../../csstag/js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>

	<!-- custom scrollbars plugin -->

	<script src="../../csstag/jquery.mCustomScrollbar.concat.min.js"></script>

	<script>

		(function($){

			$(window).load(function(){

				$(".content_1").mCustomScrollbar({

					scrollInertia:550,

					horizontalScroll:true,

					mouseWheelPixels:116,

					scrollButtons:{

						enable:true,

						scrollType:"pixels",

						scrollAmount:116

					},

					callbacks:{

						onScroll:function(){ snapScrollbar(); }

					}

				});

				/* toggle buttons scroll type */

				var content=$(".content_1");

				$("a[rel='toggle-buttons-scroll-type']").html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");

				$("a[rel='toggle-buttons-scroll-type']").click(function(e){

					e.preventDefault();

					var scrollType;

					if(content.data("scrollButtons_scrollType")==="pixels"){

						scrollType="continuous";

					}else{

						scrollType="pixels";

					}

					content.data({"scrollButtons_scrollType":scrollType}).mCustomScrollbar("update");

					$(this).html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");

				});

				/* snap scrollbar fn */

				var snapTo=[];

				$(".content_1 .images_container img").each(function(){

					var $this=$(this),thisX=$this.position().left;

					snapTo.push(thisX);

				});

				function snapScrollbar(){

					var posX=$(".content_1 .mCSB_container").position().left,closestX=findClosest(Math.abs(posX),snapTo);

					$(".content_1").mCustomScrollbar("scrollTo",closestX,{scrollInertia:350,callbacks:false});

				}

				function findClosest(num,arr){

	                var curr=arr[0];

    	            var diff=Math.abs(num-curr);

        	        for(var val=0; val<arr.length; val++){

            	        var newdiff=Math.abs(num-arr[val]);

                	    if(newdiff<diff){

                    	    diff=newdiff;

                        	curr=arr[val];

                    	}

                	}

                	return curr;

            	}

			});

		})(jQuery);

	</script>

	<script>

		(function($){

			$(window).load(function(){

				var content=$(".staff_footer"),autoScrollTimer=20000,autoScrollTimerAdjust,autoScroll;

				content.mCustomScrollbar({

					scrollButtons:{

						enable:true

					},

					theme:"dark-thick",

					callbacks:{

						whileScrolling:function(){ autoScrollTimerAdjust=autoScrollTimer*mcs.topPct/100; },

						onScroll:function(){ if(this.data("mCS_trigger")==="internal"){AutoScrollOff();} }

					}

					

				});

				content.addClass("auto-scrolling-on auto-scrolling-to-bottom");

				AutoScrollOn("bottom");

				$(".auto-scrolling-toggle").click(function(e){

					e.preventDefault();

					if(content.hasClass("auto-scrolling-on")){

						AutoScrollOff();

					}else{

						if(content.hasClass("auto-scrolling-to-top")){

							AutoScrollOn("top",autoScrollTimerAdjust);

						}else{

							AutoScrollOn("bottom",autoScrollTimer-autoScrollTimerAdjust);

						}

					}

				});

				function AutoScrollOn(to,timer){

					if(!timer){timer=autoScrollTimer;}

					content.addClass("auto-scrolling-on").mCustomScrollbar("scrollTo",to,{scrollInertia:timer,scrollEasing:"easeInOutQuad"});

					autoScroll=setTimeout(function(){

						if(content.hasClass("auto-scrolling-to-top")){

							AutoScrollOn("bottom",autoScrollTimer-autoScrollTimerAdjust);

							content.removeClass("auto-scrolling-to-top").addClass("auto-scrolling-to-bottom");

						}else{

							AutoScrollOn("top",autoScrollTimerAdjust);

							content.removeClass("auto-scrolling-to-bottom").addClass("auto-scrolling-to-top");

						}

					},timer);

				}

				function AutoScrollOff(){

					clearTimeout(autoScroll);

					content.removeClass("auto-scrolling-on").mCustomScrollbar("stop");

				}

			});

		})(jQuery);

	</script>

	<script>

		(function($){

			$(window).load(function(){

				$(".secteur_footer").mCustomScrollbar({

					scrollButtons:{

						enable:true

					}

				});

				//ajax demo fn

				$("a[rel='load-content']").click(function(e){

					e.preventDefault();

					var $this=$(this),

						url=$this.attr("href");

					$this.addClass("loading");

					$.get(url,function(data){

						$this.removeClass("loading");

						$(".secteur_footer.mCSB_container").html(data); //load new content inside .mCSB_container

						$(".secteur_footer").mCustomScrollbar("update"); //update scrollbar according to newly loaded content

						$(".secteur_footer").mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top

					});

				});

				$("a[rel='append-content']").click(function(e){

					e.preventDefault();

					var $this=$(this),

						url=$this.attr("href");

					$this.addClass("loading");

					$.get(url,function(data){

						$this.removeClass("loading");

						$(".secteur_footer.mCSB_container").append(data); //append new content inside .mCSB_container

						$(".secteur_footer").mCustomScrollbar("update"); //update scrollbar according to newly appended content

						$(".secteur_footer").mCustomScrollbar("scrollTo","h2:last",{scrollInertia:2500,scrollEasing:"easeInOutQuad"}); //scroll to appended content

					});

				});

			});

		})(jQuery);

	</script>

</div>

</body>

</html>