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


	//make gallery open bs modal
	const galleryItems = document.querySelectorAll('.grid-gallery a');
	galleryItems.forEach(item => {
		console.log(item);
		item.addEventListener('click', onClickGalleryItem);
	});

	const onClickGalleryItem = (evt) => {
		console.log(evt.target);
		evt.preventDefault();
	};


	//get latest video
	var lastVideoWrapper = document.querySelector('.latestVideo');
	var lastVideoTitle = document.querySelector('.video-api-title');
	
	var myRequest = new Request('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PLw0GXw-8f9r9XQpRBuoNh-KPSbC5ZZh-p&maxResults=1&order=date&type=video&key=AIzaSyCwUFQ5c-XkVxT5daJwrVohk4h6pCjUgdA');
	fetch(myRequest)
		.then(response => response.json())
		.then(json => {
			var videoId = json.items[0].snippet.resourceId.videoId;
			console.log(videoId)
			lastVideoTitle.innerText = json.items[0].snippet.title;
			lastVideoWrapper.innerHTML = `<iframe width="100%" height="100%" 
			src="https://www.youtube-nocookie.com/embed/${videoId}" 
			frameborder="0" allow="accelerometer; 
			autoplay; clipboard-write; encrypted-media; 
			gyroscope; picture-in-picture" 
			allowfullscreen></iframe>`;

		});

});