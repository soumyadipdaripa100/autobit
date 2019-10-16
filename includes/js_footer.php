
    <script src="js/materialize.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $('.sidenav-trigger').click(function(){
                $('.sidenav').sidenav();
                $('#side-nav li').addClass('slide');
            });
            
            $('.sidenav').click(function(){
                /*$('#side-nav li').removeClass('slide');*/
                /*$(this).css('transform','translateX(-105%)');*/
            });
            
            $('nav li a').click(function(){
                $('nav li a').removeClass('navclick');
                $(this).addClass('navclick');
            });
            
            $('.materialbox').materialbox();
            
        });
        
    </script>
    <script src="particle_effect/particles.js"></script>
    <script src="particle_effect/app.js"></script>

    <script>
    
        ScrollOut({
            threshold: .5
            //once: true
        });
    
    </script>
