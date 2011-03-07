$(document).ready( function() {
    $('.htmlarea').ckeditor();

    $('.tabs').bind('tabsshow', function(event,ui) {
      $('.htmlarea').ckeditor();
    });
  }
);
