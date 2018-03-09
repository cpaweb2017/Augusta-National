function createSlickBanner(){  
	$(".slick-banner").not('.slick-initialized').slick({
    autoplay: true,
    dots: true,
	arrows: false,
	centerMode: true,
	centerPadding: $('.slick').find('.slick-slide').outerWidth() / 2,
    responsive: [{ 
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1
			} 
		}]
	});	
}
createSlickBanner();

function createSlickSlider(){  
	$(".slick-slider").not('.slick-initialized').slick({
    autoplay: true,
    dots: true,
	centerMode: true,
    responsive: [{ 
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1
			} 
		}]
	});	
}
createSlickSlider();

function createSlickGallery(){  
	$(".slick-gallery").not('.slick-initialized').slick({
    autoplay: true,
    dots: true,
	centerMode: true,
    responsive: [{ 
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1
			} 
		}]
	});	
}
createSlickGallery();