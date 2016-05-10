$(document).ready(function() {
    
    setInterval(function() {
       
        var active = $('.dot.active');
        
        active.removeClass('active');
        if(active.next().index() == -1)
        $('.dot').first().addClass('active');
        else
        active.next().addClass('active');    
        
    }, 6000);
    
});