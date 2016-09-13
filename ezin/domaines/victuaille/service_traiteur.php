<!doctype html>
<html>
<head>
<?php
include("../../../shared/head.inc.php");
?>
<title>Bienvenue,Ezin Amoussou !</title>

</head>

<body  onload="setupZoom()">
<div class="header">
	<div class="menu">
<?php
include("../../../shared/logo.inc.php");
?>
<?php
include("../../../shared/ruban_secteurs.inc.php");
?>
	</div>
	<div class="wrap_body">
	<div class="navigation">
	 <span><a class="home" href="http://www.jophasworks.com/app/ezin/index.php"></a></span>
	 <span class="txt_nav" > &rsaquo; </span>
	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/domaines/secteurs.php">Domaines d'activités</a></span>
	 <span class="txt_nav" > &rsaquo; </span>
	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/domaines/victuaille/service_traiteur.php">Services traiteur</a></span>
	 
	</div>
	<span class="txt_res"><p>Services traiteur</p></span>
	
	<div class="media_container">
		<ul class="box_caster">
			

		</ul>
	</div>
		<div style="clear:both; height:5px;"></div>

	</div>
<?php
include("../../../shared/footer.inc.php");
?>
<script>!window.jQuery && document.write(unescape('%3Cscript src="../../../csstag/js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="../../../csstag/jquery.mCustomScrollbar.concat.min.js"></script>
	
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