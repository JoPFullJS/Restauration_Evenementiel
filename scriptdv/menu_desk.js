$(document).ready(function (){
$("div.menu_down").hide();
});
function showMenu(e){
   $(e).children('a.lk_cat_pos').addClass("hover");
   //$(e).children('a.lk_ss').removeClass("puce");
   //$(e).children("div.menu_down").fadeToggle(400,"linear");
   $(e).children("div.menu_down").show();
}
function hideMenu(e){
   //$(e).children("div.menu_down").fadeToggle(100,"linear");
   $(e).children("div.menu_down").hide();
   $(e).children('a.lk_cat_pos').removeClass("hover");
   //$(e).children('a.lk_ss').addClass("puce");
}

 $(function() {
    $( document ).tooltip({
      items: "a",
      content: function() {
           var element = $( this );
           if (element.attr('class') === 'stfshot') {
               return "<img class='align_staff' src='"+this.rel+"' />";
           }
		   else if (element.attr('class') === 'stfshot_2') {
               return "<img class='align_staff_2' src='"+this.rel+"' />";
           }
        }
    });
  });