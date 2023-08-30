export function isWebp() {
	function testWebP(callback) {
		let webP = new Image()
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2)
		}
		webP.src =
			'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA'
	}

	testWebP(function (support) {
		let className = support === true ? 'webp' : 'no-webp'

		document.documentElement.classList.add(className)
	})
}

export function ibg() {
	function ibg() {
		let ibg = document.querySelectorAll('.ibg')
		for (var i = 0; i < ibg.length; i++) {
			if (ibg[i].querySelector('img')) {
				ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')'
			}
		}
	}
	
	ibg()
}

export function menu() {
const menuBtn = document.querySelector('.icon-menu')
const menuBtnLine = document.querySelector('.icon-menu__line')
const menuMobile = document.querySelector('.menu__body')
const body = document.querySelector('body')

menuBtn.addEventListener('click', () => {
	menuMobile.classList.toggle('active')
	menuBtn.classList.toggle('active')
	menuBtnLine.classList.toggle('active')
	body.classList.toggle('lock')
	})
}