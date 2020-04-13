<div class="col-sm-12">

<?php 
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php } ?>


    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kecamatan</th>
                <th>Nama Kecamatan</th>
                <th>Jumlah Kelurahan</th>
                <th>Jumlah Desa</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($kecamatan as $key => $value) {  ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['kode_kec']; ?></td>
                <td><?= $value['nama_kec']; ?></td>
                <td><?= $value['jumlah_kel']; ?></td>
                <td><?= $value['jumlah_des']; ?></td>
                <td><?= $value['longitude']; ?></td>
                <td><?= $value['latitude']; ?></td>
                <td>
                    <a href="<?= base_url('kecamatan/edit/'.$value['id_kec']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('kecamatan/delete/'.$value['id_kec']) ?>" class="btn btn-danger" onClick="return confirm('Yakin?')" >Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>