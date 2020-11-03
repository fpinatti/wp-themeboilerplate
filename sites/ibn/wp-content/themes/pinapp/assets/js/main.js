document.addEventListener("DOMContentLoaded", function() {
    var btnKnowMoreChurch = document.querySelector('.btn-know-more-church');
    onClickKnowMore = function() {
        var hiddenSections = document.querySelectorAll('.category-secao-auxiliar');
        for (let idx = 0; idx < hiddenSections.length; ++idx) {
            hiddenSections[idx].classList.add('show');
        }
    };
    if (btnKnowMoreChurch) {
        btnKnowMoreChurch.addEventListener('click', onClickKnowMore);
        console.log('aaa', btnKnowMoreChurch);
    }

    //GALLERY
    var ministryGrid = document.querySelectorAll('.ministry-grid a');
    for (let idx = 0; idx < ministryGrid.length; ++idx) {
        ministryGrid[idx].setAttribute('data-toggle', 'modal');
        ministryGrid[idx].setAttribute('data-target', ministryGrid[idx].getAttribute('href'));
    }

    //latest video
    var latVideoWrapper = document.querySelector('.latestVideo');
    var myRequest = new Request('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC6kD6-RCkdyeotrh6dMDW3Q&maxResults=1&order=date&type=video&key=AIzaSyAPlpbyG1VRV8uEcf3pMNpssgAhN1wpXUM');
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
});