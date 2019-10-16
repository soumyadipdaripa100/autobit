<?php
    
    include "includes/header.php";
    include "includes/nav.php";

?>

    <style>
        
        
        #aboutdiv{
            background: url(image/grouppic.jpeg);
            background-size: cover;
            background-attachment: fixed;
            height: 70vh;
            opacity: 0.8;
            position: relative;
            padding-top: 40px;
            background-position: 0px;
        }
        
        #AboutAutobit{
            font-family: 'Unlock';
            position: relative;
            font-weight: 900;
            z-index: 10;
            animation: animate 1s infinite linear;
        }
        
        .headings{
            font-family: 'Abril Fatface', cursive;
            font-weight: 900;
            position: absolute;
        }
        
        @keyframes animate{
            0%,100%{
                transform: translateY(2%);
            }
            50%{
                transform: translateY(-2%);
            }
        }
        
        #AboutAutobit:before{
            content: '';
            height: 5%;
            width: 6%;
            background-color: black;
            position: absolute;
            top: 100%;
            left: 48%;
        }
        
        /*For Mobile*/
        @media only screen and (max-width: 600px){
            #aboutdiv{
                background-position: 0px;
                height: 45vh;
                background-attachment: scroll;
            }
            .about{
                height: 90vh;
            }
            .headings{
                font-size: 2rem;
            }
        }
        
        .card{
            border-radius: 20px;
            box-shadow: 10px 5px 10px gray;
            transition: 0.7s;
        }
        
        .card:hover{
            box-shadow: 2px 2px 10px gray;
            background-color: black;
        }
        
        .card:hover > .card-content h5{
            color: white;
        }
        
        .card:hover > .fblinkdiv{
            display: block;
        }
        
        .card-image{
            position: relative;
        }
        
        .card-image img{
            height: 380px;
            object-fit: cover;
            transition: 0.5s;
        }
        
        .card-image img:hover{
            filter: blur(1px);
        }

        .card-content h4{
            margin-top: -5px;
        }
        
        .fblinkdiv{
            background: rgba(0,0,0,0.5);
            top: 70%;
            position: absolute;
            display: none;
            width: 100%;
            height: auto;
        }
        
        h4,h5{
            font-family: 'Slabo';
        }
        
/*
        .Rishabcard:hover > .RishabFb{
            display: block;
        }
        
        .Sudeepcard:hover > .SudeepFb{
            display: block;
        }
        
        .Rishavcard:hover > .RishavFb{
            display: block;
        }
        
        .Supravacard:hover > .SupravaFb{
            display: block;
        }
*/
        .medium:hover{
            color: yellow;
            cursor: grabbing;
        }
        .members .card-content{
            height: 20%;
        }
        .members .fblinkdiv{
            top: 63%;
        }
        

    </style>

    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">Autobit Team</h1>
        </div>
    </div>


    <div class="membersdiv back">
        
        <div class="row">
            <div class="col l1 m1 s1">
                <i class="material-icons icons large white-text">bubble_chart</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h3 class="headings white-text" data-scroll>Meet <span class="yellow-text">The</span> Team</h3>
            </div>
        </div>
        <div class="row">
            <br>
            <div class="col l1 m1 s1 offset-l1">
                <i class="material-icons icons medium white-text">check_box_outline_blank</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h5 class="headings white-text" data-scroll>Founder Members</h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable Rishabcard">
                    <div class="card-image">
                        <img src="image/Rishab%20Mukherjee.png">
                    </div>
                    <span class="RishabFb fblinkdiv">
                        <a href=""><i class="fab fa-facebook-square small" target="null"></i></a>
                        <a href=""><i class="fab fa-linkedin medium right" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Rishab Mukherjee</h4>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable Sudeepcard">
                    <div class="card-image">
                        <img src="image/Sudeep%20Basu.jpg">
                    </div>
                    <span class="SudeepFb fblinkdiv">
                        <a href=""><i class="fab fa-facebook-square small" target="null"></i></a>
                        <a href=""><i class="fab fa-linkedin medium right" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Sudeep Basu</h4>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable Rishavcard">
                    <div class="card-image">
                        <img src="image/Rishav%20Ghosh.jpg">
                    </div> 
                    <span class="RishavFb fblinkdiv">
                        <a href=""><i class="fab fa-facebook-square small" target="null"></i></a>
                        <a href=""><i class="fab fa-linkedin medium right" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Rishav Ghosh</h4>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable Supravacard">
                    <div class="card-image">
                        <img src="image/Suprava%20Ghosh.jpg">
                    </div>
                    <span class="SupravaFb fblinkdiv">
                        <a href=""><i class="fab fa-facebook-square small" target="null"></i></a>
                        <a href=""><i class="fab fa-linkedin medium right" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Suprabha Ghosh</h4>
                    </div>
                </div>
            </div>
        </div>
        
                <!------commitee members------>
        
        <div class="row">
            <br>
            <div class="col l1 m1 s1 offset-l1">
                <i class="material-icons icons medium white-text">check_box_outline_blank</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h5 class="headings white-text" data-scroll>Commitee Members</h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/debarun.jpeg">
                    </div>
