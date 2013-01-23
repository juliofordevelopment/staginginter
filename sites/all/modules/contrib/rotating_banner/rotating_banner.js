// $Id: rotating_banner.js,v 1.8 2010/04/23 17:40:07 jameselliott Exp $

(function ($) {
  Drupal.behaviors.rotatingBanner = {
    attach: function (context) {
      $('.rotating-banner').once('jCycleActivated', function() {
        var settings = Drupal.settings.rotatingBanners[this.id].cycle;
        if ($.fn.cycle == undefined) {
          alert('Jquery Cycle is not installed.  See the README.txt');
          return;
        }
        // This should probably be moved into a change to the form in rotating_banner.module
        settings.pager = "#" + this.id + " .controls";
        settings.fit = 1;
				
        $('.rb-slides', this).cycle(settings);
      });
    }
  };
})(jQuery);
