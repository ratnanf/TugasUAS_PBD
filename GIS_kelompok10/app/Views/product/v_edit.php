<!-- left column -->
<div class="col-md-6">

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('product/update/'.$product['produk_id']); ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input name="product_name" value="<?= $product['product_name'] ?>" class="form-control" placeholder="Enter Product Name" required>
                </div>
                
                <div class="form-group">
                    <label>Description</label>
                    <input name="product_description" value="<?= $product['product_description'] ?>" class="form-control" placeholder="Description" required>
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
<!-- /.card -->
</div>
