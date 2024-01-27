const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__list')
const navOverlay = document.querySelector('.nav__overlay')
const navBtnText = document.querySelector('.nav__btn-text')
const navLinks = document.querySelectorAll('.nav__menu-link')
const menuBtns = document.querySelectorAll('.menu__tab')
const menuItems = document.querySelectorAll('.menu__item')
const menuTitles = document.querySelectorAll('.menu__title')
const menuDescriptions = document.querySelectorAll('.menu__description')
const menuAccessories = document.querySelector('.menu__accessories')
const closePopup = document.querySelector('.promo__close')

const toggleNav = () => {
	const isActive = navMenu.classList.toggle('active')
	navBtn.classList.toggle('active', isActive)
	navOverlay.classList.toggle('active', isActive)
	navBtnText.textContent = isActive ? 'zamknij' : 'menu'

	navLinks.forEach(navLink => {
		navLink.addEventListener('click', () => {
			navMenu.classList.remove('active')
			navOverlay.classList.remove('active')
			navBtnText.textContent = 'menu'
		})
	})
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
	on: {
		slideChange: function () {
			var currentSlide = this.realIndex + 1
			console.log('currentSlide is:' + currentSlide)
			document.querySelector('.current-slide').innerHTML = currentSlide
		},
		beforeInit: function () {
			let numOfSlides = this.wrapperEl.querySelectorAll('.swiper-slide').length
			document.querySelector('.total-slides').innerHTML = numOfSlides
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
		checkAccessories()
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
	function checkAccessories() {
		if (menuBtn.id === menuAccessories.id) {
			console.log('to samo id - tytuł')
			menuAccessories.classList.add('active')
		} else {
			console.log('rozne id - tytuł')
			menuAccessories.classList.remove('active')
		}
	}
})

function sets() {
	menuTitles.forEach(menuTitle => {
		if (menuTitle.id == 'zestawy') {
			console.log('to samo id - tytuł')
			menuTitle.classList.add('active')
		}
	})
	menuDescriptions.forEach(menuDescription => {
		if (menuDescription.id == 'zestawy') {
			console.log('to samo id - tytuł')
			menuDescription.classList.add('active')
		}
	})
	menuItems.forEach(menuItem => {
		if (menuItem.id == 'zestawy') {
			console.log('to samo id - tytuł')
			menuItem.classList.add('active')
		}
	})
}

sets()

navBtn.addEventListener('click', toggleNav)
// navOverlay.addEventListener('click', closeNav)

window.addEventListener('load', function () {
	const promoPopup = document.querySelector('.promo')
	const promoOverlay = document.querySelector('.promo__overlay')
	setTimeout(function open(event) {
		promoPopup.classList.add('active')
		promoOverlay.classList.add('active')
	}, 1000)
	closePopup.addEventListener('click', () => {
		const promoPopup = document.querySelector('.promo')
		const promoOverlay = document.querySelector('.promo__overlay')

		promoPopup.classList.remove('active')
		promoOverlay.classList.remove('active')
	})
})
