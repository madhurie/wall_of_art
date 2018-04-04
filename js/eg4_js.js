 var count=1;
$(function(){ 
	var inWrap = $('.inner_wrapper');
	$('.prev').on('click',function(){

     document.getElementById("disp_next").style.visibility="visible"   
     count=count-1;
     if(count==1)
     { 
          document.getElementById("disp_prev").style.visibility="hidden"; 
     }    
     else
     {
         document.getElementById("disp_prev").style.visibility="visible";
     }


      inWrap.animate({left:'0%'},300,function(){
      inWrap.css('left','-100%');
   	$('.slide').first().before($('.slide').last());             
      });

	});

  
  

	$('.next').on('click',function(){

       document.getElementById("disp_prev").style.visibility="visible"; 
       count=count+1;
       if(count==6)
       {
         document.getElementById("disp_next").style.visibility="hidden";
       }
       else
       {
         document.getElementById("disp_next").style.visibility="visible";
       }


       inWrap.animate({left:'-200%'},300,function(){
   	inWrap.css('left','-100%');
   	$('.slide').last().after($('.slide').first()); 
      /*console.log(count);*/
         
      });

	});

})