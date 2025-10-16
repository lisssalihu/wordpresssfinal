jQuery(document).ready(function($) {
  console.log("Tema Malet e Kosovës është aktiv!");

  // Smooth scrolling për anchor links
  $('a[href*="#"]').on('click', function(e) {
    var target = $(this.hash);
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 500, 'linear');
    }
  });
});
