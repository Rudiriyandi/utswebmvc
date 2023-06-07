<?php

namespace App\Controllers;

use App\Core\Controller;

class Penjualan extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Penjualan();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('penjualan/index', $data);
	}

	public function input()
	{
		$this->dashboard('penjualan/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('penjualan/edit');
	}

	public function update()
	{
		//
	}

	public function delete()
	{
		//
	}
}