<!--
                    <span class="fblinkdiv center">
                        <a href=""><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
-->
                    <div class="card-content">
                        <h4 class="center yellow card-title">Debarun Chatterjee</h4>
                        <h5 class="center">(Secretary)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/">
                    </div>
<!--
                    <span class="fblinkdiv center">
                        <a href=""><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
-->
                    <div class="card-content">
                        <h4 class="center yellow card-title">Akanksha Singh</h4>
                        <h5 class="center">(Joint Secretary)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/rohit.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/profile.php?id=100008329244304"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Rohit Roy</h4>
                        <h5 class="center">(Joint Secretary)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m4 offset-m2 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/sagnick.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/sagnick.biswas.10"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Sagnick Biswas</h4>
                        <h5 class="center">(Admin)</h5>
                    </div>
                </div>
            </div>
            
                    <!-------------------------------------------------->
            
            <div class="col l3 m3 offset-l1 s8 offset-s2" style="margin-left: 80px;">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/sayan.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/sayan.hazra.587"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Sayan Hazra</h4>
                        <h5 class="center">(Admin)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 offset-m2 s8 offset-s2" style="margin-left: 80px;">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/jathartha.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/killua.zoldylock.1"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Jathartha Banerjee</h4>
                        <h5 class="center">(Admin)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 offset-m2 s8 offset-s2" style="margin-left: 80px;">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/ananya.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/ananya.mukherjee.23712"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Ananya Mukherjee</h4>
                        <h5 class="center">(Student Relationship)</h5>
                    </div>
                </div>
            </div>
            
                    <!-------------------------------------------------->
            
            
            <div class="col l3 m3 offset-m3 offset-l3 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/bishakha.jpeg">
                    </div>
                    <div class="card-content" style="height: 140px;">
                        <h4 class="center yellow card-title">Bishakha Saha</h4>
                        <h5 class="center">(Student Relationship)</h5>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s8 offset-s2">
                <div class="card hoverable members">
                    <div class="card-image">
                        <img src="image/utsav.jpeg">
                    </div>
                    <span class="fblinkdiv center">
                        <a href="https://www.facebook.com/utsavakash.naskar"><i class="fab fa-facebook-square medium" target="null"></i></a>
                    </span>
                    <div class="card-content" style="height: 140px;">
                        <h4 class="center yellow card-title">Utsav Akash Naskar</h4>
                        <h5 class="center">(Social Media Ambassador)</h5>
                    </div>
                </div>
            </div>
        </div>
            
                <!-------------------------------------------------->
            
                <!------Web developer------>
        
        <div class="row">
            <br>
            <div class="col l1 m1 s1 offset-l1">
                <i class="material-icons icons medium white-text">check_box_outline_blank</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h5 class="headings white-text" data-scroll>Web <span class="yellow-text">Developer</span> And <span class="yellow-text">Designer</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col l3 m3 s8 offset-s2 offset-l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="image/soumyadip.jpeg">
                    </div>
                    <span class="fblinkdiv">
                        <a href="http://facebook.com/soumyadip.daripa"><i class="fab fa-facebook-square small" target="null"></i></a>
                        <a href="https://www.linkedin.com/in/soumyadip-daripa-0454b6169"><i class="fab fa-linkedin medium right" target="null"></i></a>
                    </span>
                    <div class="card-content">
                        <h4 class="center yellow card-title">Soumyadip Daripa</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
                <!--------------FOOTER--------------->

    <?php

    include "includes/footer.php";

    ?>
    
    
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(4) a').addClass('navclick');
            
        });
    </script>
    

<?php    
    
    include "includes/js_footer.php";
    
?>
    

