<?php

class Welcome_model extends CI_Model{


    public function cadastrar($data){
        if(!empty($data))
        {
           $this->db->insert('form', $data);
        }
    }
}