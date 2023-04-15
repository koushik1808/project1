<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hm extends CI_model {
public function __construct()
{
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->database();
  //$this->load->library('upload');
   $this->load->helper(array('array','string','form','url'));
}
public function calling_modelm()
{
	echo ("I am in Model");
	die();
}
public function access_databasem()
{
	echo("Database Accessed");
  
	die();
}

}