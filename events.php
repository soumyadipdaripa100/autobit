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
                    /*For Mobile*/
        @media only screen and (max-width: 600px){
            #aboutdiv{
                background-position: 0px;
                background-attachment: scroll;
                height: 45vh;
            }
            .headings{
                font-size: 2rem;
                padding-left: 15px;
            }
            iframe{
                height: 87vh;
                width: 100%;
            }
        }
        
        
    </style>
    
    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">Events of Autobit</h1>
        </div>
    </div>
    
    <div class="back">
        <div class="row">
            <div class="col l1 m1 s1">
                <i class="material-icons icons white-text large">ac_unit</i>
            </div>
            <div class="col l5 m8 s10 offset-m1 offset-s1">
                <h3 class="headings white-text" data-scroll>Calender</h3>
            </div>
        </div>
        <div class="container">
            <iframe src="https://calendar.google.com/calendar/b/1/embed?showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=autobit.bitkol%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FKolkata" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>

    </div>
    
    
                <!--------------FOOTER--------------->
    <br>
<?php

    include "includes/footer.php";

    ?>
    
    



    <script>
        $(document).ready(function(){
            $('nav li:nth-child(3) a').addClass('navclick');
        });
    </script>
    
    
    
<?php    
    
    include "includes/js_footer.php";
    
?>
    