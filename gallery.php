<?php
    
    include "includes/header.php";
    include "includes/nav.php";

?>

<style>
   
    #aboutdiv{
        background: url(image/grouppic.jpeg);
        opacity: 0.8;
        background-size: cover;
        background-attachment: fixed;
        height: 70vh;
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
    
    .gallerycontainer{
        padding: 50px 0 15px 0;
        margin-left: 10%;
    }
    
    @media only screen and (max-width: 600px){
        .gallerycontainer{
            margin-left: 30%;
        }
        #aboutdiv{
            background-position: 0px;
            height: 45vh;
            background-attachment: scroll;
        }
    }
    
    
    
</style>

    <div id="aboutdiv">
        <div class="center">
            <h1 class="center black-text" id="AboutAutobit">Gallery of Autobit</h1>
        </div>
    </div>


    <div class="back">
        <div class="gallerycontainer">
            <div class="row">
                
                <?php
                    
                $dir = "image/gallery/";
                $files = scandir($dir);
                    if($files)
                    {
                ?>
        
                <?php
                    
                        for($i=2;$i<sizeof($files);$i++)
                        {
                ?>
                <div class="col l4 m6 s12">
                    <img src="image/gallery/<?php echo $files[$i];?>" class="responsive-img materialbox">
                </div>
                
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>
    
                <!--------------FOOTER--------------->
    <?php

    include "includes/footer.php";

    ?>
    
    
        
    
    
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(5) a').addClass('navclick');
        });
        
    </script>
    
<?php    
    
    include "includes/js_footer.php";
    
?>