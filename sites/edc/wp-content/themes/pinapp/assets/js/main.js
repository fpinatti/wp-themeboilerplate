document.addEventListener("DOMContentLoaded", function () {


	const btnSandwich = document.querySelector('.sandwich-icon');
	const mainHeader = document.querySelector('.main-header');
	const mainBody = document.querySelector('body');
	const toggleMenu = () => {

		mainHeader.classList.toggle('open');
	};

	btnSandwich.addEventListener('click', toggleMenu);



	const momkid = document.querySelector('.footer-mom-kid');
	window.addEventListener('mousewheel', function(evt) {
        if (evt.deltaY > 0) {
			mainBody.classList.add('scroll-down');
		} else {
			mainBody.classList.remove('scroll-down');
		}
		var kidx = (momkid.getBoundingClientRect().bottom) / 10;
		kidx = Math.max(0, kidx);
		console.log(kidx);
		momkid.style.transform = 'translateX(' + kidx + 'px)';
	});


});