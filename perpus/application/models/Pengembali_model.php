<?php

class Pengembali_model extends CI_model
{
    function product_list()
    {
        $hasil = $this->db->select('*');
        $hasil = $this->db->from('pj_pengembalian');
        $hasil = $this->db->join('pj_peminjam', 'pj_peminjam.id_bk=pj_pengembalian.id_bk');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function save_product()
    {
        $data = array(
            'no_pj' => $this->input->post('product_code'),
            'id_mb' => $this->input->post('id_mb'),
            'nama_mb' => $this->input->post('nama_mb'),
            'id_bk' => $this->input->post('id_bk'),
            'nama_bk' => $this->input->post('nama_bk'),
            'tgl_pjm' => $this->input->post('tgl_pjm'),
            'tgl_kmb' => $this->input->post('tgl_kmb'),
        );
        $result = $this->db->insert('pj_pengembalian', $data);
        return $result;
    }

    public function datalist($table)
    {
        $res = $this->db->get($table);
        return $res->result();
    }
    public function cari($table, $data)
    {
        $query = $this->db->get_where($table, $data);
        return $query->result();
    }

    public function code_product()
    {
        $this->db->select_max('no_pj', 'pemcode');
        $query = $this->db->get('pj_pengembalian');
        $hasil = $query->row();
        return $hasil->pemcode;
    }

    

    function update_status()
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
