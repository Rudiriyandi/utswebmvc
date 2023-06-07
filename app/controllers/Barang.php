<?php

namespace App\Controllers;

use App\Core\Controller;

class Barang extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Barang();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('barang/index', $data);
	}

	public function input()
	{
		$this->dashboard('barang/input');
	}

	public function simpan()
	{
		$this->dashboard('barang/simpan');
	}

	public function edit()
	{
		$this->dashboard('barang/edit');
	}

	public function update()
	{
		$this->dashboard('barang/update');
	}

	public function delete()
	{
		$this->dashboard('barang/delete');
	}
}
