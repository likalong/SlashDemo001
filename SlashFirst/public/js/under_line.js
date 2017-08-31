/**
 * Created by htpp royal on 08/28/2017.
 */
console.log("hello");
$(document).ready(function() {
    $("#aboutus,#product").on('focus', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body, #about-section,#product-section').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    });
});

$(document).ready(function(){
    $("#menu li a").click(function(){
        console.log($('#menu li a'));
        $("a").each(function(){
            $('a').removeClass('focus');
        });
        $(this).addClass('focus');

    });
});
