<?php
    
    include "includes/header.php";
    include "includes/nav.php";

?>

<html>

    <style>
        
        .front{
            background-image: url(image/autobitbackground.jpg);
            background-size: cover;
            background-attachment: fixed;
            height: 91vh;
            -webkit-height: 91vh;
            -moz-height: 91vh;
            -o-height: 91vh;
            -ms-height: 91vh;
            opacity: 0.8;
            position: relative;
            padding-top: 40px;
            
        }
        
        .home{
            width: 95%;
            height: 80vh;
            -webkit-width: 95%;
            -webkit-height: 80vh;
            -o-width: 95%;
            -o-height: 80vh;
            -ms-width: 95%;
            -ms-height: 80vh;
            -moz-width: 95%;
            -moz-height: 80vh;
            box-shadow: -5px -5px 5px 2px #ffeb99;
            background-color: rgba(0,0,0,0.3);
        }
        
        #techno{
            height: 90px;
            -webkit-height: 90px;
            -moz-height: 90px;
            -o-height: 90px;
            -ms-height: 90px;
            width: 90px;
            -webkit-width: 90px;
            -moz-width: 90px;
            -o-width: 90px;
            -ms-width: 90px;
            border-radius: 50%;
            position: absolute;
            margin-top: -2%;
            margin-left: 40%;
        }
        
        #bit{
            height: 90px;
            width: 90px;
            border-radius: 50%;
            position: absolute;
            margin-top: -2%;
        }
        
        #logo{
            margin-top: 50%;
            transform: translateY(-40%);
            height: 90%;
            width: 90%;
        }
        
        h1{
            font-size: 10vh;
            font-family: 'Lilita One', cursive;
            animation: shadow 5s ease-in-out infinite;
        }
        
        h3{
            text-shadow: 0 0 10px yellow,
                        0 0 20px yellow;
            font-family: 'Roboto Slab', serif;
        }
        
        h4{
            font-family: 'Spirax';
        }
        h5{
            font-family: sans-serif;
        }
        @keyframes shadow
        {
            0%,100%{
                text-shadow: 5px 3px 5px white;
            }
            25%{
                text-shadow: 5px -3px 5px yellow;
            }
            50%{
                text-shadow: -5px -3px 5px white;
            }
            75%{
                text-shadow: -5px 3px 5px yellow;
            }
        }
        
        #subtitle{
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            border-left: 3px white solid;
            transform: skewY(0deg);
        }
                    /*For Mobile*/
        @media only screen and (max-width: 600px){
            
            .front{
                height: 110vh;
                background-position: 700px;
            }
            
            .row{
                height: 100vh;
                border-left: 0px;
            }
            
            #techno{
                margin-top: -4%;
                margin-left: 59%;
                height: 60px;
                width: 60px;
            }

            #bit{
                margin-top: -4%;
                margin-left: -13%;
                height: 60px;
                width: 60px;
            }
            
            #div2{
                margin-top: -60px;
            }
            
            #subtitle{
                margin-top: -15%;
            }
            
            h1{
                font-family: 'Lilita One', cursive;
                font-size: 6vh;
            }
            h4{
                font-size: 4vh;
                margin-top: -15px;
            }
            h3{
                font-size: 5vh;
            }
            h5{
                font-size: 2vh;
            }
        }
        /*
        @media only screen and (max-width: 768px){
            .front{
                height: 900vh;
                background-position: right;
            }
            
            .row{
                height: 70vh;
                border-left: 0px;
            }
            
            #subtitle{
                margin-top: 5px;
            }
            
            h1{
                font-size: 15px;
            }
            h4{
                font-size: 3vh;
                margin-top: -15px;
            }
            h3{
                font-size: 2vh;
            }*/
        
        
        *{
            padding: 0;
            margin: 0;
        }
        #preloader{
            margin: 0;
            padding: 0;
            align-items: center;
            height: 99vh;
            display: flex;
            justify-content: center;
            background-color: black;
        }
        #mainanimation{
            position: absolute;
            display: flex;
            width: 600px;
            height: 600px;
            align-items: center;
            justify-content: center;
            top: -15%;
            left: 29%;
            z-index: -1;
        }
        @keyframes rotate{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }

        #logop{
            margin-top: -5%;
            position: relative;
            align-items: center;
            justify-content: center;
        }
        #loadingText{
            color: yellow;
            animation: fade 3s infinite ease-in;
            font-family: 'Barriecito', cursive;
            font-size: 35px;
        }

        @keyframes fade{
            0%,100%{
                opacity: 1;
            }
            50%{
                opacity: 0;
            }
        }

        #img{
            height: 30%;
            width: 30%;
            z-index: 1;
            animation: rotate 8s infinite linear;
            box-shadow: 5px 0 10px gray;
        }
        
        
    </style>
    
<body>
    
    <!------preloader----------->
    
<div id="preloader" class="">
    <center>
        <div id="logop">
            <img id="img" src="image/Autobit%20Logo%20with%20border.png">
        </div>
        <br>
        <h2 id="loadingText">Loading,Please wait.....</h2>
    </center>
</div>
    
    <div class="main" style="display: none;">
        <div class="front" id="fron">
            <div class="row home">
                <div  class="col l6 s8 m5 offset-m1 offset-s2 left">
                    <img src="image/bit-logojpeg.jpg" id="bit">
                </div>
                <div  class="col l6 s8 m5 offset-m1 offset-s2">
                    <img src="image/220px-Techno_india_logo.jpg" id="techno">
                </div>
                <div class="col l4 s8 m5 offset-l1 offset-m1 offset-s2" id="div1">
                    <div id="logodiv" class="center">
                        <img src="image/Autobit Logo with border.png" class="responsible-img zoomIn animated delay-1.5s" id="logo">
                    </div>
                </div>
                <div class="col l6 s10 m5 offset-l1 offset-m1 offset-s1" id="div2">
                    <div id="subtitle" class="center">
                        <h1 class="yellow-text">Autobit</h1>
                        <br>
                        <h4 class="white-text">The Official Robotics Club of<br>Electronics and Communication Engineering Department</h4>
                        <h3 class="white-text">Bengal Institute of Technology</h3>
                    </div>
                </div>
            </div>
        </div>
        
                <!--------------FOOTER--------------->
    <?php

    include "includes/footer.php";

    ?>
    
    
        
    </div>
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(1) a, .sidenav li:nth-child(1) a').addClass('navclick');
        });
        
        $(window).on('load',function(){
            $('#preloader').css('display','none');
            $('.main').css('display','block');
        });
    </script>
    
    
    
<?php    
    
    include "includes/js_footer.php";
    
?>
    
</body>

</html>