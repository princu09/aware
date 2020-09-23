// Create By : Prince Patel
// Company: NorthFoxGroup
// Developers Team: NF Web Developers
// Twitter Profile: @NorthFoxGroup
// Coder Twitter Profile: @Princu09

$(function() {

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });

});