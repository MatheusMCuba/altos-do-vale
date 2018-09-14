<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('banner_model');
    }

    public function index()
    {
        $data['listaBanners'] = $this->banner_model->GetAll();;
        $this->load->view('home', $data);
    }
}