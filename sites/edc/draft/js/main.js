
const btnSandwich = document.querySelector('.sandwich-icon');
const mainHeader = document.querySelector('.main-header');
const toggleMenu = () => {

	mainHeader.classList.toggle('open');
};

btnSandwich.addEventListener('click', toggleMenu);
