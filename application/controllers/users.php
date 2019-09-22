<?php

class Users extents CI_Controller{


    function __construct(){
        parent::--construct();
        $this->load->model('user_model');
        $this->load->helper('url');

    }


    function login(){
        $data['contents']='user/login'
        $this->load->view('include/main',$data);

    }

    function login1(){
        $username=$this->input->post('uname');
        $username=$this->input->post('pass');
        $u-id=$this->user_model('login');

        //echo $u_id;
        $this->session->set_userdata('u_id',$u_id);
        //valid card when user login
        $this->session->set_userdata('login',True);

        print_r( $this->session->set_userdata);



    }
    
}