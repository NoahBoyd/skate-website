window.addEventListener('load', () => {
    console.log('hello from homepage.js')

    // variables
    let menuOpen = false;


    // fields
    let menuButton = $('.hamburger-menu');
    let profileMenuButton = $('.profile-button');


    // functions


    // click events

    // menu button toggle open
    $(menuButton).on('click', () => {
        let navbar = $('#homepage-navbar');
        let homepageBody = $('.homepage-container');
        if (!menuOpen) {
            $(menuButton).addClass('open');
            menuOpen = true;
            // slide out navbar
            $(navbar).css('left', 0);
            $(homepageBody).css('left', '50vw');
        } else {
            $(menuButton).removeClass('open');
            menuOpen = false;

            // slide out navbar
            $(navbar).css('left', '-50vw');
            $(homepageBody).css('left', 0);
        }
    });

    // Profile Menu Button Toggle Visible
    $(profileMenuButton).on('click', () => {
        let profileMenu = $('.profileMenu');
        $(profileMenu).toggleClass('profileMenuHidden');
    });

})