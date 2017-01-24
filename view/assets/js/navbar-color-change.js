$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#Middle-content');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar').css('background-color', 'rgb(0,0,255)');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
});