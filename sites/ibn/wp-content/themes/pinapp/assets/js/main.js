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
			targetSection.scrollIntoView({
				inline: 'nearest',
				block: 'start',
				behavior: 'smooth'
			});
			mainHeader.classList.remove('open');
		}
	};

	var menuItems = document.querySelectorAll('.menu-item');
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


	//REMOVE width/height images
	const imgs = document.querySelectorAll('.wp-block-image img');
	imgs.forEach(img => {
		// img.removeAttribute('width');
		// img.removeAttribute('height');
	});

	// let options = {
	// 	root: document.querySelector('#scrollArea'),
	// 	rootMargin: '0px',
	// 	threshold: 1.0
	//   }

	//   let observer = new IntersectionObserver(callback, options);


	// parallax
	//var rellax = new Rellax('.rellax');

});

window.addEventListener("load", () => {
	initFx();

});

initFx = function () {


	// // we will keep track of all our planes in an array
	// let scrollEffect = 0;

	// // set up our WebGL context and append the canvas to our wrapper
	// const curtains = new Curtains({
	//     container: "canvas",
	//     antialias: false, // render targets will disable default antialiasing anyway
	//     pixelRatio: Math.min(1.5, window.devicePixelRatio) // limit pixel ratio for performance
	// });

	// curtains.onRender(() => {
	//     // update our planes deformation
	//     // increase/decrease the effect
	//     scrollEffect = curtains.lerp(scrollEffect, 0, 0.05);
	// }).onScroll(() => {
	//     // get scroll deltas to apply the effect on scroll
	//     const delta = curtains.getScrollDeltas();

	//     // invert value for the effect
	//     delta.y = -delta.y;

	//     // threshold
	//     if(delta.y > 100) {
	//         delta.y = 100;
	//     }
	//     else if(delta.y < -100) {
	//         delta.y = -100;
	//     }

	//     if(Math.abs(delta.y) > Math.abs(scrollEffect)) {
	//         scrollEffect = curtains.lerp(scrollEffect, delta.y, 0.5);
	//     }

	// }).onError(() => {
	//     // we will add a class to the document body to display original images
	//     document.body.classList.add("no-curtains");
	// }).onContextLost(() => {
	//     // on context lost, try to restore the context
	//     curtains.restoreContext();
	// });


	// // get our planes elements
	// const planeElements = document.getElementsByClassName("wp-block-image");
	// const smallPlaneElements = document.getElementsByClassName("wp-block-image");


	// const distortionTarget = new RenderTarget(curtains);
	// const rgbTarget = new RenderTarget(curtains);


	// const vs = `
	//     precision mediump float;

	//     // default mandatory variables
	//     attribute vec3 aVertexPosition;
	//     attribute vec2 aTextureCoord;

	//     uniform mat4 uMVMatrix;
	//     uniform mat4 uPMatrix;

	//     uniform mat4 planeTextureMatrix;

	//     // custom variables
	//     varying vec3 vVertexPosition;
	//     varying vec2 vTextureMatrixCoord;

	//     void main() {

	//         vec3 vertexPosition = aVertexPosition;

	//         gl_Position = uPMatrix * uMVMatrix * vec4(vertexPosition, 1.0);

	//         // varyings
	//         vVertexPosition = vertexPosition;
	//         vTextureMatrixCoord = (planeTextureMatrix * vec4(aTextureCoord, 0.0, 1.0)).xy;
	//     }
	// `;

	// const fs = `
	//     precision mediump float;

	//     varying vec3 vVertexPosition;
	//     varying vec2 vTextureMatrixCoord;

	//     uniform sampler2D planeTexture;

	//     void main() {
	//         // just display our texture
	//         gl_FragColor = texture2D(planeTexture, vTextureMatrixCoord);
	//     }
	// `;

	// // add our planes and handle them
	// for(let i = 0; i < planeElements.length; i++) {
	//     const plane = new Plane(curtains, planeElements[i], {
	//         vertexShader: vs,
	//         fragmentShader: fs,
	//     });

	//     plane.setRenderTarget(distortionTarget);
	// }

	// // add the small planes as well
	// for(let i = 0; i < smallPlaneElements.length; i++) {
	//     const plane = new Plane(curtains, smallPlaneElements[i], {
	//         vertexShader: vs,
	//         fragmentShader: fs,
	//         texturesOptions: {
	//             // textures images will be reduced, use LINEAR_MIPMAP_NEAREST
	//             minFilter: curtains.gl.LINEAR_MIPMAP_NEAREST
	//         },
	//     });

	//     plane.setRenderTarget(rgbTarget);
	// }


	// const distortionFs = `
	//     precision mediump float;

	//     varying vec3 vVertexPosition;
	//     varying vec2 vTextureCoord;

	//     uniform sampler2D uRenderTexture;

	//     uniform float uScrollEffect;

	//     void main() {
	//         vec2 textureCoords = vTextureCoord;
	//         vec2 texCenter = vec2(0.5, 0.5);

	//         // distort around scene center
	//         textureCoords.y += cos((textureCoords.x - texCenter.x) * 3.141592) * uScrollEffect / 500.0;

	//         gl_FragColor = texture2D(uRenderTexture, textureCoords);
	//     }
	// `;

	// const distortionPass = new ShaderPass(curtains, {
	//     fragmentShader: distortionFs,
	//     renderTarget: distortionTarget,
	//     uniforms: {
	//         scrollEffect: {
	//             name: "uScrollEffect",
	//             type: "1f",
	//             value: 0,
	//         },
	//     },
	// });

	// distortionPass.onRender(() => {
	//     // update the uniform
	//     distortionPass.uniforms.scrollEffect.value = scrollEffect;
	// });


	// const rgbFs = `
	//     precision mediump float;

	//     varying vec3 vVertexPosition;
	//     varying vec2 vTextureCoord;

	//     uniform sampler2D uRenderTexture;

	//     uniform float uScrollEffect;

	//     void main() {
	//         vec2 textureCoords = vTextureCoord;

	//         vec2 redTextCoords = vec2(vTextureCoord.x, vTextureCoord.y - uScrollEffect / 300.0);
	//         vec2 greenTextCoords = vec2(vTextureCoord.x, vTextureCoord.y - uScrollEffect / 600.0);
	//         vec2 blueTextCoords = vec2(vTextureCoord.x, vTextureCoord.y - uScrollEffect / 900.0);

	//         vec4 red = texture2D(uRenderTexture, redTextCoords);
	//         vec4 green = texture2D(uRenderTexture, greenTextCoords);
	//         vec4 blue = texture2D(uRenderTexture, blueTextCoords);

	//         vec4 finalColor = vec4(red.r, green.g, blue.b, min(1.0, red.a + blue.a + green.a));
	//         gl_FragColor = finalColor;
	//     }
	// `;

	// const rgbPass = new ShaderPass(curtains, {
	//     fragmentShader: rgbFs,
	//     renderTarget: rgbTarget,
	//     depthTest: false, // we need to disable the depth test to display that shader pass on top of the first one
	//     uniforms: {
	//         scrollEffect: {
	//             name: "uScrollEffect",
	//             type: "1f",
	//             value: 0,
	//         },
	//     },
	// });

	// rgbPass.onRender(() => {
	//     // update the uniform
	//     rgbPass.uniforms.scrollEffect.value = scrollEffect;
	// });


	// const blurFs = `
	//     precision mediump float;

	//     varying vec3 vVertexPosition;
	//     varying vec2 vTextureCoord;

	//     uniform sampler2D uRenderTexture;

	//     uniform float uScrollEffect;
	//     uniform vec2 uResolution;


	//     // taken from https://github.com/Jam3/glsl-fast-gaussian-blur
	//     vec4 blur5(sampler2D image, vec2 uv, vec2 resolution, vec2 direction) {
	//         vec4 color = vec4(0.0);
	//         vec2 off1 = vec2(1.3333333333333333) * direction;
	//         color += texture2D(image, uv) * 0.29411764705882354;
	//         color += texture2D(image, uv + (off1 / resolution)) * 0.35294117647058826;
	//         color += texture2D(image, uv - (off1 / resolution)) * 0.35294117647058826;
	//         return color;
	//     }

	//     void main() {
	//         vec4 original = texture2D(uRenderTexture, vTextureCoord);
	//         vec4 blur = blur5(uRenderTexture, vTextureCoord, uResolution, vec2(0.0, 1.0));

	//         gl_FragColor = mix(original, blur, min(1.0, abs(uScrollEffect) / 5.0));
	//     }
	// `;

	// let curtainsBBox = curtains.getBoundingRect();

	// const blurPass = new ShaderPass(curtains, {
	//     fragmentShader: blurFs,
	//     uniforms: {
	//         scrollEffect: {
	//             name: "uScrollEffect",
	//             type: "1f",
	//             value: 0,
	//         },
	//         resolution: {
	//             name: "uResolution",
	//             type: "2f",
	//             value: [curtainsBBox.width, curtainsBBox.height],
	//         },
	//     },
	// });

	// blurPass.onRender(() => {
	//     // update the uniform
	//     blurPass.uniforms.scrollEffect.value = scrollEffect;
	// }).onAfterResize(() => {
	//     curtainsBBox = curtains.getBoundingRect();
	//     blurPass.uniforms.resolution.value = [curtainsBBox.width, curtainsBBox.height];
	// });
};