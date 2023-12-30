const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__list')
const navOverlay = document.querySelector('.nav__overlay')
const navBtnText = document.querySelector('.nav__btn-text')
const menuBtns = document.querySelectorAll('.menu__tab')
const menuItems = document.querySelectorAll('.menu__item')
const menuTitles = document.querySelectorAll('.menu__title')
const menuDescriptions = document.querySelectorAll('.menu__description')

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

	breakpoints: {
		768: {
			slidesPerView: 2,
			spaceBetween: 40,
		},

		968: {
			slidesPerView: 3,
			spaceBetween: 60,
		},
	},
})

var productSwiper = new Swiper('.product__swiper-thumbs', {
	spaceBetween: 10,
	slidesPerView: 3,
	// watchSlidesProgress: true,
	// centeredSlides: true,
	breakpoints: {
		768: {
			slidesPerView: 4,
		},
	},
})
var thumbsSwiper = new Swiper('.product__swiper', {
	spaceBetween: 10,
	centeredSlides: true,
	navigation: {
		nextEl: '.product__next',
		prevEl: '.product__prev',
	},
	thumbs: {
		swiper: productSwiper,
	},
})

menuBtns.forEach(menuBtn => {
	menuBtn.addEventListener('click', () => {
		document.querySelector('.active').classList.remove('active')
		menuBtn.classList.add('active')

		checkTabs()
		checkTitles()
		checkDescriptions()
	})

	function checkTabs() {
		menuItems.forEach(menuItem => {
			if (menuBtn.id === menuItem.id) {
				console.log('to samo id')
				menuItem.classList.add('active')
			} else {
				console.log('rozne id')
				menuItem.classList.remove('active')
			}
		})
	}

	function checkTitles() {
		menuTitles.forEach(menuTitle => {
			if (menuBtn.id === menuTitle.id) {
				console.log('to samo id - tytuł')
				menuTitle.classList.add('active')
			} else {
				console.log('rozne id - tytuł')
				menuTitle.classList.remove('active')
			}
		})
	}

	function checkDescriptions() {
		menuDescriptions.forEach(menuDescription => {
			if (menuBtn.id === menuDescription.id) {
				console.log('to samo id - tytuł')
				menuDescription.classList.add('active')
			} else {
				console.log('rozne id - tytuł')
				menuDescription.classList.remove('active')
			}
		})
	}
})

navBtn.addEventListener('click', toggleNav)
navOverlay.addEventListener('click', closeNav)
