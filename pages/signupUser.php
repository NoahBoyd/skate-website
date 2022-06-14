<?php include "head.php" ?>
<script src="../script/signup.js"></script>
<body>
    <div class="login-container">
        <div class="inner-login-container">

            <div class="signup-back-button-container">
                <button class="signup-back-button">
                    <img class="back-button-image" src="../images/back-arrow.svg" alt="">
                </button>
            </div>
            
            <div class="signup-logo-container-outer">
                <div class="login-logo-container-inner">
                    <img class="logo" src="../images/tempLogo.svg" alt="">
                </div>
            </div>

            <div class="signup-fields">
                <span class="login-brand-name">Create Account</span>

                <input id="email-field" type="text" class="wide-text-field signup-text-field" placeholder="Email">

                <input id="username-field" type="text" class="wide-text-field signup-text-field" placeholder="Username">

                <div class="signup-inputs-password">
                    <input id="password-field" type="password" class="wide-text-field signup-text-field signup-password-field" placeholder="Password">
                    <img src="../images/eye.svg" alt="" class="show-password">
                </div>
                
                <div class="signup-inputs-password">
                    <input id="confirm-field" type="password" class="wide-text-field signup-text-field signup-password-field" placeholder="Confirm Password">
                    <img src="../images/eye.svg" alt="" class="show-password">
                </div>

                <span class="error-text">Error</span>

                <div id="signup" class="wide-button">
                    <div class="wide-button-inner">
                        Sign up
                    </div>
                </div>
            </div>

            <div class="socials-footer">
                <img class="social-button" src="../images/twitter.svg" alt="">
                <img class="social-button" src="../images/instagram.svg" alt="">
                <img class="social-button" src="../images/facebook.svg" alt="">
                <img class="social-button" src="../images/linkedin.svg" alt="">
            </div>

        </div>
    </div>
</body>

</html>