<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()


    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();



        $data['pesanan'] = $this->Crud->tampil('v_historyorder', ['id' =>
        $this->session->userdata('id')])->result();

        $data['event'] = $this->Crud->tampil('event')->result();



        $this->load->view('user/index', $data);
    }
}
