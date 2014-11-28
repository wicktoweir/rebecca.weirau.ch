$(document).ready(function() {
	$('.orange_box').click(function() {
		$('.orange_box').hide();
		$('.green_box').show();	
	});
	$('.green_box').click(function() {
		$('.green_box').hide();
		$('.orange_box').show();
	});
	$('#red').mouseenter(function() {
       $('#red').css({
            background: '#FF0600' 
       });
   });
    $('#yellow').mouseenter(function() {
       $('#yellow').css({
            background: '#F6FF00' 
       });
    });   
    $('#green').mouseenter(function() {   
       $('#green').css({
            background: '#42FF00' 
       });
   });
   $('#yellow').mouseleave(function() {
       $(this).css({
            background: '#494801'
       });
   });
   $('#green').mouseleave(function() {
       $(this).css({
            background: '#062901'
       });
   }); 
   $('#red').mouseleave(function() {
       $(this).css({
            background: '#370101'
       });
   });
   $('#red2').mouseenter(function() {
       $('#red2').css({
            background: '#FF0600' 
       });
   });
    $('#yellow2').mouseenter(function() {
       $('#yellow2').css({
            background: '#F6FF00' 
       });
    });   
    $('#green2').mouseenter(function() {   
       $('#green2').css({
            background: '#42FF00' 
       });
   });
   $('#yellow2').mouseleave(function() {
       $(this).css({
            background: '#494801'
       });
   });
   $('#green2').mouseleave(function() {
       $(this).css({
            background: '#062901'
       });
   }); 
   $('#red2').mouseleave(function() {
       $(this).css({
            background: '#370101'
       });
   });
   $('#drop_down').hide();
   $('#above_drop_down').click(function() {
		$('#drop_down').slideDown('slow');
	});	
	$('#drop_menu').mouseleave(function() {	
		$('#drop_down').slideUp('slow');
   });
   $('#drop_down2').hide();
   $('#above_drop_down2').click(function() {
		$('#drop_down2').slideDown('slow');
	});	
	$('#drop_menu2').mouseleave(function() {	
		$('#drop_down2').slideUp('slow');
   });
});

