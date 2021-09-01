
$(document).ready(function(){

	 $('#toggle').click(function(){
	 	
        $('#sbar').slideToggle('slow')

    });

	

    $('#toggle').mouseenter(function(){  //click, dblclick also can use, mouseenter , 
            /*alert('you click on image');*/
        $(this).css({
            'transform':'scale(2,2)',
            'transition':'0.5s ease'
        });
    });
       
    $('#toggle').mouseout(function(){  //click, dblclick also can use, mouseenter , 
        /*alert('you click on image');*/
    $(this).css({
        'transform':'scale(1,1)',
        'transition':'0.5s ease'
    });
    $(this).Toggle('slow'); 


    // img code 
//         $('img').mouseenter(function(){  //click, dblclick also can use, mouseenter , 
//             /*alert('you click on image');*/
//         $(this).css({
//             'transform':'scale(2,2)',
//             'transition':'0.5s ease'
//         });
//     });
       
//     $('img').mouseout(function(){  //click, dblclick also can use, mouseenter 
//     $(this).css({
//         'transform':'scale(1,1)',
//         'transition':'0.5s ease'
//     });
//     $(this).Toggle('slow');   
// });


      
});

// code statement goes here 
	
			/*$('header').show('slow');*/

// $('img').mouseenter(function(){ // mouseenter (), dblclick(fun), 
    
	
// $('img').css(function(){
	
// 			'transiction': 'scale(2,2)',
// 				'transform':'0.5s ease'
// })

//=============== show hide code ==================
// $('#hide').click(function(){
	
// 	$('.mypara1').hide();
// })

// $('#Showpara').click(function(){
	
// 	$('.mypara1').show('slow');
// 	$('.mypara1').toggle();

// })

//=============== show hide code  end ==================

$(document).ready(function () {
 $(".button").click(function(){
     $("#text" + $(this).attr('t')).toggle();
 }); 
});





});