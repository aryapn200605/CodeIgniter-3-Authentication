<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('users');
    }

    public function index() {

        $this->form_validation->set_rules('name', 'NAME','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('auth/v_register');
        }else{
            $image_name = time().$_FILES["image_upload"]['name'];
            $config = array(
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg|gif",
                'max_size' => "1024000",
                'file_name' => $image_name
            );

            if (!file_exists('./images/')) {
                mkdir('./images/', 0777, true);
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_upload')) {
                $data['nama']       =    $this->input->post('name');
                $data['email']      =    $this->input->post('email');
                $data['password']   =    md5($this->input->post('password'));
                $data['profile_picture']      = $image_name;
            }else{
                $data = array('error' => $this->upload->display_errors());
            }

            $this->users->daftar($data);

            $pesan['message'] =    "Pendaftaran berhasil";

            $this->load->view('auth/v_login');
        }
    }
}