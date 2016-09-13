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

	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/domaines/secteurs.php">Domaines d'activit�s</a></span>

	 <span class="txt_nav" > &rsaquo; </span>

	 <span><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/domaines/victuaille/livraison_repas.php">Livraison de repas</a></span>

	 

	</div>

	<span class="txt_res"><p>La livraison de repas, un d�lice sans prise de t�te</p></span>

	<div class="ms_ambitions">

	<p>

		<b>D</b>ans un souci de bien �tre des valeureux travailleurs b�ninois, des op�rateurs �conomiques, du peuple b�ninois dans toute sa globalit�, dans l�intention de faciliter, de simplifier la vie aux citoyens b�ninois pour ce qui est de l�alimentaire tous les jours ouvrables de la semaine, nous leurs proposons la livraison de leurs repas  dans leurs entreprises respectives, dans  leurs endroits de travail respectifs, ou aux endroits indiqu�s.<br/><br/> 

<b>B</b>on nombre de travailleurs b�ninois, vivant dans les banlieues de Cotonou, certains b�ninois ou certaines b�ninoises par mesure d��conomie, pour diverses raisons optent pour rester sur leurs lieux de travail ou reste sur leurs lieux de travail entre le temps de pause et le moment de reprendre leur travail en d�but d�apr�s midi ; ils se retrouvent  ainsi

Soit � r�fl�chir tous les jours � 12h30 pour ce que est de l�endroit o� ils vont manger, de ce qu�ils vont  manger, et une fois les r�ponses � ces questions trouv�es, il leurs faut ne pas manger � un co�t trop �lev� mais surtout manger sainement, nous entendons par l� une nourriture de qualit� et en quantit�.<br/><br/>

<b>B</b>on nombre d�entre eux pour satisfaire ce besoin vital qui consiste � se nourrir se r�signent  � manger aux m�mes endroits et durant toute la semaine voire tout le mois et � chaque pause le m�me repas, ceux l� d�entre eux qui sont pr�occup�s par un souci de diversification de plats se voient contraint(e)s de se mouvoir.<br/><br/>

<b>P</b>our palier � toutes ces �quations, nous proposons aux b�ninois la formule de LA  SOLUTION EN UNE.<br/>

<b>L</b>a solution en une est la livraison de repas � un client  peu importe o� il est. Mais voulant faire les choses dans les r�gles de l�art, nous partons sur un contrat en bonne et due forme stipulant que moyennant un co�t forfaitaire de 20000fcfa  par mois, (ce qui signifie qu�un repas complet  comprenant une entr�e, un plat de r�sistance, et un dessert est � 666fcfa par jour), nous leurs livrerons le repas qu�ils auraient le soin de choisir au moins 24 heures � l�avance ou des jours � l�avance sur leurs lieux de travail ou � l�endroit qu�ils nous indiqueraient.<br/><br/>

<b>L</b>e contrat  stipule un pr�l�vement  sur salaire, un payement en esp�ces, ou un achat de carnet de tickets au mois.<br/><br/>

<b>P</b>our ce qui concerne les commandes nos clients ont la possibilit� de choisir n�importe quel plat de r�sistance � leur convenance figurant sur notre site ou la liste de plats ou de menus que nous leurs donnerons � la signature du contrat, ils pourront  passer leurs commandes en allant sur notre site, ou aux passages journaliers de nos agents commerciaux, ou en nous t�l�phonant � un num�ro vert que nous leurs communiqueront.<br/><br/>

<b>P</b>our cette formule en question nous nous faisons le plaisir de leurs proposer l'entr�e et le dessert.<br/><br/>

<b>N.B</b> : PASSEZ VOS COMMANDES 24 HEURES AVANT LA LIVRAISON SINON ELLES NE SERONT PRISES EN COMPTE ET VOUS NE SEREZ PAS REMBOURS�S

<b>L</b>ES TRAVAILLEURS DONT LES SALAIRES DEPASSENT LES 150000FCFA NE PEUVENT PAS SOUSCRIRENT LE CONTRAT DE LA SOLUTION EN UNE � 20000FCFA  NOUS AVONS LA M�ME FORMULE � UN AUTRE CO�T � LEURS PROPOSER DANS UNE AUTRE GAMME DE PRODUIT.<br/><br/>

<b>A</b>USSI NOUS PORTONS A VOTRE CONNAISSANCE QUE VOUS AVEZ LA POSSIBILIT� DE VENIR DEGUSTER VOS PLATS COMMANDES SEUL OU ACCOMPAGN� DANS NOTRE RETAURANT � MIDI EN FONCTION DE LA DISPONIBILIT� DE PLACES ASSISES ET DANS CE CAS VOUS N�AUREZ QU�� PAYER LES BOISSONS CONSOMM�ES ET LES PLATS DE VOS INVIT�S. 

      



	</p>

	</div>

	

		<div style="clear:both; height:10px;"></div>



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