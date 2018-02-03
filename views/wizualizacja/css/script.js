
        $(document).ready(function(){
    $("#oknobttn").click(function(){
    $("#oknod").hide(); 
    $("#colorod").hide();    
    $("#okno").show();
    $("#coloro").show();
   });
});

  
        $(document).ready(function(){
    $("#oknodbttn").click(function(){
    $("#okno").hide();
    $("#coloro").hide();
    $("#oknod").show();
    $("#colorod").show();
   });
});       

    
          
        $(document).ready(function(){
    $("#roletybttn").click(function(){
     $("#proleta").toggle();
    $("#lroleta").toggle();    
   });
});       

    
    
  
        $(document).ready(function(){
    $("#oknobttn1").click(function(){
    $("#oknod").hide(); 
    $("#colorod1").hide();    
    $("#okno").show();
    $("#coloro1").show();
   });
});

  
 
        $(document).ready(function(){
    $("#oknodbttn1").click(function(){
      $("#coloro1").hide();
    $("#okno").hide();
    $("#oknod").show();
    $("#colorod1").show();
   });
});       

    
           
        $(document).ready(function(){
    $("#roletybttn1").click(function(){
     $("#proleta").toggle();
    $("#lroleta").toggle();    
   });
}); 

       
        $(document).ready(function(){
    $("#drzwibttn").click(function(){
    $("#drzwid").hide(); 
    $("#colordd").hide();    
    $("#drzwi").show();
    $("#colord").show();    
   });
});
  

       
        $(document).ready(function(){
    $("#drzwidbttn").click(function(){
    $("#drzwid").show(); 
    $("#colordd").show();
    $("#drzwi").hide();
    $("#colord").hide(); 
   });
});
   
  
              
        $(document).ready(function(){
    $("#drzwibttn1").click(function(){
    $("#drzwid").hide(); 
    $("#colordd").hide();    
    $("#drzwi").show();
    $("#colord").show();    
   });
});


  
        $(document).ready(function(){
    $("#drzwidbttn1").click(function(){
     $("#drzwid").show(); 
    $("#colordd").show();
    $("#drzwi").hide();
    $("#colord").hide(); 
  
   });
});

$(window).on('resize load', function() {
  var win = $(this);
  if (win.width() < 1500) {

    $('h1').addClass('h1small');
    $('h2').addClass('h2small');

  } else {
    $('h1').removeClass('h1small');
    $('h2').removeClass('h2small');
  }
});

$(window).on('resize load', function() {
  var win = $(this);
  if (win.width() > 1300) {

    $('#spacetop').addClass('space-top');
 

  } else {
    $('#spacetop').removeClass('space-top');
  
  }
});

$(window).on('resize load', function() {
  var win = $(this);
  if (win.width() < 1024) {

    $('#spacetop').addClass('space-top-minus');
 

  } else {
    $('#spacetop').removeClass('space-top-minus');
  
  }
});
