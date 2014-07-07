<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function checkUser($username, $password) {
		$sql = "SELECT id, student_id, first_name, last_name, username, email, major, level FROM users WHERE username = ? AND password = ?";
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
	
	function addUser($student_id, $first_name, $last_name, $email, $major, $level, $usage, $username, $password, $status = 2, $perm_moderator = 0) {
		$sql = "INSERT INTO users VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array($user_id, $first_name, $last_name, clean4print($email), $major, $level, $usage, clean4print($username), $password, intval($status), intval($perm_moderator)));
	}

	function getPassword($username) {
		$sql = "SELECT password FROM users WHERE username = ?";
		$query = $this->db->query($sql, array($username));
	}
	
	function updatePassword($password, $username) {
		$sql = "UPDATE users SET password = ? WHERE username = ?";
		$query = $this->db->query($sql, array($password, $username));
	}
	
	function getUserProfile($username) {
		$sql = "SELECT * from users, majors, usages, levels where username = ? AND major=majors.id AND users.usages=usages.id AND level=levels.id";
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
	
	function updateUserProfile($user_id, $name, $school) {
		$sql = "UPDATE users SET name=? , school=? WHERE id=?";
		$query = $this->db->query($sql, array(clean4print($name), clean4print($school), intval($user_id)));
	}
	
	function updateEmail($username, $email) {
		$sql = "UPDATE users SET email = ? WHERE username = ?";
		$query = $this->db->query($sql, array($username, clean4print($email)));
	}
	
	function insertValidationRecord($user_id, $key) {
		$sql = "UPDATE users SET activation_key=? WHERE id=?";
		$query = $this->db->query($sql, array($key, intval($user_id)));
	}
	
	function getValidationKey($user_id) {
		$sql = "SELECT activation_key FROM users WHERE id=?";
		$query = $this->db->query($sql, array(intval($user_id)));
		return $query->row()->activation_key;
	}
	
	function key_exists($key) {
		$sql = "SELECT COUNT(*) AS num FROM users WHERE activation_key=? AND is_valid=0";
		$query = $this->db->query($sql, array($key));
		if ($query->row()->num == 1) return TRUE;
		return FALSE;
	}
	
	function validate($key) {
		$sql = "UPDATE users SET is_valid=1 WHERE activation_key=? AND is_valid=0";
		$query = $this->db->query($sql, array($key));
	}
	
	function addRecovery($user_id, $key) {
		$sql = "REPLACE INTO recovery VALUES(?, ?)";
		$query = $this->db->query($sql, array(intval($user_id), $key));
	}
	
	function deleteRecovery($user_id, $key) {
		$sql = "DELETE FROM recovery WHERE user_id=? AND recovery.key=?";
		$query = $this->db->query($sql, array(intval($user_id), $key));
	}
	
	function getRecovery($key) {
		$sql = "SELECT * FROM recovery WHERE recovery.key=?";
		$query = $this->db->query($sql, array(clean4print($key)));
		if ($query->num_rows() != 1) return NULL;
		return $query->row();
	}
}
