/* ==========================================================================
	 _mobileMenu.scss
	 ========================================================================== */

(function($){

  $(document).ready(function(){

    var $trigger      = $('#nav-trigger'),
        $menu         = $('#nav-menu'),
        activeClass   = 'is-active'

    $trigger.click(function(){

      // Toggle active state
      $( this ).toggleClass( activeClass );
      $menu.toggleClass( activeClass );

      // Make <body> unscrollable
      $('body').toggleClass( 'u-no-scroll' );

    });

  });

})(jQuery);