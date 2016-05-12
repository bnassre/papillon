$(document).ready(function() {
    
    $('.services .item button').click(function() {
        
        var item = $(this).closest('.item');
        
        $('.overlay').find('img').attr('src', item.find('img').attr('src'));
        $('.overlay').find('h3').html(item.find('h3').html());
        $('.overlay').find('span').html(item.find('p').html());
        $('.overlay').find('p').html(item.find('.description').val());
        
        $('.overlay').slideDown(400);
    });
    
    $('.overlay .close').click(function() {
        $('.overlay').slideUp(400);
    });
    
});