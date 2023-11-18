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

navBtn.addEventListener('click', toggleNav)
navOverlay.addEventListener('click', closeNav)
