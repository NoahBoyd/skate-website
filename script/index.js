window.addEventListener("load", function() {
    console.log('hello from index.js');
    // variables
    let indexSignupButton = $("#signup");
    let indexLoginButton = $("#login");
    let errorSpan = $('.error-text');
    let usernameField = [$('#username'), 'Username is invalid'];
    let passwordField = [$('#password'), 'Incorrect Password'];
    let showPasswordButton = $('.show-password');
    let loginFields = [usernameField, passwordField];

    // button click events
    indexSignupButton.on('click', function() {
        window.location.replace('pages/signupUser.php');
    });

    // function for show-password button to toggle password/text
    showPasswordButton.on('click', (e) => {
        console.log('show password');
        let passwordField = $(e.target).siblings()[0];
        $(e.target).toggleClass('show-password-active');
        if ($(passwordField).attr('type') === "password") {
            $(passwordField).attr('type', 'text');
        } else {
            $(passwordField).attr('type', 'password');
        }
    });

    // functions

    function checkEmptyFields() {
        let blankCount = 0;
        let error = "";
        // Check that each field is not empty, Set error if field is empty
        loginFields.forEach(field => {
            if ($(field[0]).val().length === 0) {
                error =  field[1];
                blankCount +=1;
            }
        });
        if (blankCount === 0) {
            hideError();
            return true;
        } else if (blankCount === 1) {
            showError(error);
        } else {
            showError("Incorrect Login");
        }
    }

    function verifyLoginDetails() {
            // create array of field values
            let fieldValues = loginFields.map(x => $(x[0]).val());

            let url = "./server/loginUser.php?username=" + fieldValues[0] + "&password=" + fieldValues[1];
            console.log(url);

            // ajax call
            $.ajax({
                url: url,
                type: "POST",
                datatype: 'json',
                success: ajaxSuccess
            })
    }

    function ajaxSuccess(result) {
        console.log(result);
    }

    // this function will show an error to the screen
    function showError(error) {
        $(errorSpan).text(error);
        $(errorSpan).css('display', 'block');
    }

    function hideError() {
        $(errorSpan).css('display', 'none');
    }

    indexLoginButton.on('click', () => {
        // check that no fields are empty
        if (checkEmptyFields()) {
            // call database to verify login information
            verifyLoginDetails();
        }

        // redirect to users homepage
    })
})