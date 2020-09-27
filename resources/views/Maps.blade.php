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

                /*
                    * Click the map to set a new location for the Street View camera.
                */
                let map;
                let panorama;

                function initMap() {
                    const bangkok = {
                        lat: 13.847860,
                        lng: 100.604274,
                    };
                    const sv = new google.maps.StreetViewService();
                    panorama = new google.maps.StreetViewPanorama(
                        document.getElementById("pano")
                    ); // Set up the map.

                    map = new google.maps.Map(document.getElementById("map"), {
                        center: bangkok,
                        zoom: 12,
                        streetViewControl: false,
                    }); // Set the initial Street View camera to the center of the map

                    sv.getPanorama(
                        {
                            location: bangkok,
                            radius: 50,
                        },
                        processSVData
                    ); // Look for a nearby Street View panorama when the map is clicked.
                        // getPanorama will return the nearest pano when the given
                        // radius is 50 meters or less.

                    map.addListener("click", (event) => {
                        sv.getPanorama(
                        {
                            location: event.latLng,
                            radius: 50,
                        },
                        processSVData
                    );
                });
            }

            function processSVData(data, status) {
                if (status === "OK") {
                    const location = data.location;
                    const marker = new google.maps.Marker({
                        position: location.latLng,
                        map,
                        title: location.description,
                    });
                    panorama.setPano(location.pano);
                    panorama.setPov({
                        heading: 270,
                        pitch: 0,
                    });
                    panorama.setVisible(true);
                    marker.addListener("click", () => {
                        const markerPanoID = location.pano; // Set the Pano to use the passed panoID.

                        panorama.setPano(markerPanoID);
                        panorama.setPov({
                            heading: 270,
                            pitch: 0,
                        });
                        panorama.setVisible(true);
                    });
                } else {
                    console.error("Street View data not found for this location.");
                }
             }
    </script>
    </head>
  <body>
  <div id="map" style="width: 45%; height: 100%; float: left"></div>
    <div id="pano" style="width: 45%; height: 100%; float: left"></div>
  </body>
</html>