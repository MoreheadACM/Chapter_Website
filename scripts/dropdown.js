$(document).ready(function(){
  var codeSitesRevealed = false;
  var bookSitesRevealed = false;
  $(".code_sub_menu").hide();
  $(".book_sub_menu").hide();
	
	
  $("#codingCategory").click(function(){
	if(codeSitesRevealed == false) {
		$("ul.code_sub_menu").slideDown('fast');
		codeSitesRevealed = true;
	} else if(codeSitesRevealed == true) {
		$("ul.code_sub_menu").slideUp('fast').stop;
		codeSitesRevealed = false;
	}
  });
  
  $("#bookCategory").click(function(){
	if(bookSitesRevealed == false) {
		$("ul.book_sub_menu").slideDown('fast');
		bookSitesRevealed = true;
	} else if(bookSitesRevealed == true) {
		$("ul.book_sub_menu").slideUp('fast').stop;
		bookSitesRevealed = false;
	}
  });
   
});