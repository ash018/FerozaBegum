<?php

class RabindraSong_M extends CI_Model {
    
    
    
    function getRabindraSong() {
        $sql = "SELECT ID,Year,Album01,Album01C,RabindraSangeetLyrics FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and RabindraSangeetLyrics !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_RabindraSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and RabindraSangeetLyrics !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and RabindraSangeetLyrics !='' LIMIT ".$limit;
        }
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
    
	
    
     
}