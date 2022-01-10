<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Beranda";
		$data['footer'] = true;
		return view('home/index', $data);
	}
}
