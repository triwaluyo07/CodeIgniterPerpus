<?php
class Member_model extends CI_Model
{

    function product_list()
    {
        $hasil = $this->db->get('pj_member');
        return $hasil->result();
    }

    function save_product()
    {
        $data = array(
            'id_mb' => $this->input->post('product_code'),
            'nama_mb' => $this->input->post('product_name'),
            // 'tempat_lahir' => $this->input->post('kelahiran'),
            'temp_lhr' => $this->input->post('kelahiran'),
            // 'ttl_lahir' => $this->input->post('tanggal'),
            'tgl_lhr' => $this->input->post('tanggal'),
            'telepon' => $this->input->post('telepon'),
            // 'No_Identitas' => $this->input->post('ktp'),
            'no_id' => $this->input->post('no_idt'),
            'alamat' => $this->input->post('alamat'),
            'jkelamin' => $this->input->post('jkelamin'),
            'janggota' => $this->input->post('janggota')
        );
        $result = $this->db->insert('pj_member', $data);
        return $result;
    }
    public function code_product()
    {
        $this->db->select_max('id_mb', 'memcode');
        $query = $this->db->get('pj_member');
        $hasil = $query->row();
        return $hasil->memcode;
    }
    function update_product()
    {
        $product_code = $this->input->post('product_code');
        $product_name = $this->input->post('product_name');
        $product_alamat = $this->input->post('alamat');
        $product_jkelamin = $this->input->post('jkelamin');
        $product_janggota = $this->input->post('janggota');

        // $this->db->set('product_name', $product_name);
        // $this->db->set('product_num', $product_num);
        // $this->db->set('product_alamat', $product_alamat);
        // $this->db->set('product_jkelamin', $product_jkelamin);
        // $this->db->where('product_code', $product_code);

        $this->db->set('nama_mb', $product_name);
        $this->db->set('alamat', $product_alamat);
        $this->db->set('jkelamin', $product_jkelamin);
        $this->db->set('janggota', $product_janggota);
        $this->db->where('id_mb', $product_code);


        $result = $this->db->update('pj_member');
        return $result;
    }

    function delete_product()
    {
        $id_bk = $this->input->post('product_code');
        $this->db->where('id_mb', $id_bk);
        $result = $this->db->delete('pj_member');
        return $result;
    }
}
