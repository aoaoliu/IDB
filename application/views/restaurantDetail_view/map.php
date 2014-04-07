<div class="container">	<h1 id="download" class="page-header">Download</h1>	<p class="lead">Bootstrap has a few easy ways to quick your particular needs.</p>	<div class="row">		<div class="col-md-6">			<?php $locx = $restaurantInfo[0]['LOCX']; $locy = $restaurantInfo[0]['LOCY'];?>			<div id="map-canvas" style="width:360px; height: 240px">				<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />				<style type="text/css">				  html { height: 100% }				  body { height: 100%; margin: 0; padding: 0 }				  #map-canvas { height: 100% }				</style>				<script type="text/javascript"				  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqeUTt7VFlkrw1kiZHumHBoNBhES7qrBI&sensor=true&language=eng">				</script>				<script type="text/javascript">					var markers = [];					function initialize() 					{						var myLatlng = new google.maps.LatLng(<?php echo $locx?>, <?php echo $locy?>);						var mapOptions = 						{							zoom: 4,							center: myLatlng,							mapTypeId: google.maps.MapTypeId.ROADMAP						}						var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);												var marker = new google.maps.Marker						({						  position: new google.maps.LatLng(<?php echo $locx?>, <?php echo $locy?>),						  map: map,						  title:"Hello World!"						});						markers.push(marker)												for(var i = 0; i < 0; i++)						{						}					}					google.maps.event.addDomListener(window, 'load', initialize);									</script>			</div>		</div>