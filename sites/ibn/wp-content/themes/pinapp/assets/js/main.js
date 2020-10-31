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
});