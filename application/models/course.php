<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class course extends CI_Model {
	function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}
	function add_course($course)
	{
		$query = "INSERT INTO courses (name, description, date,created_at, updated_at)
				  VALUES (?,?,?,?,?)"; 
		$values = array($course['name'], $course['description'], date('M jS Y g:iA'), "NOW()", "NOW()"); 
		return $this->db->query($query, $values);
	}
	function get_course_by_id($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?"; 
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	function delete($id)
	{
		$query = "DELETE FROM courses where id = ?"; 
		$values = array($id);
		return $this->db->query($query, $values); 
	}
}