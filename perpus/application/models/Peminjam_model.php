<?php

class Peminjam_model extends CI_model
{
    function product_list()
    {
        $hasil = $this->db->select('*');
        $hasil = $this->db->from('pj_peminjam');
        $hasil = $this->db->join('pj_barang', 'pj_barang.id_bk=pj_peminjam.id_bk');
        $hasil = $this->db->join('pj_member', 'pj_member.id_mb=pj_peminjam.id_mb');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function save_product()
    {
        $data = array(
            'no_pj' => $this->input->post('product_code'),
            'id_mb' => $this->input->post('id_mb'),
            'id_bk' => $this->input->post('id_bk'),
            'tgl_pjm' => $this->input->post('tgl_pjm'),
            'tgl_kmb' => $this->input->post('tgl_kmb'),
        );
        $result = $this->db->insert('pj_peminjam', $data);
        return $result;
    }

    public function datalist($table)
    {
        $res= $this->db->get($table);
        return $res->result();
    }
    public function cari($table,$data){
        $query = $this->db->get_where($table,$data);
        return $query->result();
    }

    public function code_product()
    {
        $this->db->select_max('no_pj', 'pemcode');
        $query = $this->db->get('pj_peminjam');
        $hasil = $query->row();
        return $hasil->pemcode;
    }

    function update_product()
    {
        $product_code = $this->input->post('product_code');
        $product_idmb = $this->input->post('id_mb');
        $product_idbk = $this->input->post('id_bk');
        $product_tglpmj = $this->input->post('tgl_pjm');
        $product_tglkmb = $this->input->post('tgl_kmb');

        $this->db->set('id_mb', $product_idmb);
        $this->db->set('id_bk', $product_idbk);
        $this->db->set('tgl_pjm', $product_tglpmj);
        $this->db->set('tgl_kmb', $product_tglkmb);
        $this->db->where('no_pj', $product_code);
        $result = $this->db->update('pj_peminjam');
        return $result;
    }

    function update_status()
    {
        $product_code = $this->input->post('id_bk');
        $product_sts = "Terpinjam";
        $this->db->set('status_bk', $product_sts);
        $this->db->where('id_bk', $product_code);
        $result = $this->db->update('pj_barang');
        return $result;

    }

    function delete_status()
    {
        $product_code = $this->input->post('id_bk');
        $product_sts = "Tersedia";
        $this->db->set('status_bk', $product_sts);
        $this->db->where('id_bk', $product_code);
        $result = $this->db->update('pj_barang');
        return $result;
    }

    function delete_product()
    {
        $no_pj = $this->input->post('product_code');
        $this->db->where('no_pj', $no_pj);
        $result = $this->db->delete('pj_peminjam');
        return $result;
    }
}
