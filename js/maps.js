function initialize() {


/*  CONTACTO */

            var lv = '<div id="content">'+

              '<h4>' + 'Aljibe Tango' + '</h4>'+
              '<p style="color:#333">' + 'Balcarce 425<br>' +
                 'CABA - Argentina<br>' + 
              '</p>'+
              '</div>';

     var locations = [
        [lv, -34.61279, -58.37113, 1],
      ];

    window.map = new google.maps.Map(document.getElementById('google-map'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        navigationControl: false,
    });

    var infowindow = new google.maps.InfoWindow();
    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          icon: locations[i][4],
        });

        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(16);
        google.maps.event.removeListener(listener);
    });



}

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBBhh9bdv02x8XPknaSceyUsPFrz6ap4SE&' + 'callback=initialize';

    document.body.appendChild(script);
}

window.onload = loadScript;