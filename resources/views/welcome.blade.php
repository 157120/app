
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
</html>
