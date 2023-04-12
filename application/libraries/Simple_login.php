<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_login
{

    // SET SUPER GLOBAL
    var $CI = NULL;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function login($email, $password)
    {

        //cek email dan password
        $query = $this->CI->db->get_where('users', array('email' => $email, 'password' => md5($password)));

        if ($query->num_rows() == 1) {
            //ambil data user berdasar email
            $row  = $this->CI->db->query('SELECT id_user FROM users where email = "' . $email . '"');
            $admin     = $row->row();
            $id   = $admin->id_user;

            //set session user
            $this->CI->session->set_userdata('email', $email);
            $this->CI->session->set_userdata('id_login', uniqid(rand()));
            $this->CI->session->set_userdata('id', $id);

            //redirect ke halaman dashboard
            redirect(site_url('dashboard'));
        } else {
            $this->CI->session->set_flashdata('sukses', 'Email atau password anda salah, silakan coba lagi.. ');
            redirect(site_url('login'));
        }
        return false;
    }

    public function cek_login()
    {
        if ($this->CI->session->userdata('email') == '') {
            $this->CI->session->set_flashdata('sukses', 'Anda belum login');
            redirect(site_url('login'));
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('email');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
        redirect(site_url('login'));
    }
}
