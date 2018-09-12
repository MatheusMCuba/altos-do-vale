<?php

class banner_model extends CI_Model {

    public $codigo;
    public $posicao;
    public $texto;
    public $url;

    public function __construct()
    {
        $this->load->database();
    }

    public function GetAll()
    {
        $query = $this->db->get('banner');
        return $query->result_array();
    }

    public function Insert()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function Update()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}