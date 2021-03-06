<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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

	public function visi(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/visi');
		$this->load->view('home/footer');
		
	}

	public function pelindung(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/pelindung');
		$this->load->view('home/footer');
		
	}

	public function sejarah(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/sejarah');
		$this->load->view('home/footer');
		
	}

	public function logo(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/logo');
		$this->load->view('home/footer');
		
	}

	public function mars(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/mars');
		$this->load->view('home/footer');
		
	}

	public function struktur(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/struktur');
		$this->load->view('home/footer');
		
	}

	public function guru(){
		$this->load->view('home/header');
		$this->load->view('home/header-menu');
		$this->load->view('home/profil/guru');
		$this->load->view('home/footer');
		
	}

}