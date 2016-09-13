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
	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/fondateur/ambitions.php">Mes ambitions</a></span>
	 
	</div>
	<span class="txt_res"><p style="margin-top:10px; margin-left:15px;">Mes ambitions</p></span>
    <div class="ms_ambitions">
		<a href="#"><img src="http://www.jophasworks.com/app/ezin/img/fondateur/fondateur.jpg" /></a>
		<p>
		<b>L</b>a r�ussite d�un homme sous tous  ses angles est la symbiose, l��quilibre, la jonction, l�harmonie entre son pass�, son pr�sent et son futur.<br/><br/>
<b>I</b>l est important d�en arriver � la synth�se que notre vie est un assemblage, et de bonnes choses et de mauvaises choses ; � mon humble avis, pour qu�un homme ne sombre pas apr�s une introspection sur sa vie, il se doit peu importe l�ampleur des mauvaises choses qu�il a commises ou des probl�mes auxquels il a �t� confront� ou est confront�, d�en tirer les le�ons qui s�imposent et vaillamment de retrousser les manches et de se remettre r�solument dans la lutte, car les vicissitudes de la vie ne sont que des tremplins ne pouvant nous conduire qu� � bon port, si bien �videmment nous ne ployons pas sous la charge que repr�sente la souffrance ou le remord, pour les avoir consid�r�s comme une fatalit�.<br/><br/>
<b>Q</b>uant aux bonnes choses, il se doit de constamment se rappeler de l�organisation qu�il a �tablie, des privations qu�il a consenties, de la dext�rit�, des exploits dont il a fait preuve, du travail intense qu�il a fourni pour pouvoir les avoir.<br/><br/>
<b>L</b>a vie est faite de hauts et de bas, en revanche, il est tr�s important de savoir que les bas peuvent toujours �tre surmont�s, j�en veux pour preuve mon cas personnel de part de situations qui pour de multiples personnes �taient insurmontables que j�ai brav�es avec courage et que j�ai surmont�s avec brio. Et plus revigor� que jamais, je me suis fix� comme objectif que dor�navant, ne pouvant ni effacer mon pass� avec ses imperfections, ses erreurs et ses r�ussites, ni effacer le pr�sent que je vis en tenant compte des substances du pass� pour l�am�liorer et non plus le futur que j�esp�re meilleur et qui me conduira � la fin de mon passage dans ce bas monde de la mani�re la plus paisible possible, ne pouvant donc effacer aucune des trois �poques ou �tapes de ma vie,  car il manquerait une pi�ce ou des pi�ces importantes au puzzle, � ma personne dans toute son int�gralit�, je me dois de tout faire pour qu�au soir de ma vie, le pass�, le pr�sent et le futur pussent concorder :  JE PARAITRAI AINSI AUX DES GENS COMME UN HOMME BIEN,UN HOMME BON;<br/><br/>
<b>C</b>ar blanchi de mes fautes, de mes erreurs pour avoir su faire face aux obstacles avec ardeur, pour avoir travaill� d�arrache pieds pour un avenir meilleur sans �gocentrisme et pour le bonheur de bon nombre de gens, laissant derri�re moi des traces de mon passage sur terre ; RAISON POUR LAQUELLE J�AI FOND� : AFRIQUE�ASIE-AM�RIQUE-EUROPE (�changes).

		</p>
	</div>
		<div style="clear:both; height:13px;"></div>

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