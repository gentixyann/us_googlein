$(window).resize(function(){
    var w = $(window).width();
    var x = 500;
    if (w <= x) {
        $('.').hide();
    } else {
         $('.').show();
    }
});