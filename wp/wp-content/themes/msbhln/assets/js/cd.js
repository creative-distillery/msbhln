jQuery(document).ready(function($) {

  $('li.nav-item > a').addClass('nav-link');
  $('#quick_links_wrapper > ul').addClass('list-unstyled');

  $('.navbar-toggler').click(function() {
    $('.navbar-toggler').toggleClass('open-menu');
  });
});
