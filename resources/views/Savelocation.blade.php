<!DOCTYPE html>
	<html>
 		<head>
  			<title> Google Map API </title>
			<!-- Google API key -->
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
			<script type="text/javascript" src="jquery-1.11.2.min.js" ></script>
			<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCqefveY5WIlMYpwxRdcNc1k8w5Cg5-Gs&callback=initMap"type="text/javascript"></script>
			<script language="JavaScript">


			function saveLatLng(){

				var lat = $("#lat").val();
				var lng = $("#lng").val();
				var location_name = $("#location_name").val();

				$.ajax({
					method : "POST",
					url: "insert.php",
					data: { lat:lat, lng:lng, location_name:location_name }
				}).done(function(text){

					alert(text);

				});

			}

			function setupMap() { 
			var myOptions = {
				zoom: 12,
				center: new google.maps.LatLng(13.847860, 100.604274),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
				var map = new google.maps.Map(document.getElementById('map_canvas'),
					myOptions);

			var marker = new google.maps.Marker({
				map:map,
				position: new google.maps.LatLng(13.847860, 100.604274),
				draggable: true
			});


			var infowindow = new google.maps.InfoWindow({
				map:map,
				content: "hello",
				position:  new google.maps.LatLng(13.847860, 100.604274)
			});


			google.maps.event.addListener(map,'click',function(event){

			var html = '';
				html += 'lat : <input type="text" id="lat" value="'+event.latLng.lat()+'" /><br/>';
				html += 'lng : <input type="text" id="lng" value="'+event.latLng.lng()+'" /><br/>';
				html += 'location name : <input type="text" id="location_name" value="" /><br/>';
				html += '<input type="button" value="Save" onclick="saveLatLng()" />';
				infowindow.open(map,marker);
				infowindow.setContent(html);
				infowindow.setPosition(event.latLng);

				marker.setPosition(event.latLng);

			});
	}

</script>
 </head>

<body onload="setupMap()">
  
<div id="map_canvas" style="width:1000px; height:800px;"></div>

 </body>
</html>