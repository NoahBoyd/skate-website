window.addEventListener('load', function() {

    // variables

    // Buttons
    let backButton = $('.signup-back-button');
    let signupButton = $('#signup');

    // Fields
    let errorSpan = $('.error-text');
    let emailField = [$('#email-field'), 'Email'];
    let usernameField = [$('#username-field'), 'Username'];
    let passwordField = [$('#password-field'), 'Password'];
    let confirmField = [$('#confirm-field'), "Password Confirm"];
    let signupFields = [emailField, usernameField, passwordField, confirmField];
    // functions

    // this function will show an error to the screen
    function showError(error) {
        $(errorSpan).text(error);
        $(errorSpan).css('display', 'block');
    }

    function hideError() {
        $(errorSpan).css('display', 'none');
    }

    // this function checks that are text input entries are valid
    function validateFields() {
        let blankCount = 0;
        let error = "";
        signupFields.forEach(field => {
            if ($(field[0]).val().length === 0) {
                error =  field[1];
                blankCount +=1;
            }
            if (blankCount > 1) {
                showError('One or more fields is invalid');
            } else {
                showError(`${error} is invalid`);
            }
        });
    }

    // button events
    backButton.on('click', () => {
        window.location.replace('../index.php');
    })

    signupButton.on('click', () => {
        console.log('signup user');
        // check that no fields are blank
        validateFields();
    })
})