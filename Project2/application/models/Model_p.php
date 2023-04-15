<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_p extends CI_model {
public function __construct()
{
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->database();
  //$this->load->library('upload');
   $this->load->helper(array('array','string','form','url'));
}
public function Admin_login($username, $password)
{
	$re = $this->db->where('name', $username)->where('password', $password);
        $re = $this->db->get('admin');
        if ($re->num_rows() == 1) {
            return $re->row()->name;
        } else {
            return false;
        }

}

}