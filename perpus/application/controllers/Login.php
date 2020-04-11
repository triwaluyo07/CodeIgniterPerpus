<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('access/login');
    }

    function auth()
    {
        $user    = $this->input->post('user', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $validate = $this->login_model->validate($user, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $name  = $data['nama'];
            $user = $data['user'];
            $level = $data['usr_level'];
            $sesdata = array(
                'username'  => $name,
                'user'     => $user,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            
                redirect('home');

                
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
