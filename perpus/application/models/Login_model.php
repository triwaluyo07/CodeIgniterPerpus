<?php
class Login_model extends CI_Model
{
    public function validate($user, $password)
    {
        $this->db->where('user', $user);
        $this->db->where('pass', $password);
        $result = $this->db->get('pj_users', 1);
        return $result;
    }
}
