<!DOCTYPE html>
    <html>
        <head>
            <title>Simple Map</title>
            <!-- Google API key -->
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCqefveY5WIlMYpwxRdcNc1k8w5Cg5-Gs&callback=initMap"type="text/javascript"></script>
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

                #floating-panel {
                    position: absolute;
                    top: 10px;
                    left: 25%;
                    z-index: 5;
                    background-color: #fff;
                    padding: 5px;
                    border: 1px solid #999;
                    text-align: center;
                    font-family: "Roboto", "sans-serif";
                    line-height: 30px;
                    padding-left: 10px;
                }

            </style>
              <script>
                "use strict";
                    let map;
                    let markers = [];

                function initMap() {
                    const bangkok = {
                        lat: 13.847860,
                        lng: 100.604274,
                    };
                    map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 12,
                        center: bangkok,
                        mapTypeId: "terrain",
                     });
                    
                    // Create the initial InfoWindow.
                    var infoWindow = new google.maps.InfoWindow(
                        {content: 'Click the map to get Lat/Lng!', position: bangkok});
                    infoWindow.open(map);

                    // Configure the click listener.
                    map.addListener('click', function(mapsMouseEvent)  {
                        addMarker(mapsMouseEvent.latLng);
                       
                    // Close the current InfoWindow.
                    infoWindow.close();
        
                     // Create a new InfoWindow.
                    infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
                    infoWindow.setContent(mapsMouseEvent.latLng.toString());
                    infoWindow.open(map);

                    addMarker(haightAshbury);
                });
                } // Adds a marker to the map and push to the array.

                function addMarker(location) {
                    const marker = new google.maps.Marker({
                        position: location,
                        map: map,
                    });
                    markers.push(marker);
                } // Sets the map on all markers in the array.

    </script>
    </head>
  <body>
    <div id="map"></div>
  </body>
</html>