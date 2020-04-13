<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct() 
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
	{
		$data = [
            'title' => 'Isi Product',
            'product' => $this->ProductModel->get_product(),
			'isi'  => 'product/v_list',
		];

		echo view ('layout/v_wrapper',$data);
    }
    
    public function tambah()
	{
		$data = [
            'title' => 'Tambah Product',
			'isi'  => 'product/v_tambah',
		];

		echo view ('layout/v_wrapper',$data);
    }
    
    public function save()
	{
		$data = [
            'product_name' => $this->request->getPost('product_name'),
			'product_description'  => $this->request->getPost('product_description'),
		];

        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success','Data Berhasil Ditambah');
        return redirect()->to(base_url('product'));
    }

    public function edit($produk_id)
	{
		$data = [
            'title' => 'Edit Data Product',
            'product' => $this->ProductModel->edit_product($produk_id),
			'isi'  => 'product/v_edit',
		];

		echo view ('layout/v_wrapper',$data);
    }

    public function update($produk_id)
	{
		$data = [
            'product_name' => $this->request->getPost('product_name'),
			'product_description'  => $this->request->getPost('product_description'),
		];

        $this->ProductModel->update_product($data, $produk_id);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('product'));
    }

    public function delete($produk_id)
	{
		$this->ProductModel->delete_product($produk_id);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('product'));
    }
}