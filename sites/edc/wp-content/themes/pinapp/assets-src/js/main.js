document.addEventListener("DOMContentLoaded", function () {


	const btnSandwichOpen = document.querySelector('.icon-sandwich');
	const btnSandwichClose = document.querySelector('.icon-sandwich-back');
	const mainHeader = document.querySelector('.main-header');
	const mainBody = document.querySelector('body');
	let pageScroll = 0;
	const openMenu = () => {
		mainHeader.classList.add('open');
	};
	const closeMenu = () => {
		mainHeader.classList.remove('open');
	};

	btnSandwichOpen.addEventListener('click', openMenu);
	btnSandwichClose.addEventListener('click', closeMenu);



	const momkid = document.querySelector('.footer-mom-kid');
	const footer = document.querySelector('.main-footer');
	window.addEventListener('scroll', function(evt) {
		if (window.scrollY > pageScroll) {
			if (pageScroll >= 300) {
				mainBody.classList.add('scroll-down');
			}
		} else {
			mainBody.classList.remove('scroll-down');
		}
		pageScroll = window.scrollY;
		var kidx = (footer.getBoundingClientRect().top - window.innerHeight + 200) / 10;
		kidx = Math.max(0, kidx);
		momkid.style.transform = 'translateX(' + (kidx * -1) + 'px)';
	});


});