$(document).ready(function(){

    // scroll to top
    var scrollLink = $(".scroll");

        scrollLink.click(function(e){
            e.preventDefault();
            $("body, html").animate({
                scrollTop: $(this.hash).offset().top
            },2000)
        });

        // read more functionality

        $('.nav-toggle').click(function () {
            var collapse_content_selector = $(this).attr('href');
            var toggle_switch = $(this);
            $(collapse_content_selector).toggle(function () {
                if ($(this).css('display') == 'none') {
                    toggle_switch.html('Read More');
                } else {
                    toggle_switch.html('Read Less');
                }
            });
        });


        // iostope filtering Portofolio
        var $grid = $(".grid").isotope({
            itemSelector:'.grid-item',
            filter: '.example',
            layoutMode:'fitRows'
        });

        //filtering items on bottom click and activating

        $(".button-group").on("click", "button", function(){
            $(".button-group button").removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr("data-filter");
            $grid.isotope({
                filter: filterValue
            });
        });


       // sidebar menu adding active class
        // $("#sidebarMenu").on("click", "li", function() {
        //     $(".list-group li.active").removeClass("active");
        //     $(this).addClass("active");
        //     });
});
