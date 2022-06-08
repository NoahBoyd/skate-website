window.addEventListener('load', function() {

    // variables

    let backButton = $('.signup-back-button');

    // button events
    backButton.on('click', () => {
        window.location.replace('../index.php');
    })
})