<?php

class FerozaBegumSong_M extends CI_Model {
    
    
    
    function getFerozaBegumSong() {
        $sql = "SELECT ID,Year,Album01,Album01C,FerozaBegumSong  FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and FerozaBegumSong  !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getGeetGhazalBhajanLyricsStuffNotation() {
        $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyricsStaffNotation  FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and GeetGhazalBhajanLyricsStaffNotation !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_FerozaBegumSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,FerozaBegumSong FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and FerozaBegumSong !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,FerozaBegumSong FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and FerozaBegumSong !='' LIMIT ".$limit;
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
    
    function get_current_script_GeetGhazalBhajanLyricsStuffNotation($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyricsStaffNotation  FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and GeetGhazalBhajanLyricsStaffNotation !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,GeetGhazalBhajanLyricsStaffNotation  FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and GeetGhazalBhajanLyricsStaffNotation !='' LIMIT ".$limit;
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