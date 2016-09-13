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

include("../../shared/ruban_staff.inc.php");

?>

	</div>

	<div class="wrap_body">

	<div class="navigation">

	 <span><a class="home" href="http://www.jophasworks.com/app/ezin/index.php"></a></span>

	 <span class="txt_nav" > &rsaquo; </span>

	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/staff/staff.php">Staff</a></span>

	 

	</div>

	<span class="txt_res"><p>Une équipe dynamique et motivée !</p></span>

	<div style="clear:both; height:10px;"></div>

		<div style="margin-left:32px;">

			<map name="donation" >

			  

			  

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/daudresse_stephanie.php" title="DAUDRESSE STÉPHANIE, Assistante de direction en France"

				  target="_blank" coords="428,0,286,142,428,284,570,142" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/malfait_amelie.php" title="MALFAIT AMELIE, Directrice du departement approvisonnement (FRANCE)"

				  target="_blank" coords="572,142,430,284,572,426,714,284" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/fidele_ahoudji.php" title="FIDELE AHOUDJI, Département comptable - Aide comptable"

				  target="_blank" coords="429,286,287,428,429,570,571,428" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/sessou_francis.php" title="SESSOU FRANCIS, Directeur du département immobilier"

				  target="_blank" coords="142,285,0,427,142,569,284,427" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/boy.php" title="Mr. BOY, Directeur financier département comptable - Conseil"

				  target="_blank" coords="715,287,573,429,715,571,857,429" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/nicole_quenum.php" title="NICOLE QUENUM, Directrice du département de la gastronomie"

				  target="_blank" coords="286,428,144,570,286,712,428,570" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/okio_donation.php" title="OKIO DONATIEN, Directeur du département agricole, élevage et pêche"

				  target="_blank" coords="573,430,431,572,573,714,715,572" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/mognin_georges.php" title="MOGNIN GEORGES, Directeur du département de la communication chargé de l'audio-visuel"

				  target="_blank" coords="142,571,0,713,142,855,284,713" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/petiprez_maxime.php" title="PETIPREZ MAXIME, Directeur du département de la communication chargé d'articles publicitaires"

				  target="_blank" coords="715,574,573,716,715,858,857,716" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

                  <area shape="poly" href="http://www.jophasworks.com/app/ezin/ezin/staff/dimoli_viviane.php" title="DIMOLI VIVIANE, Directrice du département relationnel, chargée du planing et de la gestion du stock"

				  target="_blank" coords="285,143,143,285,285,427,427,285" /><!--<span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span>-->

				  

			</map>

			<img usemap="#donation" src="http://www.jophasworks.com/app/ezin/img/staff.png" alt="Map" /> 

</div>

			

		<div style="clear:both; height:10px;"></div>

	</div>

	

<?php

include("../../shared/footer.inc.php");

?>

</div>





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

</body>

</html>