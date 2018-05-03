// <!-- Navbar transparent on top  -->
$("document").ready(function(){
  $(window).scroll(function(){
    var aTop = $('.navB').height();
    if($(this).scrollTop()>aTop-40){
        $(".navB").css("background-color","black");
        // $(".image").addClass(".animated zoomIn");
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

// on scroll effect in about page
  $(window).scroll(function() {
  $(".about-heroImg").css({
    'opacity': 1.2 - (($(this).scrollTop()) / 500)
     // 'transform': (scale3d(0, 0, 0) + parseInt(x / 10, 0) + '% '); 

  });
});
