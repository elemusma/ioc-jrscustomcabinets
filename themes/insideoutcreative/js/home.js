let colFullBackground = document.querySelectorAll('.col-full-background');

// Create a media condition that targets viewports at least 768px wide
const mediaQuery = window.matchMedia('(min-width: 1200px)')


if (mediaQuery.matches) {
    for (i = 0; i < colFullBackground.length; i++) {
        let parentRow = colFullBackground[i].parentElement;
        let innerContentOuter = colFullBackground[i].querySelector('.inner-content-outer');
        let innerContent = innerContentOuter.querySelector('.inner-content');
        let backgroundImage = colFullBackground[i].querySelector('.img-full-background');

        // console.log(colFullBackground[i].getBoundingClientRect().x);

        backgroundImage.style.left = `-${colFullBackground[i].getBoundingClientRect().x}px`;
        // console.log(backgroundImage.getBoundingClientRect());
        // let imageTitle = innerContentOuter.querySelector('.image-title');
        // let transformHeight = innerContentOuter.offsetHeight - imageTitle.offsetHeight;

        innerContentOuter.style.transform = `translate(0px, ${(innerContent.offsetHeight) + 10}px)`;

        // window.addEventListener('resize', function () {
        innerContentOuter.addEventListener('mouseenter', function () {
            parentRow.classList.add('active-inner-col');
            innerContentOuter.parentElement.classList.add('active');
            innerContentOuter.style.transform = `translate(0px, 0px)`;
        })

        innerContentOuter.addEventListener('mouseleave', function () {
            innerContentOuter.parentElement.classList.remove('active');
            parentRow.classList.remove('active-inner-col');
            innerContentOuter.style.transform = `translate(0px, ${(innerContent.offsetHeight) + 10}px)`;
        })
        // });

    }
}


// add gradient only after hovering

// only when hovering over inner content outer is when the background images change
// make the transform be the height of the inner content
// get height of the innerContentOuter


// need to add class name to parent, to hide all others and activate hovered one
// all other columns need to have a z-index of 2
// mouseovered column needs to have a z-index of 1
// the background images of those columns need to have an opacity of 0