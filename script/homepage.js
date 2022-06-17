window.addEventListener('load', () => {
    console.log('hello from homepage.js')

    // variables
    let menuOpen = false;


    // fields
    let menuButton = $('.hamburger-menu');


    // functions


    // click events

    // menu button toggle open
    $(menuButton).on('click', () => {
        if (!menuOpen) {
            $(menuButton).addClass('open');
            menuOpen = true;
        } else {
            $(menuButton).removeClass('open');
            menuOpen = false;
        }
    });

})