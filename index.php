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
            <div class="login-logo-container">
                <img class="logo" src="images/tempLogo.svg" alt="">
            </div>

            <span class="login-brand-name">Brand Name</span>

            <input class="login-text-field" placeholder="Username">

            <input type="password" class="login-text-field" placeholder="Password">

            <div id ="login" class="login-button">
                <div class="login-button-inner">
                    Login
                </div>
            </div>

            <span class="login-small-text">Forgot your password?</span>

            <span class="login-small-text login-small-text-signup">Dont have an account?</span>

            <div id="signup" class="login-button">
                    Signup
            </div>

            <div class="login-footer">Socials go here</div>

        </div>
    </div>
</body>

</html>