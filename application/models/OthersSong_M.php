<?php

class OthersSong_M extends CI_Model {
    
    
    
    function getOthersSong() {
        $sql = "SELECT ID,Year,Album01,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and OtherLyrics !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_OthersSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and OtherLyrics  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and OtherLyrics !='' LIMIT ".$limit;
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