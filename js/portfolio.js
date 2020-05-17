jQuery(document).ready(function($) {
    $(document.body).on('post-load', function() {
        var posts = $('.infinite-wrap article:not(.reveal)'),
            i = 0;

        setInterval(function() {
            if( 1 >= posts.length ) return false;

            var el = posts[i];
            $(el).addClass('reveal');

            i++
        }, 200);
    });
});