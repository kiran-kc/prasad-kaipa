
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
            'background-image': 'url("public/images/aboutPage/Heroimage_About.webp")'
        });
        $('.git-heroImg').css({
            'background-image': 'url("public/images/getInTouch/Hero.webp")'
        });
// GetInTouch section
        $('.git-gradientImg').css({
            'background-image': 'url("public/images/getInTouch/Editedgradient.webp")'
        });
// Affiliation section
// image1
        $('.about-logoCards .img1').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/ILA.webp")'
        });
        $(".about-logoCards .img1").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/ILA.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/ILA.webp')");
        });
// image2
        $('.about-logoCards .img2').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c1.webp")'
        });
        $(".about-logoCards .img2").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/Intellect.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c1.webp')");
        });
// image3
        $('.about-logoCards .img3').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/Arevo.webp")'
        });
        $(".about-logoCards .img3").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/Arevo.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/Arevo.webp')");
        });
// image4
        $('.about-logoCards .img4').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c4.webp")'
        });
        $(".about-logoCards .img4").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/TransparentLogo.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c4.webp')");
        });
// image5
        $('.about-logoCards .img5').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c8.webp")'
        });
        $(".about-logoCards .img5").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/Marico.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c8.webp')");
        });
// image6
        $('.about-logoCards .img6').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c3.webp")'
        });
        $(".about-logoCards .img6").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/SOL.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c3.webp')");
        }); 
// image7
        $('.about-logoCards .img7').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c6.webp")'
        });
        $(".about-logoCards .img7").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/Apporbit.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c6.webp')");
        });
// image8
        $('.about-logoCards .img8').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c5.webp")'
        });
        $(".about-logoCards .img8").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/northsouth.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c5.webp')");
        });
// image9
        $('.about-logoCards .img9').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c2.webp")'
        });
        $(".about-logoCards .img9").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/samskrithabharathi.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c2.webp')");
        });
// image10
        $('.about-logoCards .img10').css({
            'background-image': 'url("public/images/aboutPage/Afilliations/Grey/c9.webp")'
        });
        $(".about-logoCards .img10").hover(function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Original/YogaBharati.webp')");
            }, function(){
            $(this).css("background-image", "url('public/images/aboutPage/Afilliations/Grey/c9.webp')");
        });
// Home
        $(".hp-heroImg img").attr("src","public/images/homePage/Heroimage.webp"); 
// Learnings
        $(".bg-image img").attr("src","public/images/learnings/chariot.webp"); 
// Writings Books
        $(".Wb1 img").attr("src","public/images/writingPage/Books/Book1.webp");
        $(".Wb2 img").attr("src","public/images/writingPage/Books/Book2.webp");
        $(".Wb3 img").attr("src","public/images/writingPage/Books/Book3.webp"); 
// Writings logos
        $(".Wb4 img").attr("src","public/images/writingPage/PublishedArticles/CNBC.webp"); 
        $(".Wb5 img").attr("src","public/images/writingPage/PublishedArticles/Forbes.webp"); 
        $(".Wb6 img").attr("src","public/images/writingPage/PublishedArticles/HBR.webp"); 
        $(".Wb7 img").attr("src","public/images/writingPage/PublishedArticles/ET.webp"); 
        $(".Wb8 img").attr("src","public/images/writingPage/PublishedArticles/Fortune.webp"); 
        $(".Wb9 img").attr("src","public/images/writingPage/PublishedArticles/HBR.webp");  
    }
});

