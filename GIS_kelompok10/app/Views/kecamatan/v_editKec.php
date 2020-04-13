<div class="col-sm-7">
    <div id="mapid" style="width: 600px; height: 500px;"></div>
    <script>
        
        var mymap = L.map('mapid').setView([-8.367393, 115.185315], 9);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 20,
    	id: 'mapbox/streets-v11',
	
        }).addTo(mymap);

        var popup = L.popup();

	    function onMapClick(e) {
		    popup
			    .setLatLng(e.latlng)
			    .setContent(e.latlng.toString())
			    .openOn(mymap);
	    }

	    mymap.on('click', onMapClick);
        
    </script>
</div>

<div class="col-sm-5">

    <!-- general form elements -->
        
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('kecamatan/update/'.$kecamatan['id_kec']); ?>" method="post">
            <div class="card-body">
            <div class="form-group">
                <label>Kode Kecamatan</label>
                <input name="kode_kec" value="<?= $kecamatan['kode_kec'] ?>" placeholder="Kode Kecamatan" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Nama Kecamatan</label>
                <input name="nama_kec" value="<?= $kecamatan['nama_kec'] ?>" placeholder="Nama Kecamatan" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Kelurahan</label>
                <input name="jumlah_kel" value="<?= $kecamatan['jumlah_kel'] ?>" placeholder="Jumlah" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Desa</label>
                <input name="jumlah_des" value="<?= $kecamatan['jumlah_des'] ?>" placeholder="Jumlah" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input name="latitude" value="<?= $kecamatan['latitude'] ?>" placeholder="Latitude" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input name="longitude" value="<?= $kecamatan['longitude'] ?>" placeholder="Longitude" class="form-control" required/>
            </div>  
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="cancel" class="btn btn-danger">Cancel</button>
            </div>
            
        </form>
<!-- /.card -->
</div>

