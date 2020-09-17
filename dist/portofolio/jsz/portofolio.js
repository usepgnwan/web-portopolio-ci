/*event saat scrol link di klik*/
$('a[href^="#"]').on('click', function (e) {
	/**/
	$target = $(this.hash);
	$jarak = 60;
	$('html, body').stop().animate({
		'scrollTop': $target.offset().top - $jarak
	}, 1200,'easeInOutSine'

		);

	
	e.preventDefault();//matikan link
});


/*counting otomaticly*/
var counting = function(){


$('.count').each(function(){
	$(this).prop('Counter', 0).animate({
		Counter: $(this).text()
	}, {
		duration: 5000,
		easing: 'swing',
		step: function(now){
			$(this).text(Math.ceil(now));
		}
	})
});
}



/*counting otomaticly*/


/*parallax efek add class*/
$(window).on('load', function(){/*
	$('.jumbotron .nama-h1').addClass('tampil');//h1
	$('.jumbotron .nama-h2').addClass('h2-tampil');//h1*/

		$('.jumbotron .nama-h2').each(function(i){
			setTimeout(function(){
				$('.jumbotron .nama-h2').eq(i).addClass('h2-tampil');
			},300 * (i+1));
		});

		$('.notifications').each(function(){
			setTimeout(function(){
				$('.notifications').addClass('tampil-notif');
			},300);
		});

});
/*animasi scroll bagian about*/
$(window).scroll(function(){
	var aboutScroll = $(this).scrollTop();

	if (aboutScroll>$('.about').offset().top -300) {
		$('.about .animasi-foto').addClass('tampil-foto');
		$('.about .animasi-biodata').addClass('tampil-biodata');
	}
});
/*penutup animasi scroll bagian about*/
/*animasi scroll bagian about*/
$(window).scroll(function(){
	var skillScroll = $(this).scrollTop();

	if (skillScroll>$('.skill').offset().top -240) {
	
		$('.skill .animasi-skill-kiri').each(function(i){
			setTimeout(function(){
				 $('.skill .animasi-skill-kiri').eq(i).addClass('tampil-animasi-kiri');
			},400 * (i+1));
		});
		$('.skill .animasi-skill-kanan').each(function(i){
			setTimeout(function(){
				 $('.skill .animasi-skill-kanan').eq(i).addClass('tampil-animasi-kanan');
			},400 * (i+1));
		});
	}
});
/*penutup animasi scroll bagian about*/
/*animasi scroll navbar*/
$(window).scroll(function(){
	var navScroll = $(this).scrollTop();
	
	if (navScroll >=670  ) {/*
		console.log('okk');*/
		 $('.navbar').addClass('shadow-navbar')
		 
	}else{
		$('.navbar').removeClass('shadow-navbar');	}
	if (navScroll >=550  ) {/*
		console.log('okk');*/
		 $('.arrow-up').addClass('arrow-muncul');
		 
	}else{
		$('.arrow-up').removeClass('arrow-muncul');
	}

});
/*penutup animasi scroll navbar*/
/*animasi scroll bagian edu*/
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	

	if (wScroll>$('.education').offset().top - 100 ) {
		
		 	$('.education .animasi-education').each(function(i){
			setTimeout(function(){
		 		$('.education .animasi-education').eq(i).addClass('tampil-education');
			},200 * (i+1));
		});
		}
});
/*penutup animasi scroll bagian edu*/

/*animasi scroll bagian experince*/
$(window).scroll(function(){
	var aboutScroll = $(this).scrollTop();
	

	if (aboutScroll>$('.experience').offset().top - 400 ) {
			
		 	$('.experience .animasi-experience').each(function(i){
			setTimeout(function(){
		 		$('.experience .animasi-experience').eq(i).addClass('tampil-experience');				
			},300 * (i+1));
		});
		}
});
/*penutup animasi scroll bagian experince*/
/*animasi scroll bagian experince*/
$(window).scroll(function(){
	var contactScroll = $(this).scrollTop();
	

	if (contactScroll>$('.contact').offset().top - 400 ) {
			
		 	$('.contact .animasi-contact').each(function(i){
			setTimeout(function(){
		 		$('.contact .animasi-contact').eq(i).addClass('tampil-animasi-contact');				
			},300 * (i+1));
		});
		}
});
/*penutup animasi scroll bagian experince*/
/*$(document).on('click', '.navbar-nav .nav-item', function(){
	$(this).addClass('active').siblings().removeClass('active');
});*/