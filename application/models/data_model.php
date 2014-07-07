<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function getMajors() {
		$sql = "SELECT * FROM majors";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function getUsages() {
		$sql = "SELECT * FROM usages";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function getLevels() {
		$sql = "SELECT * FROM levels";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function deleteOldCaptcha() {
		$sql = "DELETE FROM captcha WHERE time<?";
		$query = $this->db->query($sql, array(nowTS()-CAPTCHA_LIFETIME));
	}
	
	function newCaptcha($word, $hash, $time) {
		$sql = "INSERT INTO captcha VALUES(NULL, ?, ?, ?)";
		$query = $this->db->query($sql, array($word, $hash, $time));
	}
	
	function captchaValid($word, $hash) {
		$sql = "SELECT COUNT(*) AS num FROM captcha WHERE word=? AND hash=?";
		$query = $this->db->query($sql, array($word, $hash));
		$result = $query->row()->num;
		$sql = "DELETE FROM captcha WHERE hash=?";
		$query = $this->db->query($sql, array($hash));
		if ($result == 0) return FALSE;
		return TRUE;
	}
}
