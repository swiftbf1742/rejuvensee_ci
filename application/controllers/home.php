<?php 

 class Home extends CI_Controller{


 	public function __construct(){

 		parent::__construct();
 	}


 	public function index(){
 		$this->load->view('index');
 	}

 	public function about(){
 		$this->load->view('about1');
 	}

 	public function breath(){
 		$this->load->view('breath');
 	}

 	public function programs(){
 		$query['data'] = $this->db->query('SELECT * FROM programs')->result_array();
 		$this->load->view('programs',$query);
 	}

 	public function testimonies(){
 		$query['data'] = $this->db->query('SELECT * FROM testimonies')->result_array();
 		$this->load->view('testimonies',$query);
 	}

 	public function faq(){
 		$this->load->view('faq');
 	}

 	public function contact(){
 		$this->load->view('contact');
 	}

 	public function antiaging(){
 		$this->load->view('anti-aging');
 	}

 	public function german(){
 		$this->load->view('german');
 	}

 	public function andro(){
 		$this->load->view('andro');
 	}

 	public function Diabetes(){
 		$this->load->view('Diabetes');
 	}

 	public function cardio(){
 		$this->load->view('cardio');
 	}

 	public function incurable(){
 		$this->load->view('incurable');
 	}
 }