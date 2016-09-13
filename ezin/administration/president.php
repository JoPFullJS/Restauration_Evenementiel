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
	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/administration/conseil.php">Conseil d'administration</a></span>
	 <span class="txt_nav" > &rsaquo; </span>
	 <span ><a class="txt_cat" href="http://www.jophasworks.com/app/ezin/ezin/administration/president.php">mot du president du conseil d'administration</a></span>
	 
	</div>
	<span class="txt_res"><p>Un mot du Président AMOUSSOU EDMOND PIERRE <i>extrait du magazine MAMBO N°1.</i></p></span>
		<div class="mt_president">
	    <a href="#"><img src="http://www.jophasworks.com/app/ezin/img/conseil/president.jpg" /></a>
		<p>
		<b>C</b>hers amis congressistes,<br/><br/>
		<b>A</b>près la Convention Internationale de Minneapolis en 2010 au cours de
		laquelle les suffrages nécessaires n'avaient pas été réunis pour assurer l'élection
		du candidat de notre District Multiple au poste de Directeur International,
		nous nous retrouvons, à nouveau à Hambourg pour la même cause.<br/><br/>
		<b>I</b>l s'agit, cette fois-ci, de réussir le pari que les Lions du District Multiple 403
		veulent gagner aux fins d'apporter, par la présence d'un des leurs au Conseil
		d'Administration International, leur contribution aux débats.<br/><br/>
		<b>C</b>'est pour cette raison et pour faire aboutir cette Juste Cause que nous devons
		nous mobiliser pour faire triompher Alexis Vincent GOMES qui deviendra, une fois élu, le second Africain, après le Docteur NDOUMBE EKWE BELL (Directeur International 1989-1991).<br/><br/>
		<b>U</b>ne fois élu, Alexis-Vincent Gomès sera le porte flambeau de notre Continent.<br/><br/>
		En ma qualité de Président du Conseil des Gouverneurs du District Multiple 403, je vous invite à vous mobiliser aux côtés de notre Candidat pour joindre vos suffrages à ceux des autres délégués pour permettre la victoire que nous appelons de tous nos voeux.<br/><br/>
		<b>C</b>e challenge qui ne peut qu'être gagné sera de nature, une fois devenu réalité, à donner une plus grande visibilité au Lionisme en Afrique et permettre la croissance des effectifs.<br/><br/>
		<b>L</b>e choix porté sur notre Candidat est et demeure un excellent choix car « ce Lions de coeur» qu'est Alexis Vincent GOMES, est très passionné pour défendre les idéaux de notre Association et n'a jamais cessé de nous inviter à nous investir pour vivre la Fraternité et la Solidarité qui sont deux valeurs fondamentales piliers du Lions Clubs International. Son élection au poste de Directeur International sera, comme il aime à le dire, « notre Victoire ».<br/><br/>
		<b>L</b>'élection attendue de notre frère et ami Alexis Vincent GOMES, Président du Conseil des Gouverneurs DM403- 2003/2004, sera aussi un pas majeur pour combler le « gap » encore important devant permettre à l'Afrique d'aller vers une Aire Constitutionnelle.<br/><br/>
		<b>M</b>obilisions- nous donc et le triomphe sera de notre côté!<br/><br/>
		<b>B</b>onne CONVENTION Internationale à Hambourg<br/><br/>
		<b>B</b>onne chance à nous tous pour la bonne nouvelle qui nous attend sûrement le 9 juillet prochain.<br/><br/>
		<b>E</b>dmond-Pierre AMOUSSOU<br/><br/>
		<b>P</b>résident du Conseil des Gouverneurs<br/><br/>
		DM 403<br/>
		2012/2013<br/>
		</p>
		</div>
		<div style="clear:both; height:13px;"></div>

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