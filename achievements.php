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
        
        .row{
            padding-top: 28px;
        }

        .card{
            border-radius: 10px;
        }
        
        .card:hover{
            box-shadow: 5px 5px 10px gray;
        }
        
        .card:hover .card-content{
            background-color: #ffffcc;
        }
        
        h4,h5{
            font-family: 'Abril Fatface', cursive;
        }
        h5{
            margin-top: -10px;
        }
        
        @media only screen and (max-width: 600px){
            #aboutdiv{
                background-position: 0px;
                height: 45vh;
                background-attachment: scroll;
            }
        }
        
        .btn{
            background: linear-gradient(to top right,#cccc00,yellow)
        }

    </style>
    
    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">Achievements of Autobit</h1>
        </div>
    </div>

                    <!---------MODAL CARD SIH------>

    <div class="row back">
        <div class="col l4 m4 s10 offset-l4 offset-m4 offset-s1">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="image/Sih1.jpeg" alt="SIH">
                </div>
                <div class="card-content center">
                    <h5>Smart India Hackathon</h5>
                    <p style="font-weight: bold;">(1st Runner-up)</p>
                    <br>
                    <a class="btn waves-effect waves-yellow black-text modal-trigger" href="#modal1">Read More</a>
                </div>
            </div>
        </div>
    </div>
                    
                        <!--    MODAL1    SIH  -->        
    
    <div id="modal1" class="modal">
        <div class="modal-content center">
            <h4 class="center">Smart India Hackathon</h4>
            <img src="image/sih2.jpeg" class="center">
            <p>We are taking the pleasure to let you know the grand finale result of #SIH19 Hardware Edition..
        The team #Innoware@BIT has won the #2nd position (differing only 0.5 from the winning team).<br>
        They have   spent 5 sleepless days and fought really hard against the much senior(Mtech, phd) student team. We are really really proud of the (2nd yr ECE - CS) team mentored by Prof Jyoti Sekhar Banerjee & Mr Siddhartha Sinha (Johnson control).<br>
        Heartiest Congratulations to the entire team Sagnick Biswas(Team Leader), Sayantika Dutta, Rohit Roy, Ravi Ranjan, Sayak Saha, Prodyumna Chatterjee.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat red white-text">Close</a>
        </div>
    </div>
    
                <!--------------FOOTER--------------->
    
    <?php

    include "includes/footer.php";

    ?>
    
    
    


    <script>
        $(document).ready(function(){
            $('nav li:nth-child(6) a').addClass('navclick');
            $('.modal').modal();
        });
    </script>
    
    
    
<?php    
    
    include "includes/js_footer.php";
    
?>
    