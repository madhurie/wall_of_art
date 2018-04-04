$(document).ready(function(){

 var url = window.location.href;
  var array = url.split('/');
  var lastelement = array[array.length-1];

  /*if(lastelement=="index.html#box2")
  {
      $('li ').removeClass('active');
        $('#link_gallery').parent().addClass('active');
  }
  else
  {   $('li ').removeClass('active');
        $('#link_home').parent().addClass('active');
  }*/
if(lastelement=="index.html#box1")
  {
      
        $('#link_home').parent().addClass('active');
  }
   });