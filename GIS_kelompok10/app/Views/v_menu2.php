<div id="mapid" style="width: 1400px; height: 500px;"></div>
<script>

	var mymap = L.map('mapid').setView([-8.367393, 115.185315], 9);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		
	}).addTo(mymap);

</script>