window.addEventListener("load", function() {
    console.log('hello from index.js');
    // variables
    let indexSignupButton = $("#signup");

    // button click events
    indexSignupButton.on('click', function() {
        window.location.replace('pages/signupUser.php');
    })
})