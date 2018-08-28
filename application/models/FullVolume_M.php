<?php

class FullVolume_M extends CI_Model {
    
    
    
    function getFullVolume() {
        $sql = "SELECT ID,Year,Album01,Category,SubCategory  FROM `ferozatable` where Header='Songbook' and Category='Feroza Begum' and SubCategory LIKE '%Notebook%'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getFullVolumeK() {
        $sql = "SELECT ID,Year,Album01,SubCategory,Category  FROM `ferozatable`
                where Header='Songbook' and Category='Kamal Das Gupta'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getFullVolumeOthers() {
        $sql = "SELECT ID,Year,Album01,Category,SubCategory  FROM `ferozatable`
                where Header='Songbook' and Category='Others'";
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