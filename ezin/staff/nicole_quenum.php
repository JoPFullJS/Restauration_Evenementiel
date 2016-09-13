<!doctype html>
<html>
<head>
<?php
include("../../shared/head.inc.php");
?>
<title>Bienvenue,Ezin Amoussou !</title>



</head>

<body onload="setupZoom()">

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
	 <span class="txt_nav" > &rsaquo; </span>
	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/staff/nicoles_quenum.php">Nicoles Quenum</a></span>
	 
	</div>
	<span class="txt_res"><p>Une équipe dynamique et motivée !</p></span>
		<div class="staff_container">
			<ul class="box_staff">
			
				<li class="pos_staff">
				 <div class="photo float_left" style="clear:both;">
					<div class="patronime">
						<span>NICOLE QUENUM</span>
					</div>
					<div class="identite">
						<a class="staff_poste" href="http://www.jophasworks.com/app/ezin/img/staff/nicole/nicole_z.jpg"><img class="pos_identite" src="http://www.jophasworks.com/app/ezin/img/staff/nicole/nicole.jpg" width="240" /><span><img src="http://www.jophasworks.com/app/ezin/img/plus.png" /></span></a>
					<!--
					</div>-->
					<div class="content content_1">
						<div class="images_container">
						

						</div>
					</div>

	<!-- Google CDN jQuery with fallback to local -->
	
	</div>
					<div class="lk_cv">
						<div class="pdf_img">
						  <a  class="img_lk" href="http://www.jophasworks.com/app/ezin/img/staff/fidele/nicole_quenum_kouame.pdf"><img src="http://www.jophasworks.com/app/ezin/img/staff/pdf.png" width="18" />&nbsp;&nbsp;Téléchargez ! &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:rgb(53,128,9); text-shadow:1px 1px 1px rgb(0,0,0);" >NICOLE QUENUM KOUAME</i></a>
						</div>
						
					</div>
				 </div>
				 <div class="vsp float_left"></div>
				 <div class="video float_left" style="clear:both;">
				 <div class="poste">
					<span>Directrice du département de la gastronomie</span>
				 </div>
				 <div class="lk_video">
					<iframe width="555" height="314" src="//www.youtube.com/embed/M2e7yMbk6yU" frameborder="0" allowfullscreen></iframe>
				 </div>
				<div style="clear:both;"></div>
				 </div>
				</li>


				
			</ul>
			<div class="cv_pdf">
				<iframe src="http://www.jophasworks.com/app/ezin/img/staff/nicole/nicole_quenum_kouame.pdf" width="866" height="800">
					
					</iframe>
				</div>
		</div>

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