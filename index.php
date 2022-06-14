<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script/index.js" defer></script>
</head>

<body>
    <div class="login-container">
        <div class="inner-login-container">

            <div class="login-logo-container-outer">
                <div class="login-logo-container-inner">
                    <img class="logo" src="images/tempLogo.svg" alt="">
                </div>
                <span class="login-brand-name">Brand Name</span>
            </div>


            <div class="login-inputs">
                <input id="username" class="wide-text-field" placeholder="Username">

                <div class="login-inputs-password">
                    <input id="password" type="password" class="wide-text-field" placeholder="Password">
                    <img src="images/eye.svg" alt="" class="show-password">
                </div>
                

                <span class="error-text">Error</span>

                <div id ="login" class="wide-button">
                    <div class="wide-button-inner">
                        Login
                    </div>
                </div>

                <span class="login-small-text">Forgot your password?</span>
            </div>

            <div class="login-signup">
                <span class="login-small-text login-small-text-signup">Dont have an account?</span>

                <div id="signup" class="wide-button">
                        Signup
                </div>
            </div>

            <div class="socials-footer">
                <img class="social-button" src="images/twitter.svg" alt="">
                <img class="social-button" src="images/instagram.svg" alt="">
                <img class="social-button" src="images/facebook.svg" alt="">
                <img class="social-button" src="images/linkedin.svg" alt="">
            </div>

        </div>
    </div>
</body>

</html>