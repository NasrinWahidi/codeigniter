<?php 

/**
 * 
 */
class home extends CI_Controller {
	
	
	function index(){
		echo "Welcome to the modern programming paradigm course";
	}
	function welcome(){
		echo "welcome to codeigniter course";
	}
	function welcome_1($name){
		echo "welcome".$name." to codeigniter course";
	}
	function welcome_2($name,$lastName=""){
		echo "welcome".$name." ".$lastName." to codeigniter course";
	}
	function welcome_3(){
		$this->load->view("home");
	}
	function user_data(){
		$this->load->model('home_model');
		//print_r($this->home_model->user_data());
		$u_data['u_inf'] = $this->home_model->user_data();
		//print_r($u_data);
		$this->load->view('home',$u_data);
	}
}









