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


/********** navagtion bar screen modal ************/
      function navbarModal(modalId){
        $('#'+modalId).show();
      }

/*** cancel button action on modals ***/
      function modelClose(modalId){
        $('#'+modalId).hide();
      }
