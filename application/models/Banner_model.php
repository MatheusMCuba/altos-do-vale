<?php

class banner_model extends CI_Model {

    public $codigo;
    public $posicao;
    public $descricao;
    public $imagem_1;
    public $imagem_2;
    public $imagem_3;

    public function __construct()
    {
        $this->load->database();
    }

    public function GetAll()
    {
        $this->db->from('banner');
        $this->db->order_by("posicao", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Insert($data)
    {
        $this->descricao = $data->descricao;//['descricao']; // please read the below note
        $this->imagem_1  = $data->imagem_1;//['imagem_1'];
        $this->imagem_2  = $data->imagem_2;
        $this->imagem_3  = $data->imagem_3;
        $this->posicao   = $this->db->count_all_results('banner') + 1;

        $this->db->insert('banner', $this);
    }

    public function Atualizar_Posicao($codigo, $posicao){
        $banner = array('posicao' => $posicao);
        $this->db->where('codigo', $codigo);
        $this->db->update('banner', $banner);
    }

    public function Excluir($codigo)
    {
        $this->db->where('codigo', $codigo);
        $this->db->delete('banner');

        //Atualizar Posicao
        $listaBanners = $this->GetAll();
        for( $i=0 ; $i < count($listaBanners) ; $i++ ) {
            $this->Atualizar_Posicao($listaBanners[$i]['codigo'], $i + 1);
        }
    }
}