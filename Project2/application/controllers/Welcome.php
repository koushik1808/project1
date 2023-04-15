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
   $this ->load->model("Hm");
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
		$this->load->view('hello');
	}
	public function fp()
	{
		echo ("i am here fp");
	}
	public function p1()
	{
		$this->load->view('dash');
	}
	public function p2()
	{
	    echo("I am in page2");
	    die();
	}
}
