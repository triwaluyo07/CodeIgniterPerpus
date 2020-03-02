<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
        $this->load->helper("url");
    }

    public function index()
    {
        $datax['judul'] = 'Daftar Buku';

        $dari = $this->Buku_model->code_product();
        $urut = substr($dari, 0);
        $codenow = $urut + 1;
        $data = array('id_bk' => $codenow);

        $this->load->view('include/header', $datax);
        $this->load->view('buku/index', $data);
        $this->load->view('include/footer');
        /*print_r($data) to see the output*/
    }


    function product_data()
    {
        $data = $this->Buku_model->product_list();
        echo json_encode($data);
    }
    function save()
    {
        $data = $this->Buku_model->save_product();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Buku_model->update_product();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Buku_model->delete_product();
        echo json_encode($data);
    }
}
