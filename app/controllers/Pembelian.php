<?php

namespace App\Controllers;

use App\Core\Controller;

class Pembelian extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Pembelian();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('pembelian/index', $data);
	}

	public function input()
	{
		$this->dashboard('pembelian/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('pembelian/edit');
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
