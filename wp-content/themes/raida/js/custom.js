function initMap() {
    var mapDiv = document.getElementById('map');
    var myLatLng = {lat: 54.679578, lng: 25.270735}

    var map = new google.maps.Map(mapDiv, {
        center: myLatLng,
        zoom: 16,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        streetViewControl: false
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: 'http://fritsystems.com/raida/wp-content/themes/raida/img/dot.fw.png'
    });
}
$(function(){

    $(".navbar-nav > li").click(function () {
        scroll_to_page($(this).find("a").attr("data-page"));
    });

    $(".dropdown-menu > li").click(function () {
        scroll_to_page($(this).find("a").attr("data-page"));
    });

    $('.carousel-inner').each(function() {
        if ($(this).children('div').length === 1) $(this).siblings('.carousel-control, .carousel-indicators').hide();
    });

    function scroll_to_page(page){
        $("html, body").animate({
            scrollTop: $("#" + page + "-block").offset().top
        }, 1000);
    }

});