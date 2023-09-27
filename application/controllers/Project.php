<?php

defined('BASEPATH') or exit('No direct script access allowed');

declare(strict_types=1);

class Project extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ProjectModel', 'project');
	}


	public function index()
	{
	}

	public function show($id)
	{
	}

	public function create()
	{
	}

	public function edit($id)
	{
	}

	public function update($id)
	{
	}

	public function delete($id)
	{
	}
}
