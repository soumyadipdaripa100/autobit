<?php
    
    include "includes/header.php";
    include "includes/nav.php";

?>
    
    <style>
    
        #signup{
            display: none;
            margin-top: 0px;
        }
        #login{
            margin-top: 0px;
        }
        .row{
            margin-top: 20px;
        }
        #al{
            font-size: 2rem;
            font-weight: 900;
            font-stretch: expanded;
        }
    
    </style>
    
<body class="black">
    
    <div class="row black">
        <div class="col s12 m8 offset-m2 l6 offset-l3" style="margin-bottom: 0px;">
            <div class="card-panel center yellow z-depth-3">
                <ul class="tabs yellow">
                    <li class="tab">
                        <a href="#login" id="al" class="black-text">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col s12 m8 offset-m2 l6 offset-l3" id="login">
            <div class="card-panel center z-depth-5 hoverable">
                <form action="logincheck.php" method="post">
                    <br>
                    <input type="text" name="user" class="form-control" placeholder="Enter your username" required>
                    <br><br>
                    <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
                    <br><br>
                    <input type="submit" value="Login" name="login" class="btn waves-light waves-effect pulse yellow">
                </form>
            </div>
        </div>
    </div>

        
    <script>
        $(document).ready(function(){
            $('nav li:nth-child(9) a').addClass('navclick');
        });
    </script>
    
    
    
<?php    
    
    include "includes/js_footer.php";
    
?>
    
</body>
    
    
