document.addEventListener('DOMContentLoaded', function () {

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
			var videoId = json.items[0].id.videoId;
			latVideoWrapper.innerHTML = `<iframe width="100%" height="315" 
			src="https://www.youtube-nocookie.com/embed/${videoId}" 
			frameborder="0" allow="accelerometer; 
			autoplay; clipboard-write; encrypted-media; 
			gyroscope; picture-in-picture" 
			allowfullscreen></iframe>`;

		});

	var pageHash = window.location.hash;
	if (pageHash) {
		history.pushState(null, null, ' ');
		setTimeout(function () {
			pageHash = pageHash.substr(1);
			var element = document.querySelector('[data-section="' + pageHash + '"]');
			element.dispatchEvent(new MouseEvent('click'));
		}, 2000);
	}

	//MENU
	var onClickMenuItem = function (evt) {
		var tSection = evt.target.getAttribute('data-section');
		var targetSection = document.querySelector('#' + tSection);
		if (targetSection) {
			evt.preventDefault();
			if (tSection === 'ministerios') {
				btnKnowMoreChurch.dispatchEvent(new MouseEvent('click'));
			}

			window.scrollTo({
				top: targetSection.getBoundingClientRect().top + window.pageYOffset - 170,
				behavior: 'smooth'
			});
			// targetSection.scrollIntoView({
			// 	inline: 'nearest',
			// 	block: 'start',
			// 	behavior: 'smooth'
			// });
			mainHeader.classList.remove('open');
		}
	};

	var menuItems = document.querySelectorAll('.top-main-nav .menu-item');
	var sections = [];

	for (let idx = 0; idx < menuItems.length; ++idx) {
		let menuLinkElement = menuItems[idx].querySelector('a');
		let menuItemUrl = menuLinkElement.getAttribute('href');
		let urlSplit = menuItemUrl.split('/');
		let sectionName = urlSplit[urlSplit.length - 2];
		if (sectionName !== 'estudos') {
			menuItemUrl = menuItemUrl.replace(sectionName + '/', '#' + sectionName);
			menuLinkElement.setAttribute('data-section', sectionName);
			sections.push('#' + sectionName);
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

	// detect active sections
	let observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				activateMenuItem(entry.target.id);
			}
		});
	});
	document.querySelectorAll(sections).forEach(section => {
		observer.observe(section);
	});

	//
	function activateMenuItem(id) {
		document.querySelectorAll('.menu-item').forEach(item => {
			item.classList.remove('current-menu-item');
			if (id && id === item.querySelector('a').getAttribute('data-section')) {
				item.classList.add('current-menu-item');
			}
		});
	};


	//replace all figures with picture
	const figures = document.querySelectorAll('figure.responsive img');
	figures.forEach(img => {
		const pictureElement = document.createElement('picture');
		const source1Element = document.createElement('source');
		const source2Element = document.createElement('source');
		const imgElement = document.createElement('img');
		const src = img.getAttribute('src');
		pictureElement.className = img.parentNode.classList.toString();
		source1Element.srcset = src;
		source1Element.media = '(max-width: 767px)';
		source2Element.srcset = getLargeImg(src);
		source2Element.media = '(min-width: 768px)';
		imgElement.src = src;
		imgElement.alt = img.getAttribute('alt');
		pictureElement.appendChild(source1Element);
		pictureElement.appendChild(source2Element);
		pictureElement.appendChild(imgElement);
		img.parentNode.replaceWith(pictureElement);
	});

	function getLargeImg(src) {
		let filename = src.substring(src.lastIndexOf('/')+1);
		let pathname = src.substring(0,src.lastIndexOf('/'));
		filename = filename.split('.');
		filename = filename[0] + '-md.' + filename[1];
		return pathname + '/' + filename;
	}


});