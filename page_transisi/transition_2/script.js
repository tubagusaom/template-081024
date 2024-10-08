$('.slide').on('click', function(){
  $('#fade-in').toggleClass('show');
});

$('.spin').on('click', function(){
  $('#spin-in').toggleClass('show2');
});

$('h1.spacing').on('mouseenter', function(){
$(this).toggleClass('spaced');
});