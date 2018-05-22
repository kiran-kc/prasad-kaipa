	
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
		$('#leftText1 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/2.2 +'%, 0px)'
		});
		$('#leftText2 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/3 +'%, 0px)'
		});
		$('#leftText3 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/4 +'%, 0px)'
		});
		$('#leftText4 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/5.5 +'%, 0px)'
		});
		$('#leftText5 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/6 +'%, 0px)'
		});
		$('#leftText6 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/7.2 +'%, 0px)'
		});
		$('#leftText7 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/7.7 +'%, 0px)'
		});
		$('#leftText8 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/8.5 +'%, 0px)'
		});
		$('#leftText9 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/10 +'%, 0px)'
		});
		$('#leftText10 h1').css({
			'transform' : 'translate3d(0px, -'+ wScroll/10 +'%, 0px)'
		});
	});