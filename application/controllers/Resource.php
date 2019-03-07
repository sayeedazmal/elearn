<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function Index()
	{
		$this->load->model(array('Rsresource'));
		$bodyData[] = [];
		$bodyData['resouce'] = $this->Rsresource->getAll();

		get_views("admin/list",'',$bodyData);


	}
	public function Add(){
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation'));
		$validation = [
			[
				'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
			],
			/*
			[
				'field' => 'thumbnail',
                'label' => 'Thumbnail',
                'rules' => 'required'
			],
			[
				'field' => 'resouce_file',
                'label' => 'File',
                'rules' => 'required'
			],*/
			[
				'field' => 'details',
                'label' => 'Details',
                'rules' => 'required'
			]
		];


		$bodyData = [];
		$this->load->model(array('Rsresource'));
		$this->form_validation->set_rules($validation);
		if($this->form_validation->run()){

			$newData = [];
			$newData['title'] = $this->input->post('title');
			$fileUrl = rsFileUpload("resouce_file");
			$thumbnailFile = rsFileUpload("thumbnail");
			$newData['file'] = ( isset($fileUrl['data']['file_path']) ? $fileUrl['data']['file_path'] : '' );
			$newData['url'] = (isset($fileUrl['data']['client_name']) ? $fileUrl['data']['client_name']: '');
			$newData['type'] =$this->input->post('resouce_type');
			$newData['details'] = $this->input->post('details');
			$newData['thubnail'] =(isset($thumbnailFile['data']['client_name']) ? $thumbnailFile['data']['client_name']: '');
			$newData['course'] = $this->input->post('course');
			$newData['date'] = $this->input->post('date');
			$newData['user'] = $this->input->post('user');

			$this->Rsresource->Add($newData);

		}

		$bodyData['courses'] = $this->Rsresource->getCourses();
		$bodyData['user_id'] = 1;
		get_views("admin/upload",'',$bodyData);
	}

}
?>