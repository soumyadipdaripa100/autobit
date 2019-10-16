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
        
        #particles-js{
            background: black;
            height: 100vh;
            position: relative;
        }
        
        .about{
            height: 90vh;
            opacity: 0.7;
            position: absolute;
            top: 5vh;
        }
        
        .headings{
            font-family: 'Abril Fatface', cursive;
            font-weight: 900;
            position: absolute;
        }
        
        .paraautobit{
            font-size: 1.2em;
            font-family: 'Philosopher', serif;
            text-align: justify;
        }
                    /*For Mobile*/
        @media only screen and (max-width: 600px){
            #aboutdiv{
                background-position: 0px;
                background-attachment: scroll;
                height: 45vh;
            }
            #particles-js {
                min-height: 210vh;
            }
            .about{
                min-height: 200vh;
            }
            .headings{
                font-size: 2rem;
            }
        }
        
        
    </style>
    
    
    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">About Autobit</h1>
        </div>
    </div>
        
    <div id="particles-js">
        <div class="about yellow">
            <div class="row">
                <div class="col l1 m1 s1">
                    <i class="material-icons icons large" data-scroll>change_history</i>
                </div>
                <div class="col l5 m8 s10 offset-m1 offset-s1">
                    <h3 class="headings">What is Autobit?</h3>
                </div>
            </div>
            <div class="container">
                <p class="black-text paraautobit">Engineering, Technology and Innovation - these all are the relative terms in our modern society. To bring up such innovations and innovative minds in between the college premises and to do something interesting stuff and encourage the new innovative minds to thing something out of the box and beyond the bookish knowledge. AUTOBIT- The Official Robotics Club of Bengal Institute of Technology was found and maintained by the Department of Electronics and Communication. This technical club was formed by the former students of Dept. Of E.C.E. to ignite the young innovative minds of our nation to achieve the highest of technological development. This Tech Club was officially found on 5th of September, 2017. In the first year of it's formation, the club marked a notable mention of it's success at Bits2Bites and other colleges fests. Things didn't stop here, to continue the legacy the club achieved notable mentions at the State level, National and International level.
                    <br>
This club serves at it's best to glorify in the field of Robotics (manual and autonomous) and hands-on project development experience on various requirements of everyday life. The club also arranges various technical workshops throughout the year. This club comes 2nd in the state after IIT-Kharagpur in terms of it's achievements. India is a growing nation, and Technology is developing at every rising edge. Most of the modern technological developments involves the heterogeneity in it's complexity. The best part of this club lies in the collaboration with all the other streams and also in the union of hardware and software projects to depict the solution of any Real Time Project. It has now been an integral part of Bengal Institute of Technology, through its activities and achievements.</p>
            </div>
        </div>
    </div>
    
    <br>
                <!--------------FOOTER--------------->
    <?php

    include "includes/footer.php";

    ?>
    
    
    
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(2) a').addClass('navclick');
        });
    </script>
    

<?php    
    
    include "includes/js_footer.php";
    
?>
    