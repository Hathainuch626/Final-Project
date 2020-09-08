<!DOCTYPE html>
    <html>
        <head>
            <title>Simple Map</title>
            <!-- Google API key -->
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVpvLlL_Xkz4s6sZnoZjd2VTsfm7tKqaA&callback=initMap"type="text/javascript"></script>
            <style type="text/css">
                /* Always set the map height explicitly to define the size of the div
                * element that contains the map. */
                #map {
                    height: 100%;
                }

                /* Optional: Makes the sample page fill the window. */
                html,
                body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
            </style>
            <script>
                "use strict";

            function initMap() {
                const bangkok = {
                    lat: 13.847860,
                    lng: 100.604274
                };
                const map = new google.maps.Map(document.getElementById("map"), {
                    scaleControl: true,
                    center: bangkok,
                    zoom: 10
                });
                const infowindow = new google.maps.InfoWindow();
                infowindow.setContent("<b>กรุงเทพมหานคร</b>");
                const marker = new google.maps.Marker({
                    map,
                    position: bangkok
                });
                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            }
        </script>
    </head>
  <body>
    <div id="map"></div>
  </body>
</html>