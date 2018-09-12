<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('banner_model');
    }

    public function index()
    {

        $data['listaBanners'] = $this->banner_model->GetAll();
        $this->load->view('admin', $data);
    }
}