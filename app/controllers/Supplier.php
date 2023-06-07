<?php

namespace App\Controllers;

use App\Core\Controller;

class Supplier extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Supplier();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('supplier/index', $data);
	}

	public function input()
	{
		$this->dashboard('supplier/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('supplier/edit');
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
