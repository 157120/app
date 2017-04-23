
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
     


 //blokowanie dodawania artykułów


 $('#title_id').on('keyup', function(){
         var name = $('#title_id').val();
         console.log(name);
         if 
         (name.length === 0){
             $('button[type=submit]').attr('disabled', 'true');
         }
         else if(name.length > 0){
             $('button[type=submit]').removeAttr('disabled');
            
         }
 });
