$(document).ready(function() {
    
    var pause = false;
    
    setTimeout(function() {
        $('.dot').first('.slide').addClass('active');
        $('.slide').first('.slide').addClass('active');


        setInterval(function() {
            if(!pause) {
                var dot   = $('.dot.active');
                var slide = $('.slide.active');

                dot.removeClass('active');
                if(dot.next('.dot').index() == -1)
                $('.dot').first('.dot').addClass('active');
                else
                dot.next('.dot').addClass('active');    

                slide.removeClass('active');
                if(slide.next('.slide').index() == -1)
                $('.slide').first('.slide').addClass('active');
                else
                slide.next('.slide').addClass('active');
            }
        }, 6000);
    }, 1000);
    
    $('.dot').click(function() {
        $('.slide, .dot').removeClass('active');
        $(this).addClass('active');
        $('.slide-' + ($(this).index()+1)).addClass('active');
    });
    
    $('.navigation *').hover(function() {
        pause = true;
    }, function() {
        pause = false;
    });
    
});