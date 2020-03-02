<?php
class Buku_model extends CI_Model
{

    function product_list()
    {
        $hasil = $this->db->get('pj_barang');
        return $hasil->result();
    }

    function save_product()
    {
        $data = array(
            'id_bk' => $this->input->post('product_code'),
            'nama_bk' => $this->input->post('product_name'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'perolehan' => $this->input->post('perolehan'),
        );
        $result = $this->db->insert('pj_barang', $data);
        return $result;
    }

    public function code_product()
    {
        $this->db->select_max('id_bk', 'bookcode');
        $query = $this->db->get('pj_barang');
        $hasil = $query->row();
        return $hasil->bookcode;
    }
    function update_product()
    {
        $product_code = $this->input->post('product_code');
        $product_name = $this->input->post('product_name');
        $product_pengarang = $this->input->post('pengarang');
        $product_penerbit = $this->input->post('penerbit');

        $this->db->set('nama_bk', $product_name);
        $this->db->set('pengarang', $product_pengarang);
        $this->db->set('penerbit', $product_penerbit);
        $this->db->where('id_bk', $product_code);
        $result = $this->db->update('pj_barang');
        return $result;
    }

    function delete_product()
    {
        $id_bk = $this->input->post('product_code');
        $this->db->where('id_bk', $id_bk);
        $result = $this->db->delete('pj_barang');
        return $result;
    }
}
