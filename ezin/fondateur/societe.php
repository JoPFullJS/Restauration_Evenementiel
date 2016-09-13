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
	 <span class="txt_nav" > &rsaquo; </span>
	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/fondateur/societe.php">MA société:le concepte</a></span>
	 
	</div>
	<span class="txt_res"><p>Ma société</p></span>
    <div class="ms_ambitions">
		<a href="#" style="margin-left:150px;"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/logo_holding.png" /></a>
		<p>
		<b>L</b>’ambition la plus grande, celle qui peut paraître irréalisable aux yeux de bon nombre de personnes, celle qui paraitrait utopique, qui friserait de la mégalomanie, ne l’est point aux yeux de celui là qui face à ses ambitions y associe la bravoure, le travail sans répit, l’abnégation, la détermination, la foi en soi, et la conviction de réussir.<br/><br/>
<b>C</b>onvaincu de cela, je suis parti sur la création d’une holding dont les activités seront réparties en cinq entreprises différentes.<br/><br/>
<b>A</b>FRIQUE-AMERIQUE-ASIE-EUROPE (échanges), abrite en son sein les cinq entreprises qui de par leurs activités de prestataires de service, commerciales, touristiques, en événementiel, et agricoles etc. a pour objectifs : de contribuer ne se reste que modestement à ses débuts  à la résolution du problème de chômage en France et au Bénin, ensuite de par notre évolution la réaliser à grande échelle à moyen et à long terme; De prendre part au développement  social et économique du Bénin. <br/><br/>
<b>P</b>our y arriver nous avons décidé de travailler en étroites collaborations, avec les ressortissants de quatre continents d’où la citation des noms de continents  qui figurent sur notre logo et notre enseigne, et qui nous ont inspiré pour formuler le nom de notre chef-d’œuvre qu’est la holding, nous avons également décidé qu’il y ait en notre sein une relation d’échanges, consistant pour nous les africains de nous inspirer du modèle de développement de l’Amérique, de l’Asie, de l’Europe pour développer l’Afrique tout en tenant compte de  notre civilisation et de nos réalités. <br/><br/><b>N</b>ous voulons faire mouvoir des montagnes mais nous sommes conscients de nos limites, voulant alors être objectif et sachant que charité bien ordonnée commence par soi même, nous avons implanté AFRIQUE AMERIQUE ASIE EUROPE (échanges) en France où nous résidons par gratitude à ce pays qui nous a tant donné et au Bénin, notre pays d’origine. Un pays de 112600 km<sub>2</sub> qu’est le Bénin, une fois mis sur l’itinéraire du développement ne peut qu’être le prélude, l’amorce du développement des autres pays d’Afrique.<br/><br/>
<b>A</b>fin-que nous soyons compétitifs, pour que nous pussions faire face  à la concurrence, nous avons décidé de faire de chaque activité que nous embrassons notre domaine de prédilection en faisant appel bien évidemment à des gens qui ont suivi des formations requises en la matière et à des professionnels<br/><br/>
<b>N</b>OTRE CREDO EST : LE CLIENT AVANT TOUT. 


		</p>
		<div style="clear:both; height:5px;"></div>
		<a href="#"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/fondateur_2.jpg" /></a>
	</div>
		<div style="clear:both; height:10px;"></div>

	</div>

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
<?php
include("../../shared/footer.inc.php");
?>

</body>
</html>