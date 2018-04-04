$(document).ready(function(){

    
    $(".menu_icon,.navbar").hover(
        function () {
            $(".navbar").addClass("shown");
        },
        function () {
            $(".navbar").removeClass("shown");
        }
    );


    //scroll function
	$("#link_showme,#link_gallery").click(function(){ //scroll_top function home to box2
		$path=$("#box2").offset().top;
		$('html,body').animate({scrollTop:$path},1000);
	});


	$("#link_home").click(function(){
		$('html,body').animate({scrollTop:'0px'},1000); //scroll_top from box2 to home
	});

	$("#contact_us").click(function(){ //scroll_top function home to box2
		$path=$("#box3").offset().top;
		
		$('html,body').animate({scrollTop:$path},1000);
	}); 


	$("#about_us").click(function(){ //scroll_top function home to box2
		$path=$("#box4").offset().top;
		
		$('html,body').animate({scrollTop:$path},1000);
	}); 
	
    




//function to highlight current-page
	/*$("li a").click(function(){
	 
		$('li').removeClass('active');
		$('#link_gallery').parent().removeClass('active');		
		$(this).parent().addClass('active');

	});


	$("#link_showme").click(function(){
        $(' li ').removeClass('active');
		$('#link_gallery').parent().addClass('active');
	});

	*/
	$("li a").click(function(){
	 
		$('li').removeClass('active');
			
		$(this).parent().addClass('active');

	});


	$("#link_showme").click(function(){
        $(' li ').removeClass('active');
		$('#link_gallery').parent().addClass('active');
	});


});


