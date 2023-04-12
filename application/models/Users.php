<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model{

    private $_table = "users";

    public function daftar($data)
    {
        $this->db->insert('users',$data);
    }

    public function getByEmail($email)
    {
        return $this->db->get_where($this->_table, ["email" => $email])->row();
    }
}