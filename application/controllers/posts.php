<?php

class posts extends CI_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('posts_model');
	}
	
	function list_posts(){
		$this->load->helper('url');
		//echo "this is list post function";
		//$this->load->model('posts_model');
		$offset=$this->uri->segment(3);
		$this->load->library('pagination');

	 $config['base_url'] = base_url().'index.php/posts/list_posts';
	 //not using this,must query troughmodel not controller
	 $config['total_rows'] = $this->posts_model->count_posts();
	// $config['total_rows'] = 40;
	// $config['uri_segment'] = 3;
	$config['num_link'] = 10;
     $config['per_page'] = 5;
       $this->pagination->initialize($config);
		$data['posts']= $this->posts_model->list_posts($config['per_page'],$offset);
		 //echo "<pre>";print_r($data);
		 $data['content']='show_posts';

		 $this->load->view('include/main',$data);
	}


	function get_post($id){
		$this->load->model('posts_model');
		$data['post']= $this->posts_model->get_post($id);
		$this->load->view('post_detials',$data);
		
	}
	function new_post(){
		$this->load->helper('form');
		$this->load->model('posts_model');
		$data['p_cat']= $this->posts_model->post_cat();
		$this->load->view("new_post",$data);
	}
	
	
	
	function create_post(){
		$this->load->helper('url');
		$data['title']=$this->input->post('title');
		$data['body']=$this->input->post('body');
		$data['post_category_id']=$this->input->post('p_cat');
		$this->posts_model->new_post($data);
		
	}

	function post_info_edit($id){
		$this->load->helper('form');
		//$this->load->model('posts_model');
		$data['p_cat']= $this->posts_model->post_cat();
         $data['post']=$this->posts_model->get_post($id);
		$this->load->view("update_post",$data);
	}
	
	function update_post(){
		$this->load->helper('url');
		$data['title']=$this->input->post('title');
		$p_id=$this->input->post('p_id');
		$data['body']=$this->input->post('body');
		$data['post_category_id']=$this->input->post('p_cat');
		$this->posts_model->edit_post($p_ids,$data);
		
	}
	function delete_post($id){
		$this->load->helper('url');
		$this->posts_model->delete_post($id);
	}
}
