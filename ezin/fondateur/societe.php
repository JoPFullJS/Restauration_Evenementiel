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
	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/fondateur/societe.php">MA soci�t�:le concepte</a></span>
	 
	</div>
	<span class="txt_res"><p>Ma soci�t�</p></span>
    <div class="ms_ambitions">
		<a href="#" style="margin-left:150px;"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/logo_holding.png" /></a>
		<p>
		<b>L</b>�ambition la plus grande, celle qui peut para�tre irr�alisable aux yeux de bon nombre de personnes, celle qui paraitrait utopique, qui friserait de la m�galomanie, ne l�est point aux yeux de celui l� qui face � ses ambitions y associe la bravoure, le travail sans r�pit, l�abn�gation, la d�termination, la foi en soi, et la conviction de r�ussir.<br/><br/>
<b>C</b>onvaincu de cela, je suis parti sur la cr�ation d�une holding dont les activit�s seront r�parties en cinq entreprises diff�rentes.<br/><br/>
<b>A</b>FRIQUE-AMERIQUE-ASIE-EUROPE (�changes), abrite en son sein les cinq entreprises qui de par leurs activit�s de prestataires de service, commerciales, touristiques, en �v�nementiel, et agricoles etc. a pour objectifs : de contribuer ne se reste que modestement � ses d�buts  � la r�solution du probl�me de ch�mage en France et au B�nin, ensuite de par notre �volution la r�aliser � grande �chelle � moyen et � long terme; De prendre part au d�veloppement  social et �conomique du B�nin. <br/><br/>
<b>P</b>our y arriver nous avons d�cid� de travailler en �troites collaborations, avec les ressortissants de quatre continents d�o� la citation des noms de continents  qui figurent sur notre logo et notre enseigne, et qui nous ont inspir� pour formuler le nom de notre chef-d��uvre qu�est la holding, nous avons �galement d�cid� qu�il y ait en notre sein une relation d��changes, consistant pour nous les africains de nous inspirer du mod�le de d�veloppement de l�Am�rique, de l�Asie, de l�Europe pour d�velopper l�Afrique tout en tenant compte de  notre civilisation et de nos r�alit�s. <br/><br/><b>N</b>ous voulons faire mouvoir des montagnes mais nous sommes conscients de nos limites, voulant alors �tre objectif et sachant que charit� bien ordonn�e commence par soi m�me, nous avons implant� AFRIQUE AMERIQUE ASIE EUROPE (�changes) en France o� nous r�sidons par gratitude � ce pays qui nous a tant donn� et au B�nin, notre pays d�origine. Un pays de 112600 km<sub>2</sub> qu�est le B�nin, une fois mis sur l�itin�raire du d�veloppement ne peut qu��tre le pr�lude, l�amorce du d�veloppement des autres pays d�Afrique.<br/><br/>
<b>A</b>fin-que nous soyons comp�titifs, pour que nous pussions faire face  � la concurrence, nous avons d�cid� de faire de chaque activit� que nous embrassons notre domaine de pr�dilection en faisant appel bien �videmment � des gens qui ont suivi des formations requises en la mati�re et � des professionnels<br/><br/>
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