(function ($, root, undefined) {
    $(function () {
        'use strict';

        $('.window-trigger').click(function(){
          $('.window').css({
            // 'display': 'flex',
            'opacity': '1',
            'visibility': 'visible'
          });
          return false;
        });

        $('#close-trigger').click(function(){
          $('.window').css({
            'opacity': '0',
            // 'display': 'none',
            'visibility': 'hidden'
          });
        });
    });
})(jQuery, this);
