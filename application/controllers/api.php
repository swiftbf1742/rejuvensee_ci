<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Grocery_CRUD');
	}

	public function index(){
		echo $this->jsonify(array('error' => 'Unauthorised Access'));
	}


	// list of functions
	/*

	1. get_news (category,newspaper,from_date,to_date,limit,offset)
	gets all news for the day for all newspapers by default.
	will check user prefereces for categories.

	a. category, selects a specific category. returns all if left blank
	b. newspaper, selects a specific newspaper. returns all if left blank
	c. from_date, returns news from a date range. From and to. Returns current day if end date is left blank
	d. to_date, will not work if from date is not set. Returns nres from a date range.
	e. limit, offset, set for pagination. Returns all if left null.

	
	2. get_categories
	gets a list of all categories

	3. get_sites
	gets a list of all sites

	4. get_article (id)
	gets an article based on the ID passed. Invalid ids will return an error.

	5. search (array(global,category,title,description,from_date,to_date))
	pass an array with the parameter having the key associated to the filter described. 

	a. global, will check everywhere possible and return results.
	b. category, will search for only categories
	c. title, will search only in titles
	d. description, will search all descriptions
	e. from_date, returns news from a date range. From and to. Returns current day if end date is left blank
	f. to_date, will not work if from date is not set. Returns nres from a date range.

	// user related functions

	4. register(array)
		required parameters name,email,password,gender,dob,profile_picture,last_activity,last_activity_ip

	5. login

	6. settings

	*/

	public function get_sites(){
		$result = $this->db->get('sites');
		echo $this->jsonify($result->result_array());
	}

	public function get_categories(){
		$result = $this->db->get('categories');
		echo $this->jsonify($result->result_array());
	}

	public function get_article($id = null){

		if(!$id){
			echo $this->jsonify(array('error' => 'Invalid Parameter'));
			die;
		}

		$this->db->where('id',$id);
		$result = $this->db->get('stories');
		if ($result->num_rows()){
			echo $this->jsonify($result->result_array());
		}
		else {
			echo $this->jsonify(array('error' => 'Not found'));
		}
		
	}

	public function get_dynamic_page($content_id = null){
		header('Access-Control-Allow-Origin: *');
		$this->load->view('welcome');
	}

	public function register(){

		$options = ['cost' => 12,];

		$data['name']             = $this->input->post('name');
		$data['email']            = $this->input->post('email');
		$data['password']         = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
		$data['gender']           = $this->input->post('gender');
		$data['dob']              = $this->input->post('dob');
		$data['last_activity']    = time();
		$data['last_activity_ip'] = $_SERVER['REMOTE_ADDR'];

		$status = $this->db->insert('app_users', $data);
		header('Access-Control-Allow-Origin: *');
	}

	public function jsonify($value){
		return json_encode($value);
	}

	public function prelogin_check($token){

		// $token  = $this->input->post('login_token');
		$result = $this->db->get_where('app_users', array('login_token'=>$token));

		header('Access-Control-Allow-Origin: *');

		if($result->num_rows() > 0){

			$data = $result->result_array()[0];
			$data['error'] = null;
			unset($data['password']);
			echo $this->jsonify($data);

			$this->db->where('id',$data['id']);
			$this->db->set('last_activity',date('Y-m-d H:i:s',time()));
			$this->db->set('last_activity_ip',$_SERVER['REMOTE_ADDR']);
			$this->db->update('app_users');
		}
		else {
			echo $this->jsonify(array('error' => 'Unauthorised Access'));
		}
	}


	function random_text( $type = 'alnum', $length = 32 ) {
		switch ( $type ) {
			case 'alnum':
				$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				break;
			case 'alpha':
				$pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				break;
			case 'hexdec':
				$pool = '0123456789abcdef';
				break;
			case 'numeric':
				$pool = '0123456789';
				break;
			case 'nozero':
				$pool = '123456789';
				break;
			case 'distinct':
				$pool = '2345679ACDEFHJKLMNPRSTUVWXYZ';
				break;
			default:
				$pool = (string) $type;
				break;
		}


		$crypto_rand_secure = function ( $min, $max ) {
			$range = $max - $min;
			if ( $range < 0 ) return $min; // not so random...
			$log    = log( $range, 2 );
			$bytes  = (int) ( $log / 8 ) + 1; // length in bytes
			$bits   = (int) $log + 1; // length in bits
			$filter = (int) ( 1 << $bits ) - 1; // set all lower bits to 1
			do {
				$rnd = hexdec( bin2hex( openssl_random_pseudo_bytes( $bytes ) ) );
				$rnd = $rnd & $filter; // discard irrelevant bits
			} while ( $rnd >= $range );
			return $min + $rnd;
		};

		$token = "";
		$max   = strlen( $pool );
		for ( $i = 0; $i < $length; $i++ ) {
			$token .= $pool[$crypto_rand_secure( 0, $max )];
		}
		return $token;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */