<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'users/login' => array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required'
		)
	),
	'users/recover' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'captcha',
			'label' => 'Captcha',
			'rules' => 'trim|required|callback__captcha_check'
		)
	),
	'users/change_password' => array(
		array(
			'field' => 'current_password',
			'label' => 'Current Password',
			'rules' => 'required|callback__check_password'
		),
		array(
			'field' => 'new_password',
			'label' => 'Password',
			'rules' => 'required|min_length[4]'
		),
		array(
			'field' => 'confirm_new_password',
			'label' => 'Confirm Password',
			'rules' => 'required|matches[new_password]'
		),
		array(
			'field' => 'captcha',
			'label' => 'Captcha',
			'rules' => 'trim|required|callback__captcha_check'
		)
	),
	'users/signup' => array(
		array(
			'field' => 'first_name',
			'label' => 'First Name',
			'rules' => 'trim|required|min_length[3]|max_length[20]' //callback__username_check
		),
		array(
			'field' => 'last_name',
			'label' => 'Last Name',
			'rules' => 'trim|required|min_length[3]|max_length[20]'
		),
		array(
			'field' => 'student_id',
			'label' => 'Student ID',
			'rules' => 'required|numeric|length[9]'
		),
		array(
			'field' => 'usage',
			'label' => 'Usage',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'level',
			'label' => 'Level',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'major',
			'label' => 'Major',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[4]'
		),
		array(
			'field' => 'confirm_password',
			'label' => 'Confirm Password',
			'rules' => 'required|matches[password]'
		),
		array(
			'field' => 'captcha',
			'label' => 'Captcha',
			'rules' => 'trim|required|callback__captcha_check'
		)
	),
	'users/edit{name}' => array(
		array(
			'field' => 'display_name',
			'label' => 'Display Name',
			'rules' => 'trim|required|min_length[4]|max_length[30]'
		),
		array(
			'field' => 'school',
			'label' => 'School',
			'rules' => 'trim|max_length[65]'
		),
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|min_length[4]|max_length[20]|callback__username_change_check'
		)
	),
	'users/edit{setting}' => array(
		array(
			'field' => 'language',
			'label' => 'Programming Language',
			'rules' => 'required|numeric|callback__lang_exists'
		),
		array(
			'field' => 'show_compiler',
			'label' => 'Show Compiler',
			'rules' => 'trim|numeric'
		)
	),
	'users/update_email' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'show_email',
			'label' => 'Show Email',
			'rules' => ''
		)
	),
	
);





/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */







