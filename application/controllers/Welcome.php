<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');

		// echo $this->tambah(50,50);

		// $this->kali(50,2);
		
	}

	// memangiil file contact.php
	public function contact(){
		$this->load->view('contact');
	}

	public function tambah($nil1,$nil2){
		
		$hasil = $nil1 + $nil1;
		return $hasil;
	}

	public function kali($op1,$op2){
		$hsl = $op1 * $op2;

		echo $hsl;
	}

	public function about(){
		$this->load->view('about');
	}
}
