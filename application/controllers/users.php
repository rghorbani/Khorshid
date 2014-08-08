<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends RGF_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
		redirect("users/login");
	}
	
	public function login() {
		$this->form_validation->set_message('required', 'Please fill in the form!');
		$this->load->helper('security');
		$data["title"] = "Login";
		$data["invalid_login"] = FALSE;
		$data["show_login_box"] = FALSE;
		$data["back_url"] = "";
		if ($this->form_validation->run() == FALSE) {
			if ($this->input->get("next")) $data["back_url"] = $this->input->get("next");
			if ($this->input->post("back_url") != FALSE && $this->input->post("back_url") != "") $data["back_url"] = $this->input->post("back_url");
			$this->master_view("user/login", $data);
			return;
		}
		$current_user = $this->login->login($this->input->post("username"), $this->input->post("password"));
		if ($current_user == FALSE) {
			if ($this->input->post("back_url") != FALSE && $this->input->post("back_url") != "") $data["back_url"] = $this->input->post("back_url");
			$data["invalid_login"] = TRUE;
			$this->master_view("user/login",$data);
			return;
		}
		
		$url = '';
		if ($this->input->post("back_url") != FALSE && $this->input->post("back_url") != "") {
			$url = $this->input->post("back_url");
		}
		
		// do not redirect to signup page
		if (substr($url, 0, 12) == "users/signup") $url = "";
		
		if ($this->input->post("username") != clean4username($this->input->post("username"))) {
			$data["next"] = $url;
			$data["title"] = "Username Changed";
			$data["is_logged_in"] = TRUE;
			$data["current_user"] = $current_user;
			$this->master_view("general/username_changed", $data);
			return;
		}
		
		redirect(site_url($url), 'location');
	}
	
	// public function invalid() {
	// 	$data["title"] = "Sorry!";
	// 	$data["show_login_box"] = TRUE;
	// 	$this->master_view("user/invalid", $data);
	// }
	
	public function logout() {
		$this->login->logout();
		$data["invalid_login"] = FALSE;
		$data["title"] = "Login";
		$data["show_login_box"] = FALSE;
		redirect('');
	}
	
	public function new_captcha($rand_str=NULL) {
		$this->load->helper('captcha');
		$cap = create_captcha();
		$this->load->model("Users_model","Users");
		$this->load->helper('security');
		$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
		$this->Users->deleteOldCaptcha();
		$this->Users->newCaptcha($cap["word"], $hash, nowTS());
		echo ($hash . "|" . site_url("captcha/" . $cap['filename']));
		
	}
	public function signup() {
		$this->load->helper('captcha');
		$this->load->helper('security');
		$this->load->model("Users_model","Users");
		
		if ($this->form_validation->run() == FALSE) {
			
			$data["title"] = "SignUp";
			$this->load->model("Data_model","Data");
			$cap = create_captcha();
			$data["captcha_image"] = $cap['filename'];
			$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
			$data["captcha_hash"] = $hash;
			$this->Data->deleteOldCaptcha();
			$this->Data->newCaptcha($cap["word"], $hash, nowTS());

			$data['majors'] = $this->Data->getMajors();
			$data['usages'] = $this->Data->getUsages();
			$data['levels'] = $this->Data->getLevels();
			
			$this->master_view("user/signup", $data);
			return;
		}

		$this->load->library("Mailer");
		
		srand(time(NULL));
		$rand_str = do_hash($this->input->post("email") . "__sh_c0d3!" . rand());
		$str = str_replace(array("{NAME}", "{ACTIVATION_LINK}", "{EMAIL}", "{USERNAME}"), array(clean4print($this->input->post("last_name")), site_url("users/activate/" . $rand_str), $this->input->post("email"), clean4print($this->input->post("username"))), EMAIL_ACTIVATION_MSG);
		if ($this->mailer->send(EMAIL_SENDER_EMAIL, EMAIL_SENDER_NAME, $this->input->post("email"), "RGF User", "RGF email validation", $str)) {
			// email sent correctly
		}
		
		$username = explode("@", $this->input->post("email"))[0];
		$this->Users->addUser($this->input->post("student_id"), $this->input->post("first_name"), $this->input->post("last_name"), $this->input->post("email"), $this->input->post("major"), $this->input->post("level"), $this->input->post("usage"), $username, $this->input->post("password"), $rand_str);
		//$this->login->login($this->input->post("username"), $this->input->post("password")); // LOGIN AFTER SIGNUP?
		$data["title"] = "Signed Up";
		$this->master_view("user/signedup", $data);
	}
	
	
	public function recover() {
		$data["title"] = "Recover Account";
		$this->load->helper('captcha');

		if ($this->form_validation->run() == FALSE) {
			
			$cap = create_captcha();
			$data["captcha_image"] = $cap['filename'];
			$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
			$data["captcha_hash"] = $hash;
			$this->Users->deleteOldCaptcha();
			$this->Users->newCaptcha($cap["word"], $hash, nowTS());
			
			$this->master_view("user/recover",$data);
			return;
		}
		
		$this->load->helper('security');
		$this->load->model("Users_model","Users");
		$this->load->library("Mailer");
		
		srand(time(NULL));
		$users = $this->Users->getUsersByEmail($this->input->post("email"));
		foreach($users as $user) {
			$rand_str = do_hash($this->input->post("email") . "__sh_c0d3!" . rand());
			$str = str_replace(array("{NAME}", "{RECOVERY_LINK}", "{EMAIL}", "{USERNAME}", "{PROFILE_LINK}"), array(($user->last_name), site_url("users/recovered/" . $rand_str), clean4print($user->email), clean4print($user->username), site_url("users/profile/" . $user->id)), EMAIL_RECOVERY_MSG);
			$this->Users->addRecovery($user->id, $rand_str);
			if ($this->mailer->send(EMAIL_SENDER_EMAIL, EMAIL_SENDER_NAME, $user->email, "RGF User", "RGF recovery confirmation", $str)) {
				// email sent correctly
			}
		}

		$this->master_view("user/recovered", $data);
	}
	
	// RECOVERY LINKS
	public function recovered($key = NULL) {
		if ($key == NULL) show_404();
		$data["title"] = "Recover Account";
		
		$this->load->model("Users_model","Users");
		$this->load->library("Mailer");
		
		$req = $this->Users->getRecovery($key);
		$this->load->helper('security');
		$this->load->helper('password');
		
		if ($req != NULL) {
			$user = $this->Users->getUserById($req->user_id);
			if ($user == NULL) show_404();
			$password = generateRandomPassword2(6);
			$str = str_replace(array("{NAME}", "{EMAIL}", "{USERNAME}", "{PASSWORD}", "{PROFILE_LINK}"), array($user->name, clean4print($user->email), $user->username, $password, site_url("users/profile/" . $user->id)), EMAIL_NEWPASSWORD_MSG);
			
			$this->Users->deleteRecovery($user->id, $key);
			$this->Users->updatePassword($user->id, $password, $user->username);
			
			if ($this->mailer->send(EMAIL_SENDER_EMAIL, EMAIL_SENDER_NAME, $user->email, "RGF User", "RGF password reset", $str)) {
				// email sent correctly
			}
		}
		$this->master_view("user/password_changed", $data);
	}
	
	public function change_password() {
		$this->require_login();
		$this->load->helper('security');
		
		if ($this->form_validation->run('users/change_password') == FALSE) {
			$cap = create_captcha();
			$data["captcha_image"] = $cap['filename'];
			$hash = do_hash(mt_rand() . $cap["word"] . "__sh_c0d3!");
			$data["captcha_hash"] = $hash;
			$this->Users->deleteOldCaptcha();
			$this->Users->newCaptcha($cap["word"], $hash, nowTS());
			
			$this->master_view("user/change_password",$data);
			return;
		}

		$this->load->model("Users_model","Users");
		$this->Users->updatePassword($this->input->post("new_password"), $this->input->post("email"));
		$data["title"] = "Login";
		$this->master_view("user/password_changed_2", $data);
	}

	public function activate($key = NULL) {
		
		if ($key == NULL) show_404();
		$this->load->model("Users_model","Users");
		if ($this->Users->key_exists($key) == FALSE) show_404();
		$this->Users->activate($key);
		
		$data["title"] = "Account activated!";
		$this->master_view("user/activated", $data);
	}

	// used for form validation in signup
	public function _username_check($username, $field="_username_check") {
		if ($field == "") $field = __FUNCTION__;
		for ($i=0;$i<strlen($username);$i++) {
			if (ctype_alpha($username[$i])) continue;
			if (is_numeric($username[$i])) continue;
			if ($username[$i] == ".") continue;
			$this->form_validation->set_message($field, 'Username can only contain alpha, numbers and dots.');
			return FALSE;
		}
		if ($username[0] == "." || $username[strlen($username)-1] == ".") {
			$this->form_validation->set_message($field, 'Dots can not be the first or the last character.');
			return FALSE;
		}
		for ($i=0;$i<strlen($username)-1;$i++) {
			if ($username[$i] == "." && $username[$i+1] == ".") {
				$this->form_validation->set_message($field, 'Username can not contain dots after dots.');
				return FALSE;
			}
		}
		$this->load->model("Users_model","Users");
		if ($this->Users->usernameExists($username) == TRUE) {
			$this->form_validation->set_message($field, 'This username is taken!');
			return FALSE;
		}
		return TRUE;
	}
	
	// used for form validation in signup
	public function _username_change_check($username) {
		if (strtolower($username) == strtolower($this->current_user->username)) return TRUE;
		return $this->_username_check($username, "_username_change_check");
	}
	// used for form validation in change pass
	public function _check_password($password) {
		$this->load->model("Users_model","Users");
		if ($this->login->checkPassword($this->current_user->username, $password) == FALSE) {
			$this->form_validation->set_message('_check_password', 'Wrong password!');
			return FALSE;
		}
		return TRUE;
	}
	
	// used for form validatoin in signup
	public function _captcha_check($word) {
		$this->load->model("Data_model","Data");
		if ($this->Data->captchaValid($word, $this->input->post("hash"))) {
			return TRUE;
		}
		$this->form_validation->set_message('_captcha_check', 'Enter the word in the picture more carefuly!');
		return FALSE;
	}
}