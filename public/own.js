
var bg=0;
     $('#global1').on('click', function () {
         if (bg === 0)
         {
           
             $('body').css('background', 'url("../NY.jpg") no-repeat fixed');
             $('body').css('background-size', 'cover')
             bg=1;
         }
         else
         {
            
             $('body').css('background', 'url("../summer.jpg") no-repeat fixed');
             $('body').css('background-size', 'cover')
             bg=0;
         }
     });