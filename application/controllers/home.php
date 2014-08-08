<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends RGF_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Users_model','Users');
		$this->load->model('Data_model','Data');
		$this->load->library('form_validation');
	}

	public function new_captcha($rand_str=NULL) {
		$this->load->helper('captcha');
		$cap = create_captcha();
		$this->load->model("Data_model","Data");
		$this->load->helper('security');
		$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
		$this->Data->deleteOldCaptcha();
		$this->Data->newCaptcha($cap["word"], $hash, nowTS());
		echo ($hash . "|" . site_url("captcha/" . $cap['filename']));
		
	}
	
	public function index()	{
		$this->load->helper('captcha');
		$this->load->helper('security');

		$data["title"] = "University of Tehran : Personal Home Page Web Server";
		
		$cap = create_captcha();
		$data["captcha_image"] = $cap['filename'];
		$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
		$data["captcha_hash"] = $hash;
		$this->Data->deleteOldCaptcha();
		$this->Data->newCaptcha($cap["word"], $hash, nowTS());

		$data['majors'] = $this->Data->getMajors();
		$data['usages'] = $this->Data->getUsages();
		$data['levels'] = $this->Data->getLevels();
		$data["users"] = $this->Users->getUsersAll();

		$this->master_view("home/index", $data);
	}

	public function time() {
		echo(nowDate());
	}
}