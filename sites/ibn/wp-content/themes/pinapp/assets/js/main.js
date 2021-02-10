document.addEventListener("DOMContentLoaded", function () {

	//HOME
	var btnKnowMoreChurch = document.querySelector('.btn-know-more-church a');
	onClickKnowMore = function () {
		var hiddenSections = document.querySelectorAll('.know-more-section');
		for (let idx = 0; idx < hiddenSections.length; ++idx) {
			hiddenSections[idx].classList.add('d-block');
		}
	};
	if (btnKnowMoreChurch) {
		btnKnowMoreChurch.addEventListener('click', onClickKnowMore);
	}

	//GALLERY
	var ministryGrid = document.querySelectorAll('.ministry-grid a');
	for (let idx = 0; idx < ministryGrid.length; ++idx) {
		ministryGrid[idx].setAttribute('data-toggle', 'modal');
		ministryGrid[idx].setAttribute('data-target', ministryGrid[idx].getAttribute('href'));
	}

	//latest video
	var latVideoWrapper = document.querySelector('.latestVideo');
	var myRequest = new Request('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC6kD6-RCkdyeotrh6dMDW3Q&maxResults=1&order=date&type=video&key=AIzaSyCwUFQ5c-XkVxT5daJwrVohk4h6pCjUgdA');
	fetch(myRequest)
		.then(response => response.json())
		.then(json => {
			console.log('>>>', json);
			var videoId = json.items[0].id.videoId;
			latVideoWrapper.innerHTML = `<iframe width="100%" height="315" 
			src="https://www.youtube-nocookie.com/embed/${videoId}" 
			frameborder="0" allow="accelerometer; 
			autoplay; clipboard-write; encrypted-media; 
			gyroscope; picture-in-picture" 
			allowfullscreen></iframe>`;

		});

	//MENU
	var onClickMenuItem = function (evt) {
		evt.preventDefault();
		var targetSection = document.querySelector('.section-' + evt.target.getAttribute('data-section'));
		targetSection.scrollIntoView({
			inline: 'nearest',
			block: 'end',
			behavior: 'smooth'
		});
	};

	var menuItems = document.querySelectorAll('.menu-item');
	for (let idx = 0; idx < menuItems.length; ++idx) {
		let menuLinkElement = menuItems[idx].querySelector('a');
		let menuItemUrl = menuLinkElement.getAttribute('href');
		let urlSplit = menuItemUrl.split('/');
		let sectionName = urlSplit[urlSplit.length - 2];
		if (sectionName !== 'estudos') {
			menuItemUrl = menuItemUrl.replace(sectionName + '/', '#' + sectionName);
			menuLinkElement.setAttribute('data-section', sectionName);
			menuLinkElement.setAttribute('href', menuItemUrl);
			menuLinkElement.addEventListener('click', onClickMenuItem);
		}
	}
	const btnSandwich = document.querySelector('.sandwich-icon');
	const mainHeader = document.querySelector('.main-header');
	const toggleMenu = () => {

		mainHeader.classList.toggle('open');
	};

	btnSandwich.addEventListener('click', toggleMenu);


	// parallax
	var rellax = new Rellax('.rellax');
});