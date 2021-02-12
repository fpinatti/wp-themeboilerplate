document.addEventListener("DOMContentLoaded", function () {


	const btnSandwich = document.querySelector('.sandwich-icon');
	const mainHeader = document.querySelector('.main-header');
	const mainBody = document.querySelector('body');
	const toggleMenu = () => {

		mainHeader.classList.toggle('open');
	};

	btnSandwich.addEventListener('click', toggleMenu);




	window.addEventListener('mousewheel', function(evt) {
        if (evt.deltaY > 0) {
			mainBody.classList.add('scroll-down');
		} else {
			mainBody.classList.remove('scroll-down');
		}
	});

});