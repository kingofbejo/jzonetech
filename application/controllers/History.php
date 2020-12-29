<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
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

        $data['pesanan'] = $this->Crud->tampil('v_historyorder')->result();


        $this->load->view('history/index', $data);
    }
}
