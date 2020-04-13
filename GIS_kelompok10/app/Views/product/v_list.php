<div class="col-sm-12">
<a href="<?= base_url('product/tambah') ?>" class="btn btn-primary">Tambah Data</a>
<br><br>

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
                <th>Nama Produk</th>
                <th>Desc Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($product as $key => $value) {  ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['product_name']; ?></td>
                <td><?= $value['product_description']; ?></td>
                <td>
                    <a href="<?= base_url('product/edit/'.$value['produk_id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('product/delete/'.$value['produk_id']) ?>" class="btn btn-danger" onClick="return confirm('Yakin?')" >Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>