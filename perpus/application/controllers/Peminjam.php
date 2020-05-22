<?php

class Peminjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjam_model');
        $this->load->library('form_validation');
        $this->load->helper("url");
    }


    public function index()
    {
        $datax['judul'] = 'Daftar Peminjam';

        $dari = $this->Peminjam_model->code_product();
        $member = $this->Peminjam_model->datalist('pj_member');
        $buku = $this->Peminjam_model->datalist('pj_barang');

        $urut = substr($dari, 0);
        $codenow = (int) $urut + 1;
        $data = array(
            'no_pj' => $codenow,
            'member' => $member,
            'buku' => $buku
        );


        $this->load->view('include/header', $datax);
        $this->load->view('Peminjam/index', $data);
        $this->load->view('include/footer');
    }

    function product_data()
    {
        $data = $this->Peminjam_model->product_list();
        echo json_encode($data);
    }
    function save()
    {
        $data = $this->Peminjam_model->save_product();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Peminjam_model->update_product();
        echo json_encode($data);
    }

    function update_status()
    {
        $data = $this->Peminjam_model->update_status();
        echo json_encode($data);
    }

    
    function delete()
    {
        $data = $this->Peminjam_model->delete_product();
        echo json_encode($data);
    }

    

    function getmb(){
        $id_mb=$_POST['id_mb'];
        $member = $this->Peminjam_model->cari('pj_member',array('id_mb'=>$id_mb));
        echo json_encode($member);
        exit();
    }

    function getbk()
    {
        $id_bk = $_POST['id_bk'];
        $buku = $this->Peminjam_model->cari('pj_barang', array('id_bk' => $id_bk));
        echo json_encode($buku);
        exit();
    }
}
