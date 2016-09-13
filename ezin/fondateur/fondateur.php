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
include("../../shared/ruban_fondateur.inc.php");
?>
	</div>
	<div class="wrap_body">
	<div class="navigation">
	 <span><a class="home" href="http://www.jophasworks.com/app/ezin/index.php"></a></span>
	 <span class="txt_nav" > &rsaquo; </span>
	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/fondateur/fondateur.php">Fondateur</a></span>
	 
	</div>
	<span class="txt_res"><p>Parlons un peu de moi.</p></span>
	<div class="txt_ambitions">
		 <a href="http://www.jophasworks.com/app/ezin/ezin/fondateur/ambitions.php"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/txt_ambitions.png" width="250" /></a>
		</div>
	<div class="ambitions">
		<p class="it_ambitions"><b>L</b>a réussite d’un homme sous tous  ses angles est la symbiose, l’équilibre, la jonction, l’harmonie entre le présent, le passé et le futur.<br/>
Il est important  d’en arriver à la synthèse  que notre vie est un assemblage, et de bonnes choses et de mauvaises choses.<br/> À mon humble avis, pour qu’un homme ne sombre pas après une introspection sur sa vie, il se doit peu importe l’ampleur des mauvaises choses qu’il a commises (...)<span><a href="http://www.jophasworks.com/app/ezin/ezin/fondateur/ambitions.php" class="lls">&nbsp;&nbsp;Lire la suite !</a></span></p>
	</div>
	<div class="societe">
	 <p class="it_societe"><b>L'</b>ambition la plus grande, celle qui peut paraître irréalisable  aux yeux de bon nombre de personnes, celle qui paraitrait utopique, qui friserait de la mégalomanie, ne l’est point aux yeux de celui là qui face à ses ambitions y associe la bravoure, le travail sans répit, l’abnégation,  la détermination, la foi en soi, et la conviction de réussir.<br/>
     Convaincu de cela, je suis parti sur la création d’une holding dont les activités seront réparties en cinq entreprises différentes.(...)<span><a href="http://www.jophasworks.com/app/ezin/ezin/fondateur/societe.php" class="lls">&nbsp;&nbsp;Lire la suite !</a></span></p>
	</div>
	<div class="txt_societe">
		 <a href="http://www.jophasworks.com/app/ezin/ezin/fondateur/societe.php"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/txt_societe.png" width="200" /></a>
		</div>
		<div style="clear:both; height:5px;"></div>

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