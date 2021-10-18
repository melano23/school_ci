<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademi extends CI_Controller {

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

	public function tatatertib(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/akademi/tatatertib');
		$this->load->view('home/footer');
		
	}

	// public function kalender(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/kalender');
	// 	$this->load->view('home/footer');
		
	// }

	// public function jadwal(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/jadwal');
	// 	$this->load->view('home/footer');
		
	// }

	// public function kurikulum(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/kurikulum');
	// 	$this->load->view('home/footer');
		
	// }

	// public function kesiswaan(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/kesiswaan');
	// 	$this->load->view('home/footer');
		
	// }

	// public function administrasi(){
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/header-menu');
	// 	$this->load->view('home/akademi/administrasi');
	// 	$this->load->view('home/footer');
		
	// }
}