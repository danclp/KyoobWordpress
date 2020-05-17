jQuery(document).ready(function($) {
    // Counter
    $('.approach-result_num span').counterUp({
        delay: 10,
        time: 1000
    });

    // Tool Tips
    var toolt = $('.director-name');

    if( $(window).width() < 980 ) {
        toolt.qtip('destroy', true);
    } else {
        toolt.each(function() {
            $(this).qtip({
                // show: 'click',
                // hide: 'click unfocus',
                content: {
                    text: $(this).next('div')
                },
                style: {
                    classes: 'qtip-bootstrap'
                },
                position: {
                    my: 'top center',
                    at: 'center center',
                    target: 'mouse'
                }
            });
        });
    }
    
    // To replace IMG inside carousel with background image
    if( $(window).width() >= 980  ) {
        var people = $('.people img');
        people.each(function() {
            var imgSrc = $(this).attr('src');
            $(this).parent().css({
                'background-image': 'url('+imgSrc+')'
            });
            $(this).remove();
        });
    } else {
        $(this).parent().removeAttr('style');
        $(this).append();
    }
    
    // Resize and Do the same thing
    // To replace IMG inside carousel with background image
    $(window).on('resize', function() {
        if( $(window).width() >= 980  ) {
            var people = $('.people img');
            people.each(function() {
                var imgSrc = $(this).attr('src');
                $(this).parent().css({
                    'background-image': 'url('+imgSrc+')'
                });
                $(this).remove();
            });
        } else {
            $(this).parent().removeAttr('style');
            $(this).append();
        }
    });
});