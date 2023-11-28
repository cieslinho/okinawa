const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__list')
const navOverlay = document.querySelector('.nav__overlay')
const navBtnText = document.querySelector('.nav__btn-text')

const toggleNav = () => {
	const isActive = navMenu.classList.toggle('active')
	navBtn.classList.toggle('active', isActive)
	navOverlay.classList.toggle('active', isActive)
	navBtnText.textContent = isActive ? 'zamknij' : 'menu'
}

const closeNav = () => {
	navBtn.classList.remove('active')
	navOverlay.classList.remove('active')
	navMenu.classList.remove('active')
	navBtnText.textContent = 'menu'
}

const swiper = new Swiper('.suggested__swiper', {
	pagination: {
		el: '.suggested__pagination',
		dynamicBullets: true,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	loop: true,
	centeredSlides: true,
	roundLengths: true,
	spaceBetween: 20,
	// loopAdditionalSlides: 30,
	breakpoints: {
		768: {
			slidesPerView: 2,
			// spaceBetween: 40,
		},

		968: {
			slidesPerView: 3,
			// spaceBetween: 40,
		},

		1230: {
			slidesPerView: 4,
			// spaceBetween: 40,
		},

		1440: {
			slidesPerView: 5,
			// spaceBetween: 50,
		},
	},
})

const gallerySwiper = new Swiper('.gallery__swiper', {
	pagination: {
		el: '.gallery__pagination',
		dynamicBullets: true,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	loop: true,
	centeredSlides: true,
	// roundLengths: true,
	navigation: {
		nextEl: '.gallery__next',
		prevEl: '.gallery__prev',
	},
	breakpoints: {
		768: {
			slidesPerView: 2,
			// spaceBetween: 40,
		},

		968: {
			slidesPerView: 3,
			// spaceBetween: 40,
		},

		1230: {
			slidesPerView: 4,
			// spaceBetween: 40,
		},
	},
})

const testimonialsSwiper = new Swiper('.testimonials__swiper', {
	pagination: {
		el: '.testimonials__pagination',
		dynamicBullets: true,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	spaceBetween: 40,
	loop: true,
	centeredSlides: true,
	roundLengths: true,
	// navigation: {
	// 	nextEl: '.gallery__next',
	// 	prevEl: '.gallery__prev',
	// },
	breakpoints: {
		768: {
			slidesPerView: 2,
			spaceBetween: 40,
		},

		968: {
			slidesPerView: 3,
			spaceBetween: 60,
		},

		// 1230: {
		// 	slidesPerView: 4,
		// 	// spaceBetween: 40,
		// },
	},
})

navBtn.addEventListener('click', toggleNav)
navOverlay.addEventListener('click', closeNav)
