<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
{
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->database();
 // $this->load->library('upload');
   $this->load->helper(array('array','string','form','url'));
   $this ->load->model("Model_p");
   $this->load->library('session');
}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Login');
	}
	public function login_Admin()
	{

		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$re = $this->Model_p->Admin_login($username, $password);
		if ($re) {
			$this->session->set_userdata('ci_session', $re);
			$this->load->view('dash');
		} else {
			$this->load->view('Login');
		}
	}
	public function fp()
	{
		echo ("i am here fp");
	}
	




	// Page Logout
	public function log_out()
	{
		$this->session->unset_userdata('ci_session');
		$this->load->view('Login');
	}
}
