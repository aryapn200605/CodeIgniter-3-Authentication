<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
		$this->load->model('users');
    }

    //Load Halaman dashboard
    public function index() {
        $id = $this->session->userdata('id');

        $data['users'] = $this->users->getUserInfo($id);

        $this->load->view('auth/dashboard', $data);
    }
}