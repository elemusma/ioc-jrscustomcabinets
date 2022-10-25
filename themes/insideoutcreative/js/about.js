let introIcons = document.querySelectorAll('.links-intro');

for (i = 0; i < introIcons.length; i++) {
    introIcons[i].addEventListener('click', showContent);

    function showContent() {
        showIconsContent(this);
    }
}
let showIconsContent = (elem) => {

    console.log(elem);
    let ID = elem.id;
    console.log(ID);

    // needs to be before command adding class
    elemActive = document.querySelector('.links-intro-active');
    tabContentActive = document.querySelector('.tab-content-active');

    // makes clicked element active
    if (!elem.classList.contains('links-intro-active')) {
        elem.classList.add('links-intro-active');
    }

    // makes all other elements inactive
    elemActive.classList.remove('links-intro-active');

    let tabContent = ID.replace("link", "content");
    let tabContentID = document.querySelector('#' + tabContent);
    console.log(tabContentID);

    // makes clicked element active
    if (!tabContentID.classList.contains('tab-content-active')) {
        tabContentID.classList.add('tab-content-active');
    }

    // makes all other elements inactive
    tabContentActive.classList.remove('tab-content-active');
}
