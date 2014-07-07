<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RGF_Controller extends CI_Controller {
	public $current_user = FALSE;
	public function __construct($dummy = TRUE) {
		parent::__construct();
		// $this->current_user = $this->login->checkAndGet();
	}
	
	public function master_view($content_view, $data) {
		$defualt_theme = 'default';
		/* User
		if (!isset($data["show_login_box"])) $data["show_login_box"] = TRUE;
		if (!isset($data["title"])) $data["title"] = "";
		if (!isset($data["is_logged_in"])) $data["is_logged_in"] = ($this->current_user==FALSE?FALSE:TRUE);
		if (!isset($data["current_user"])) $data["current_user"] = NULL;
		if ($data["is_logged_in"] == TRUE && $data["current_user"] == NULL) $data["current_user"] = $this->current_user;
		*/
		$data["title"] = PAGE_TITLE_PREFIX . $data["title"];
		$data['BASE'] = base_url();
		$data['CURRENT_PAGE'] = substr(current_url(), strlen(site_url()));
		// User
		// $theme = $this->current_user?$this->current_user->theme_name:$defualt_theme;
		$theme = $defualt_theme;
		
		// $this->load->helper('view_new_helper');
        $data['content'] = $this->load->view($theme . '/' . $content_view, $data, true);
		$this->load->view($theme . '/master', $data);
    }
	
	public function require_login() {
		if ($this->current_user == FALSE){
			redirect('users/login?next=' . (substr(current_url(), strlen(site_url()))));
			exit;
		}
	}
}
