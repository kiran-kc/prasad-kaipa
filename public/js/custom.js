// <!-- Navbar transparent on top  -->
$("document").ready(function(){
  $(window).scroll(function(){
    var aTop = $('.navB').height();
    if($(this).scrollTop()>aTop-40){
        $(".navB").css("background-color","black");
    }
    else{
      $(".navB").css("background-color","transparent");
    }
  });
});