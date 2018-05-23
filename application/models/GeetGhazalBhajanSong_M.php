<?php

class GeetGhazalBhajanSong_M extends CI_Model {
    
    
    
    function getGeetGhazalBhajanSong() {
        $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and GeetGhazalBhajanLyrics !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_GeetGhazalBhajanSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and GeetGhazalBhajanLyrics !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and GeetGhazalBhajanLyrics !='' LIMIT ".$limit;
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