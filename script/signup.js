window.addEventListener('load', function() {

    // variables

    // Buttons
    let backButton = $('.signup-back-button');
    let signupButton = $('#signup');

    // Fields
    let errorSpan = $('.error-text');
    let showPasswordButton = $('.show-password');
    let emailField = [$('#email-field'), 'Email is invalid'];
    let usernameField = [$('#username-field'), 'Username is invalid'];
    let passwordField = [$('#password-field'), 'Password is invalid'];
    let confirmField = [$('#confirm-field'), "Passwords don't match"];
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
        // Check that each field is not empty, Set error if field is empty
        signupFields.forEach(field => {
            if ($(field[0]).val().length === 0) {
                error =  field[1];
                blankCount +=1;
            }
        });

        if (blankCount === 0) {
            if (passwordsMatch()) { // no blanks and passwords match, return true
                return true;
            } else { // passwords do not match
                showError("Passwords don't match");
            }
        } else if (blankCount === 1) { // 1 field is empty
            showError(error);
        } else { // more than 1 field is empty
            showError('More than one field is invalid');
        }
        return false;
    }

    function passwordsMatch() {
        if (passwordField[0].val() === confirmField[0].val()) {
            hideError();
            return true;
        } else {
            return false;
        }
    }

    function ajaxSuccess(result) {
        console.log(result);
    }

    // function for show-password button to toggle password/text
    showPasswordButton.on('click', (e) => {
        let passwordField = $(e.target).siblings()[0];
        $(e.target).toggleClass('show-password-active');

        if ($(passwordField).attr('type') === "password") {
            $(passwordField).attr('type', 'text');
        } else {
            $(passwordField).attr('type', 'password');
        }
    });

    // button events
    backButton.on('click', () => {
        window.location.replace('../index.php');
    })

    signupButton.on('click', () => {
        // check that no fields are blank
        if (validateFields()) {
            // create array of field values
            let fieldValues = signupFields.map(x => $(x[0]).val());

            let url = "../server/signupNewUser.php?userEmail=" + fieldValues[0] + "&userName=" + fieldValues[1] + "&password=" + fieldValues[2];
            console.log(url);

            // ajax call
            $.ajax({
                url: url,
                type: "POST",
                datatype: 'json',
                success: ajaxSuccess
            })
        }
    })
})