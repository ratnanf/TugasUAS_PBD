<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\KecamatanModel;

class Kecamatan extends BaseController
{
    protected $KecamatanModel;

    public function __construct() 
    {
        $this->KecamatanModel = new KecamatanModel();
    }

    public function index()
	{
		$data = [
            'title' => 'Isi Kecamatan',
            'kecamatan' => $this->KecamatanModel->get_kecamatan(),
			'isi'  => 'kecamatan/v_maps',
		];

		echo view ('layout/v_wrapper',$data);
    }

    public function geo()
	{
		$data = [
            'title' => 'Isi Kecamatan',
            'kecamatan' => $this->KecamatanModel->get_kecamatan(),
			'isi'  => 'kecamatan/v_mapsgeo',
		];

		echo view ('layout/v_wrapper',$data);
    }

    public function list()
	{
		$data = [
            'title' => 'Isi Kecamatan',
            'kecamatan' => $this->KecamatanModel->get_kecamatan(),
			'isi'  => 'kecamatan/v_listKec',
		];

		echo view ('layout/v_wrapper',$data);
    }

    
    public function save()
	{
		$data = [
            'kode_kec' => $this->request->getPost('kode_kec'),
            'nama_kec'  => $this->request->getPost('nama_kec'),
            'jumlah_kel' => $this->request->getPost('jumlah_kel'),
            'jumlah_des'  => $this->request->getPost('jumlah_des'),
            'longitude' => $this->request->getPost('longitude'),
			'latitude'  => $this->request->getPost('latitude'),
		];

        $this->KecamatanModel->insert_kecamatan($data);
        session()->setFlashdata('success','Data Berhasil Ditambah');
        return redirect()->to(base_url('kecamatan'));
    }

    public function edit($id_kec)
	{
		$data = [
            'title' => 'Edit Data Kecamatan',
            'kecamatan' => $this->KecamatanModel->edit_kecamatan($id_kec),
			'isi'  => 'kecamatan/v_editKec',
		];

		echo view ('layout/v_wrapper',$data);
    }

    public function update($id_kec)
	{
		$data = [
            'kode_kec' => $this->request->getPost('kode_kec'),
            'nama_kec'  => $this->request->getPost('nama_kec'),
            'jumlah_kel' => $this->request->getPost('jumlah_kel'),
            'jumlah_des'  => $this->request->getPost('jumlah_des'),
            'longitude' => $this->request->getPost('longitude'),
			'latitude'  => $this->request->getPost('latitude'),
		];

        $this->KecamatanModel->update_kecamatan($data, $id_kec);
        session()->setFlashdata('success','Data Berhasil Diupdate');
        return redirect()->to(base_url('kecamatan'));
    }

    public function delete($id_kec)
	{
		$this->KecamatanModel->delete_kecamatan($id_kec);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('kecamatan'));
    }
}