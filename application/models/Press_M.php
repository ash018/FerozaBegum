<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Press_M extends CI_Model {
    

    public function getPressEnglishPhoto(){
        $sql = "SELECT ID,NewsCode,Year,Caption FROM press WHERE Language='English';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    public function getPressBengaliPhoto(){
        $sql = "SELECT ID,NewsCode,Year,Caption FROM press WHERE Language='Bengali';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    
}
