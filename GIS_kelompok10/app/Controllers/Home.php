<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Maps',
			'isi'  => 'v_menu2',
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function anggota()
	{
		$data = [
			'title' => 'Anggota Kelompok',
			'isi'  => 'v_anggota',
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function menu2()
	{
		$data = [
			'title' => 'Maps',
			'isi'  => 'v_menu2',
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function menu3()
	{
		$data = [
			'title' => 'Input Data',
			'isi'  => 'v_menu3',
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function menu4()
	{
		$data = [
			'title' => 'Judul Menu 4',
			'isi'  => 'v_menu4',
		];

		echo view ('layout/v_wrapper',$data);
	}

}
