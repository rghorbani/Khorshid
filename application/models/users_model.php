<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function checkUser($username, $password) {
		$sql = "SELECT id, student_id, first_name, last_name, username, email, major, level, status, perm_moderator FROM users WHERE username = ? AND password = ?";
		$query = $this->db->query($sql, array(clean4print($username), $password)); 
		if ($query->num_rows() != 1) return FALSE;
		return $query->row();
	}
	
	function getUsernames() {
		$sql = "SELECT username FROM users WHERE new = 0 ORDER BY username";
		$query = $this->db->query($sql); 
		return $query->result();
	}

	function getUsersAll() {
		$sql = "SELECT id, first_name, last_name, username FROM users";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function updateUsernamePassword($user_id, $username, $password) {
		$sql = "UPDATE users SET username=? , password=? WHERE id=?";
		$query = $this->db->query($sql, array($username, $password, intval($user_id)));
	}

	function usernameExists($username) {
		$sql = "SELECT id FROM users WHERE username = ?";
		$query = $this->db->query($sql, array($username));
		if ($query->num_rows() != 0) return TRUE;
		return FALSE;
	}
	
	function addUser($student_id, $first_name, $last_name, $email, $major, $level, $usage, $username, $password, $activation_key, $status = 2, $perm_moderator = 0) {
		$sql = "INSERT INTO users(student_id, first_name, last_name, email, major, level, usages, username, password, status, activation_key, perm_moderator) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array($student_id, $first_name, $last_name, clean4print($email), $major, $level, $usage, clean4print($username), $password, intval($status), $activation_key, intval($perm_moderator)));
	}

	function getUsersByEmail($email) {
		$sql = "SELECT id, student_id, first_name, last_name, username, email, major, level, status, perm_moderator FROM users WHERE email = ?";
		$query = $this->db->query($sql, array(clean4print($email))); 
		return $query->result();
	}

	function getPassword($email) {
		$sql = "SELECT password FROM users WHERE email = ?";
		$query = $this->db->query($sql, array($email));
	}
	
	function updatePassword($password, $email) {
		$sql = "UPDATE users SET password = ? WHERE email = ?";
		$query = $this->db->query($sql, array($password, $email));
	}
	
	function getUserProfile($username) {
		$sql = "SELECT * from users, majors.title AS major_title, usages.title As usage_title, levels.title As level_title where username = ? AND major=majors.id AND users.usages=usages.id AND level=levels.id";
		$query = $this->db->query($sql, array(intval($username)));
		if ($query->num_rows() == 0) return NULL;
		if ($query->num_rows() != 1) return NULL;
		return $query->row();
	}
	
	function getTotalUsers() {
		$sql = "SELECT count(*) AS count FROM users";
		$query = $this->db->query($sql);
		return $query->row()->count;
	}
	
	function insertActivationRecord($user_id, $key) {
		$sql = "UPDATE users SET activation_key = ? WHERE id = ?";
		$query = $this->db->query($sql, array($key, intval($user_id)));
	}
	
	function getActivationKey($user_id) {
		$sql = "SELECT activation_key FROM users WHERE id = ?";
		$query = $this->db->query($sql, array(intval($user_id)));
		return $query->row()->activation_key;
	}
	
	function key_exists($key) {
		$sql = "SELECT COUNT(*) AS num FROM users WHERE activation_key = ? AND status = 2";
		$query = $this->db->query($sql, array($key));
		if ($query->row()->num == 1) return TRUE;
		return FALSE;
	}
	
	function activate($key) {
		$sql = "UPDATE users SET status = 3 WHERE activation_key = ? AND status = 2";
		$query = $this->db->query($sql, array($key));
	}
	
	function addRecovery($user_id, $key) {
		$sql = "REPLACE INTO recovery VALUES(?, ?)";
		$query = $this->db->query($sql, array(intval($user_id), $key));
	}
	
	function deleteRecovery($user_id, $key) {
		$sql = "DELETE FROM recovery WHERE user_id = ? AND recovery.key = ?";
		$query = $this->db->query($sql, array(intval($user_id), $key));
	}
	
	function getRecovery($key) {
		$sql = "SELECT * FROM recovery WHERE recovery.key = ?";
		$query = $this->db->query($sql, array(clean4print($key)));
		if ($query->num_rows() != 1) return NULL;
		return $query->row();
	}
}
