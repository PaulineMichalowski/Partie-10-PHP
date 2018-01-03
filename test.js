$('.nav li').click(function(){
  if (!$(this).hasClass('active')) {
    // Supression de la classe active et ajout de la classe sur le li séléctioné
    $('li.active').removeClass('active');
    $(this).addClass('active');
  }
});