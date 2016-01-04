<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->model('course'); 
		// check for new courses in database to load 
		$this->session->set_userdata('courses', $this->course->get_all_courses());
		$this->load->view('index');
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Course Name", "required|min_length[15]|trim|xss_clean");
		$this->form_validation->set_rules("description", "Course Description", "xss_clean");
		// check for any form validation errors
		if($this->form_validation->run())
		{
			$course['name'] = $this->input->post('name', true);
			$course['description'] = $this->input->post('description', true);	
			// load the course model to add course information
			$this->load->model('course'); 
			$this->course->add_course($course);
			redirect('/');
		}
		else 
		{
			// set flash data to error in form to be displayed 
			$this->session->set_flashdata('name', form_error('name'));
			redirect('/');
		}
	}
	public function destroy($course_id)
	{
		$this->load->model('course'); 
		$course2delete = $this->course->get_course_by_id($course_id);
		$this->load->view('destroy', $course2delete);  	
	}
	public function delete($course_id)
	{
		$this->load->model('course');
		$this->course->delete($course_id);
		redirect('/');
	}
}
// location: application/controlers/courses.php