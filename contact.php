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

    .headings{
        font-family: 'Abril Fatface', cursive;
        font-weight: 900;
        position: absolute;
    }
    
    .contactdiv{
        background: url(image/giphy.gif);
        background-size: cover;
        background-attachment: fixed;
        background-blend-mode: darken;
    }
    
    .contact{
        height: 20vh;
        width: auto;
        opacity: 0.9;
        align-items: center;
        justify-content: center;
    }
    
    .contact a i{
        padding-top: 7%;
    }
    
    .contact a i:hover{
        cursor: grab;
        color: yellow;
    }
    
    h4{
        font-family: 'Pacifico';
    }
    
    .mail{
        padding-left: 5%;
        text-decoration: underline;
        font-weight: 500;
        font-size: 1.5rem;
        font-family: 'Philosopher';
        color: crimson;
    }
    
    .mail:hover{
        color: blue;
        text-decoration: line-through;
        cursor: pointer;
    }
    
                /*For Mobile*/
    @media only screen and (max-width: 600px){
        #aboutdiv{
            background-position: 0px;
            height: 45vh;
            background-attachment: scroll;
        }
        .headings{
            font-size: 2rem;
            padding-left: 15px;
        }
    }
    

</style>

    
    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">Contacts</h1>
        </div>
    </div>
    <div class="back">
        <div class="row">
            <div class="col l1 m1 s1">
                <i class="material-icons icons white-text large">ac_unit</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h3 class="headings white-text" data-scroll>Find <span class="yellow-text">Our</span> College</h3>
            </div>
        </div>

        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d921.3841461860576!2d88.46060847853421!3d22.521563775750472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0274a1c0115249%3A0x975599390971e184!2sBengal+Institute+Of+Technology!5e0!3m2!1sen!2sin!4v1553233308168" width="100%" height="450" frameborder="0" style="border:2px black solid" allowfullscreen data-scroll></iframe>
        </div>
    </div>

    <div class="row contactdiv">
        
        <div class="col l4 s12 m4 black center contact">
            <a href="https://www.facebook.com/autobit2017/" target="null"><i class="fab fa-facebook-square medium"></i></a>
        </div>
        <div class="col l4 s12 m4 yellow contact">
            <h4 class="black-text">Sent mail to:</h4>
            <a href="mailto:autobit.bitkol@gmail.com" target="null" class="mail">autobit.bitkol@gmail.com</a>
        </div>
        <div class="col l4 s12 m4 black contact center">
            <a href="https://discord.gg/9MhF8wy" target="null"><i class="fab fa-discord medium"></i><br>Click to join Discord</a>
            
        </div>
        
    </div>
    
                <!--------------FOOTER--------------->
    <?php

    include "includes/footer.php";

    ?>
    
    
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(7) a').addClass('navclick');
        });
    </script>
    

<?php    
    
    include "includes/js_footer.php";
    
?>
    

