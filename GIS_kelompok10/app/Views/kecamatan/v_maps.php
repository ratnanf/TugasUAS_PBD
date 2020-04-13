<div id="mapid" style="width: 1400px; height: 500px;"></div>
<script>

	var mymap = L.map('mapid').setView([-8.367393, 115.185315], 9);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		id: 'mapbox/light-v9',
		
	}).addTo(mymap);

	<?php foreach ($kecamatan as $key => $value) { ?>
		L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>]).addTo(mymap)
		.bindPopup("Nama: <?= $value['nama_kec'] ?> <br> Kode: <?= $value['kode_kec'] ?> <br> Jumlah Kelurahan: <?= $value['jumlah_kel'] ?> <br> Jumlah Desa: <?= $value['jumlah_des'] ?> <br> Longitude: <?= $value['longitude'] ?> <br> Latitude: <?= $value['latitude'] ?>");
	<?php } ?>

</script>