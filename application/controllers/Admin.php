<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'imgur'));
        $this->load->model('banner_model');
    }

    public function index()
    {
        $data['listaBanners'] = $this->banner_model->GetAll();
        $this->load->view('admin', $data);
    }


    public function atualizar_posicao(){
        $codigo = $this->input->post('codigo');
        $posicao = $this->input->post('posicao');
        $this->banner_model->Atualizar_Posicao($codigo, $posicao);
    }

    public function excluir_banner(){
        $codigo = $this->input->post('codigo');
        $this->banner_model->Excluir($codigo);
    }

    public function salvar_banner()
    {
        try{
            $total = count($_FILES['banner_images']['name']);
            $banner = (object)[];
            $banner->{"descricao"} = $this->input->post('descricao');

            for( $i=0 ; $i < $total ; $i++ ) {
                $imgur_result = imgur_upload($_FILES['banner_images']['tmp_name'][$i]);

                if($imgur_result["success"]){
                    $banner->{"imagem_".($i + 1)} = $imgur_result['data']['link'];
                }
            }

            $this->banner_model->Insert($banner);
            redirect('admin/index');
        }
        catch (Exception $e){
            redirect('admin/erro_upload');
        }
    }

    public function erro_upload(){
        $this->load->view('erro_upload');
    }
}