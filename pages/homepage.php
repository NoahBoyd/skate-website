<?php include "head.php" ?>
<script src="../script/homepage.js"></script>
<body id="homepageBody">
    <div class="pageBody">
    <label>
        <input type="checkbox" class="hamburger-button-checkbox">
        <div class="toggle">
            <span class="top_bar common"></span>
            <span class="middle_bar common"></span>
            <span class="bottom_bar common"></span>
        </div>
        <div class="slide">
            <h1 class="slide-title">Menu</h1>
            <ul class="slide-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Skate</a></li>
                <li><a href="#">Friends</a></li>
            </ul>
        </div>
    </label>

    <div class="header-searchbar">
        <input class="searchbar" type="text" placeholder="Search...">
    </div>
    
    <div class="profile">
        <div class="profile-button circle">
        </div>
    </div>
    <div class="profileMenu profileMenuHidden">
        <div class="triangle-up"></div>
        <div class="profileMenuPicture circle"></div>
        <span class="profileMenuUsername">Username</span>
        <div class="profileMenuOptions">
            <ul class="profileMenuUl">
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</body>

</html>