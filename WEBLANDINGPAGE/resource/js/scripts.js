$(document).ready(
   function(){
       /*------ stiky-------*/
     $('.about-section').waypoint(
         function(direction){
             if(direction == "down"){
                $('nav').addClass('sticky');
             }else{
                $('nav').removeClass('sticky');
             }
            },{offset :'300px'
        }
     )
     $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
    /*-------mobile-nav-icon----------*/
    $('.mobile-nav-icon').click(
       function(){
         //  $('.main-row').slideToggle(200);
       
          if($('.mobile-nav-icon').hasClass('fa-bars'))
          {
            $('a').addClass('menu');
             $('.mobile-nav-icon').addClass('fa-times');
             $('.mobile-nav-icon').removeClass('fa-bars')
          }
          else{
            $('a').addClass('menu');
            $('.mobile-nav-icon').addClass('fa-bars');
            $('.mobile-nav-icon').removeClass('fa-times')
          }
       }
    )
   }
)