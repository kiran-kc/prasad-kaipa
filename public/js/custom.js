
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
  $(".about-opacity1").css({
    'opacity': 2.4 - (($(this).scrollTop())/470)
  });
  $(".about-opacity2").css({
    'opacity': 3.8 - (($(this).scrollTop())/440)
  });
});




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


// cross browser compatibility code for background images ********************************** 
/******************************************************
    Cross compatibility code for Chrome
******************************************************/

// About section
    if(navigator.userAgent.indexOf("Chrome") != -1 ){
        $('.about-heroImg').css({
            'background-image': 'url("../images/aboutPage/Heroimage_About.webp")'
        });
        $('.git-heroImg').css({
            'background-image': 'url("../images/getInTouch/Hero.webp")'
        });
// GetInTouch section
        $('.git-gradientImg').css({
            'background-image': 'url("../images/getInTouch/Editedgradient.webp")'
        });
// Affiliation section
// image1
        $('.about-logoCards .img1').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/ILA.webp")'
        });
// image2
        $('.about-logoCards .img2').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/Intellect.webp")'
        });
        
// image3
        $('.about-logoCards .img3').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/Arevo.webp")'
        });
// image4
        $('.about-logoCards .img4').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/TransparentLogo.webp")'
        });
// image5
        $('.about-logoCards .img5').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/Marico.webp")'
        });
// image6
        $('.about-logoCards .img6').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/SOL.webp")'
        });
// image7
        $('.about-logoCards .img7').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/Apporbit.webp")'
        });
// image8
        $('.about-logoCards .img8').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/northsouth.webp")'
        });
// image9
        $('.about-logoCards .img9').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/samskrithabharathi.webp")'
        });
// image10
        $('.about-logoCards .img10').css({
            'background-image': 'url("../images/aboutPage/Afilliations/Original/YogaBharati.webp")'
        });
// Home
        $(".hp-heroImg img").attr("src","../images/homePage/Heroimage.webp"); 
// Learnings
        $(".bg-image img").attr("src","../images/learnings/chariot.webp"); 
// Writings Books
        $(".Wb1 img").attr("src","../images/writingPage/Books/Book1.webp");
        $(".Wb2 img").attr("src","../images/writingPage/Books/Book2.webp");
        $(".Wb3 img").attr("src","../images/writingPage/Books/Book3.webp"); 
// Writings logos
        $(".Wb4 img").attr("src","../images/writingPage/PublishedArticles/CNBC.webp"); 
        $(".Wb5 img").attr("src","../images/writingPage/PublishedArticles/Forbes.webp"); 
        $(".Wb6 img").attr("src","../images/writingPage/PublishedArticles/HBR.webp"); 
        $(".Wb7 img").attr("src","../images/writingPage/PublishedArticles/ET.webp"); 
        $(".Wb8 img").attr("src","../images/writingPage/PublishedArticles/Fortune.webp"); 
        $(".Wb9 img").attr("src","../images/writingPage/PublishedArticles/HBR.webp");
// Articles logos
        $(".Wb10 img").attr("src","../images/writingPage/PublishedArticles/SBDN.webp"); 
        $(".Wb11 img").attr("src","../images/writingPage/PublishedArticles/b2c.webp"); 
        $(".Wb12 img").attr("src","../images/writingPage/PublishedArticles/bt.webp"); 
        $(".Wb13 img").attr("src","../images/writingPage/PublishedArticles/FETZERN.webp"); 
        $(".Wb14 img").attr("src","../images/writingPage/PublishedArticles/b2c.webp"); 
        $(".Wb15 img").attr("src","../images/writingPage/PublishedArticles/VISTAGEN.webp");
        $(".Wb16 img").attr("src","../images/writingPage/PublishedArticles/HBR.webp"); 
        $(".Wb17 img").attr("src","../images/writingPage/PublishedArticles/bt.webp"); 
        $(".Wb18 img").attr("src","../images/writingPage/PublishedArticles/DAILYGOODN.webp"); 
        $(".Wb19 img").attr("src","../images/writingPage/PublishedArticles/Forbes.webp"); 
        $(".Wb20 img").attr("src","../images/writingPage/PublishedArticles/HBR.webp"); 
        $(".Wb21 img").attr("src","../images/writingPage/PublishedArticles/T50N.webp");
        $(".Wb22 img").attr("src","../images/writingPage/PublishedArticles/Forbes.webp");        
    }
});
