/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var map;

(function ($) {
    Drupal.behaviors.loadsitiomarker = {
        initialize_get_map: function (){
            var mapOptions = {
                zoom: 17,
                center: new google.maps.LatLng(4.668784,-74.053759)
              };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var locations = [
                ['Conosur Avenida Calle 82 Bogotá, 110221 Colombia', 4.668784,-74.053759, 1],
                ['Conosur 76 Calle 119 # 4 Bogotá, Colombia', 4.695377,-74.030254, 2],
                ['Cono Sur Carrera 9 Bogotá Colombia', 4.66422,-74.051528, 3]
            ];
            var marker, i;
             var markers = new Array();
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                    });
                    markers.push(marker);
            }
            var bounds = new google.maps.LatLngBounds();
            $.each(markers, function (index, marker) {
                bounds.extend(marker.position);
            });
            map.fitBounds(bounds);
        },
        attach: function (context, settings) {
            $(".menu-mlid-393").addClass("active");
            $(".menu-mlid-393 a").addClass("active");
            $(".menu-mlid-393 a").addClass("active-trail");
            var mapWiht = $('.imgblock-conosur .block-image img').width() - 50;
            var mapheight = $('.imgblock-conosur .block-image img').height() - 50;
            var altoBlock = $('.imgblock-conosur .block-image img').height();
            var anchoBlock = $('.imgblock-conosur .block-image img').width();
            $(window).resize(function() {
                altoBlock = $('.imgblock-conosur .block-image img').height();
                anchoBlock = $('.imgblock-conosur .block-image img').width();
                mapWiht = anchoBlock - 80;
                mapheight = altoBlock - 50;
                $("#block-conosur-block-map-locales").height(altoBlock);
                $(".styleimg-right").height(altoBlock);
                $(".bd-map").width(mapWiht);
                $(".bd-map").height(mapheight);
                google.maps.event.addDomListener(window, "resize", Drupal.behaviors.loadsitiomarker.initialize_get_map());
            });
            mapWiht = anchoBlock  - 80;
            mapheight = $('.imgblock-conosur .block-image img').height() - 50;
            $("#block-conosur-block-map-locales").height(altoBlock);
            $(".styleimg-right").height(altoBlock);
            $(".bd-map").width(mapWiht);
            $(".bd-map").height(mapheight);
            google.maps.event.addDomListener(window, "resize", Drupal.behaviors.loadsitiomarker.initialize_get_map());
         
        }
    };
})(jQuery);  

