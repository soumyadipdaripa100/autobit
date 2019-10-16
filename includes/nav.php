
<style>

    .sidenav{
        width: 280px;
        -webkit-width: 280px;
        -moz-width: 280px;
        -o-width: 280px;
        -ms-width: 280px;
    }
    
    .brand-logo{
        font-family: 'Monoton';
    }
    
    li a:hover{
        border-bottom: 1px solid yellow;
    }
    li a{
        font-family: 'Abril+Fatface';
    }
    .navclick{
        border-bottom: 1px solid yellow;
        color: yellow;
    }
    img{
        margin-top: 5%;
        height: 60%;
        -webkit-height: 60%;
        -moz-height: 60%;
        -ms-height: 60%;
        -o-height: 60%;
        width: 60%;
        -webkit-width: 60%;
        -moz-width: 60%;
        -o-width: 60%;
        -ms-width: 60%;
    }
    
    #side-nav li{
        margin-top: 10px;
    }
    
    #side-nav li{
        transform: translate3d(-105%,0,0);
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        -ms-transition: 1s;
        -o-transition: 1s;
    }
    
    #side-nav li:nth-child(1){
        transition-delay: 0s;
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        -ms-transition-delay: 0s;
    }
    #side-nav li:nth-child(2){
        transition-delay: 0.1s;
        -webkit-transition-delay: 0.1s;
        -moz-transition-delay: 0.1s;
        -o-transition-delay: 0.1s;
        -ms-transition-delay: 0.1s;
    }
    #side-nav li:nth-child(3){
        transition-delay: 0.2s;
        -webkit-transition-delay: 0.2s;
        -moz-transition-delay: 0.2s;
        -o-transition-delay: 0.2s;
        -ms-transition-delay: 0.2s;
    }
    #side-nav li:nth-child(4){
        transition-delay: 0.3s;
        -webkit-transition-delay: 0.3s;
        -moz-transition-delay: 0.3s;
        -o-transition-delay: 0.3s;
        -ms-transition-delay: 0.3s;
    }
    #side-nav li:nth-child(5){
        transition-delay: 0.4s;
        -webkit-transition-delay: 0.4s;
        -moz-transition-delay: 0.4s;
        -o-transition-delay: 0.4s;
        -ms-transition-delay: 0.4s;
    }
    #side-nav li:nth-child(6){
        transition-delay: 0.5s;
        -webkit-transition-delay: 0.5s;
        -moz-transition-delay: 0.5s;
        -o-transition-delay: 0.5s;
        -ms-transition-delay: 0.5s;
    }
    #side-nav li:nth-child(7){
        transition-delay: 0.6s;
        -webkit-transition-delay: 0.6s;
        -moz-transition-delay: 0.6s;
        -o-transition-delay: 0.6s;
        -ms-transition-delay: 0.6s;
    }
    #side-nav li:nth-child(8){
        transition-delay: 0.7s;
        -webkit-transition-delay: 0.7s;
        -moz-transition-delay: 0.7s;
        -o-transition-delay: 0.7s;
        -ms-transition-delay: 0.7s;
    }
    #side-nav li:nth-child(9){
        transition-delay: 0.8s;
        -webkit-transition-delay: 0.8s;
        -moz-transition-delay: 0.8s;
        -o-transition-delay: 0.8s;
        -ms-transition-delay: 0.8s;
    }
    #side-nav li:nth-child(10){
        transition-delay: 0.9s;
        -webkit-transition-delay: 0.9s;
        -moz-transition-delay: 0.9s;
        -o-transition-delay: 0.9s;
        -ms-transition-delay: 0.9s;
    }
    #side-nav li:nth-child(11){
        transition-delay: 1s;
        -webkit-transition-delay: 1s;
        -moz-transition-delay: 1s;
        -o-transition-delay: 1s;
        -ms-transition-delay: 1s;
    }
    
    #side-nav li.slide{
        transform: translate3d(0%,0,0);
    }
    
    #robotpng{
        margin-top: -15px;
        height: 128px;
        -webkit-height: 128px;
        -moz-height: 128px;
        -o-height: 128px;
        -ms-height: 128px;
        width: 110px;
        -webkit-width: 110px;
        -moz-width: 110px;
        -o-width: 110px;
        -ms-width: 110px;
    }
    
    nav,#side-nav{
        background: rgba(0,0,0,0.8);
    }
    /*
    #sidenavlogo{
        animation:  8s linear infinite;
    }
    
    @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }*/
    
</style>

<body>
    
    <div class="navbar-fixed">
        <nav class="">
            <div class="navbar-wrapper container">
                <a href="" class="brand-logo">Autobit</a>
                <a href="" class="sidenav-trigger left" data-target="side-nav"><i class="material-icons yellow-text">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" class="">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="achievements.php">Achievements</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="includes/registration.pdf" download>Registration Form</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <ul id="side-nav" class="sidenav center">
        <li><img id="sidenavlogo" src="image/Autobit Logo with border.png"></li>
        <hr>
        <li><a href="index.php" class="white-text"><i class="material-icons yellow-text">home</i>Home</a></li>
        <li><a href="about.php" class="white-text"><i class="material-icons yellow-text">account_circle</i>About</a></li>
        <li><a href="events.php" class="white-text"><i class="material-icons yellow-text">event</i>Events</a></li>
        <li><a href="team.php" class="white-text"><i class="material-icons yellow-text">group</i>Team</a></li>
        <li><a href="gallery.php" class="white-text"><i class="material-icons yellow-text">photo_library</i>Gallery</a></li>
        <li><a href="achievements.php" class="white-text"><i class="material-icons yellow-text">assignment</i>Achievements</a></li>
        <li><a href="contact.php" class="white-text"><i class="material-icons yellow-text">contacts</i>Contact us</a></li>
        <li><a href="registration.pdf" class="white-text" download><i class="material-icons yellow-text">web_asset</i>Registration Form</a></li>
        <li><a href="login.php" class="white-text"><i class="material-icons yellow-text">phone</i>Log in</a></li>
        <br><br>
        <img src="image/dnnnnnnnnnn.png" class="responsible-img" id="robotpng">
    </ul>
    
</body>