<?php
class posts_model extends CI_model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function list_posts($limit,$offset){
		$query= $this->db->get("posts",$limit,$offset);

		
		return $query->result();
	}
	function get_post($p_id){
		$this->db->where('p_id',$p_id);
		return $this->db->get('posts')->row();
	}
	function post_cat(){
		$query= $this->db->get("post_category");
		return $query->result();
	}
	function new_post($data){
		$this->db->insert('posts',$data);
		redirect('posts/get_posts');
		
	}
	function edit_post($id,$data){
		$this->db->where('p_id',$p_id);
		$this->db->update('posts',$data);
		redirect('posts/list_posts');

	}

	function delete_post($p_id){
	 $this->db->where('p_id',$p_id);
	 $this->db->delete('posts');
		redirect('posts/list_posts');
	}

	function count_posts(){
 return $this->db->count_all();
	}
}
