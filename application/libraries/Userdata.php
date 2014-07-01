<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * RGF
 *
 * 
 */

// ------------------------------------------------------------------------

/**
 * RGF Userdata Class
 *
 */
class RGF_Userdata {

	/**
	 * Constructor
	 */
	public function __construct() {
		@session_start();
	}
	// --------------------------------------------------------------------

	/**
	 * User Data
	 */
	function data($name) {
		if (isset($_SESSION[$name])) return $_SESSION[$name];
		return FALSE;
	}
	
	function unset_data($name) {
		unset($_SESSION[$name]);
	}
	
	function set_data($name, $val) {
		$_SESSION[$name] = $val;
	}
	
}

// END SC_Userdata class

/* End of file Userdata.php */
/* Location: ./application/libraries/Userdata.php */
