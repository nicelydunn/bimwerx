
jQuery(document).ready(function( $ ) {

    $('#js-testimonials').slick({
        infinite: true,
		autoplay: true,
  		autoplaySpeed: 6000,
		nextArrow : '<button type="button" class="slick-next" aria-label="Next Testimonial"><svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.025.507a1.41 1.41 0 1 0-1.986 1.987L23.174 12.64H1.339a1.414 1.414 0 0 0 0 2.825h21.835L13.023 25.6a1.438 1.438 0 0 0 0 1.987 1.4 1.4 0 0 0 1.986 0l12.555-12.555a1.377 1.377 0 0 0 0-1.987L15.025.507Z" fill="#626363"/></svg></button>',
		prevArrow : '<button type="button" class="slick-prev" aria-label="Previous Testimonial"><svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.975 27.493a1.408 1.408 0 0 0 2.08.094 1.413 1.413 0 0 0-.094-2.08L4.826 15.358h21.835a1.414 1.414 0 0 0 0-2.825H4.825L14.977 2.4a1.438 1.438 0 0 0 0-1.987 1.402 1.402 0 0 0-1.986 0L.436 12.967a1.378 1.378 0 0 0 0 1.987l12.539 12.539Z" fill="#626363"/></svg></button>'
    });

	const modalGallery = $('#js-gallery-modal')

	if(modalGallery.length){ // if page contains #js-gallery-modal run script

		let currentGallery;

        document.getElementById("close-modal").addEventListener('click', ()=>{
            modalGallery.fadeOut('fast')
            document.body.style.overflowY = "scroll"
			$(currentGallery).slick('unslick')
			currentGallery.style.display = "none"
        })

		document.querySelectorAll('.js-open-modal').forEach( function(item, index) {
            item.addEventListener('click', event => {
                modalGallery.fadeIn('slow')
				currentGallery = document.querySelector('.gallery-' + item.dataset.gallery)
				currentGallery.style.display = "block"

                document.body.style.overflowY = "hidden"
                $(currentGallery).slick({
                    infinite: true,
                    initialSlide: 0,
                    slidesToShow: 1,
                    prevArrow: '<div class="gallery-slick-prev gallery-slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg></div>',
                    nextArrow: '<div class="gallery-slick-next gallery-slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></div>',
                    // appendArrows: $('.slick-controls')
                });
            } )
        })

	}

});