



$( ".menu-btn" ).mouseenter(function() {
    $( "#active:checked ~ .wrapper" ).show();

   
   
    
   });   


   


$( ".wrapper" ).click(function() {
    $( "#active:checked ~ .wrapper" ).hide();

    $( "#active:checked ~ .menu-btn" ).css('color','#e95d14');

    // $( " .wrapper ul li a" ).css('background','#000');
   
    // $( "#show-icon" ).addClass("fas fa-bars");

   });   
  
  
  