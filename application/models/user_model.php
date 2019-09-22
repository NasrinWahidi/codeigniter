<?php

class user_model extends CI_model{

   
    function login($uname,$pass){
        $data['user_name']=$uname;
        $data['password']=$pass;
        $this->db->where($data);
        $querey=$this->db->get('users');

        if($query->num_row()>0){

            return $querey->first_row()->user_id;

        }
        else{
            return 0;

        }
    }

}
