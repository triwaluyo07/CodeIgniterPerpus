<?php

class Pengembali extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengembali_model');
        $this->load->library('form_validation');
        $this->load->helper("url");
    }


    public function index()
    {
        $datax['judul'] = 'Daftar Pengembalian';

        $dari = $this->Pengembali_model->code_product();
        $buku = $this->Pengembali_model->datalist('pj_peminjam');

        $urut = substr($dari, 0);
        $codenow = (int) $urut + 1;
        $data = array(
            'no_pj' => $codenow,
            'buku' => $buku
        );


        $this->load->view('include/header', $datax);
        $this->load->view('Pengembali/index', $data);
        $this->load->view('include/footer');
    }

    function product_data()
    {
        $data = $this->Pengembali_model->product_list();
        echo json_encode($data);
    }
    function save()
    {
        $data = $this->Pengembali_model->save_product();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Pengembali_model->update_product();
        echo json_encode($data);
    }

    function update_status()
    {
        $data = $this->Pengembali_model->update_status();
        echo json_encode($data);
    }


    function delete()
    {
        $data = $this->Pengembali_model->delete_product();
        echo json_encode($data);
    }

    function getbk()
    {
        $id_bk = $_POST['id_bk'];
        $buku = $this->Pengembali_model->cari('pj_peminjam', array('id_bk' => $id_bk));
        echo json_encode($buku);
        exit();
    }
}
