<!doctype html>
<html>
    <head>
        <title>MiStery - London School of Fotography</title>
        <link rel="shortcut icon" href="images/favicon/apple-touch-icon.png">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{asset('own.js')}}" defer></script>
        
        <style type="text/css">

            /*BACGROUND&SCROLL*/
            *{
                margin: 0px;
                padding: 0px;
            }
            #image {
                position: relative;
                z-index: -1;
                padding: 50px;
            }
            #content {
                height: auto; 
                width: 100%;
/*                margin-top: 20px;*/
margin-bottom: 160px;
                position: relative;
                filter: alpha(opacity=90); 
                z-index: 1;
                background-attachment:fixed;
            }


            /*MEDIA SPOŁECZNOŚCIOWE:*/
            #nav_social {
                float: right;
                width: 40px;}   
       
            
            
              </style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

        <script type="text/javascript">
            //PARALLEX - SCROLL THE PAGE	
            var ypos, image;
            function parallex() {
                image = document.getElementById('content');
                ypos = window.pageYOffset;
                image.style.top = ypos * .7 + 'px';
            }
            window.addEventListener('scroll', parallex), false;
</script>
    </head>

    <body class="container-fluid">
<!-- <img id="image" src="../summer.jpg" height="100%" width="100%" />-->
        <div id="content">
<img id="image" src="../logo12.png" height="100%" width="70%" />
            <br><br><br>
            <!--SOCIAL MEDIA-->     
            <div id="nav_social"> 
                <a target="_blank" href="http://facebook.com"><img src="../facebook_32.png" alt="Become a fan" width="32" height="32"></a><br>
                <a target="_blank" href="http://twitter.com"><img src="../twitter_32.png" alt="Follows on Twitter"></a><br>
                <a target="_blank" href="http://linkedin.com"><img src="../linkedin_32.png" alt="Linked in"></a><br>
                <a target="_blank" href="http://vimeo.com"><img src="../vimeo_32.png" alt="Vimeo"></a><br>
                <a target="_blank" href="http://skype.com"><img src="../skype_32.png" alt="Skype"></a><br>
            </div>
            <!--/SOCIAL MEDIA--> 


        
        
        <div class="row">
            <div class="col-sm-2"></div>
            @include('menu')
            <div class="col-sm-2"></div>
           
        </div>
        
        <section class = "row">

            <div class="col-sm-2"></div>

            <div class="col-sm-8">
            <article class="main-section">@yield('content')</article>
            </div>
            
            <div class="col-sm-2"></div>

        </section>


     <b><button type="button" style="background: rgba(255, 255, 255, 0.5); filter: alpha(opacity=20); margin: 30px; " onclick="document.getElementById('demo').innerHTML = Date()">Click me to display Date and Time</button> <b id="demo" style="float: bottom"></b></b> 

  
      
    </body>
</html>
            
            
            
            
            
            

<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <script src="{{asset('own.js')}}" defer></script>
    </head>

    <body class="container-fluid">
        
        
        <button id="global1" type="button" class="btn btn-default btn-lg" >Hi!</button>
        
        
        <div class="row">
            <div class="col-sm-2"></div>
            @include('menu')
            <div class="col-sm-2"></div>
           
        </div>
        
        <section class = "row">

            <div class="col-sm-2"></div>

            <div class="col-sm-8">
            <article class="main-section">@yield('content')</article>
            </div>
            
            <div class="col-sm-2"></div>

        </section>


     
  
      
    </body>
</html>-->
