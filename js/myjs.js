  $(document).ready(function(){

    $('#my-slider').carousel({
      interval: 5000,
      pause:"false",
      wrap:true
    });
  });

  $('#nav1').click(function(){ $('html,body').animate({  scrollTop:$('#my-skills').offset().top  }, 800);   }); 
  $('#nav2').click(function(){ $('html,body').animate({  scrollTop:$('#my-art1').offset().top  }, 800);   }); 
  $('#nav3').click(function(){ $('html,body').animate({  scrollTop:$('#my-art2').offset().top  }, 800);   }); 