<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

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

	function __construct(){
		parent::__construct();		
		// $this->load->model('mready');
		$this->load->helper(array('url'));
 
	}

	// public function kelas(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/galeri/kelas');
	// 	$this->load->view('home/footer');
		
	// }

	// public function lab(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/lab');
	// 	$this->load->view('home/footer');
		
	// }

	// public function toilet(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/toilet');
	// 	$this->load->view('home/footer');
		
	// }

	// public function ruangmusik(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/ruangmusik');
	// 	$this->load->view('home/footer');
		
	// }

	// public function uks(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/uks');
	// 	$this->load->view('home/footer');
		
	// }

	// public function kantin(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/kantin');
	// 	$this->load->view('home/footer');
		
	// }
}