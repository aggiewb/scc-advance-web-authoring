(function($){$(document).ready(function(){

$('nav > ul').prepend('<li class=\"mobile\"><a href=\"#\"><span>Menu <i>&#9776;</i></span></a></li>');

$('nav > ul > li > a').click(function(e){
  $('nav li').removeClass('active');
  $(this).closest('li').addClass('active');	
  
  const checkElement = $(this).next();
  
  if((checkElement.is('ul')) && (checkElement.is(':visible'))){
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }

  if((checkElement.is('ul')) && (!checkElement.is(':visible'))){
    $('nav ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }

  if($(this).parent().hasClass('mobile')){
    e.preventDefault();
    $('nav').toggleClass('expand');
  }
  
  return ($(this).closest('li').find('ul').children().length === 0);	
});

});
})(jQuery);