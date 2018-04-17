jQuery(function ($) {


    $('.lvca-stats-bars').waypoint(function (direction) {

        $(this.element).find('.lvca-stats-bar-content').each(function () {

            var dataperc = $(this).attr('data-perc');
            $(this).animate({ "width": dataperc + "%"}, dataperc * 20);

        });

    }, { offset: Waypoint.viewportHeight() - 150,
        triggerOnce: true});


});