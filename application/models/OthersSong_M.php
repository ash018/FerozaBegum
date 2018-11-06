<?php

class OthersSong_M extends CI_Model {
    
    
    
    
    function getOthersSong() {
        $sql = "SELECT ID,Year,Album01,Album01C,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and OtherLyrics !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getOthersSongLyricsStuffNotation() {
        $sql = "SELECT ID,Year,Album01,Album01C,OtherLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and OtherLyricsStuffNotation !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getLetter(){
        $sql = "SELECT ID,Year,Album01,Album01C,Letter FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Letter !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getScript(){
        $sql = "SELECT ID,Year,Album01,Album01C,Script FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Script !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getOthers(){
        $sql = "SELECT ID,Year,Album01,Album01C,Others FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Others !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_Others($limit, $start){
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,Others FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Others  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,Others FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
                and Others !='' LIMIT ".$limit;
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
    
    function get_current_script_Script($limit, $start){
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,Script FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Script  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,Script FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
                and Script !='' LIMIT ".$limit;
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
    
    function get_current_script_Letter($limit, $start){
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,Letter FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and Letter  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,Letter FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
                and Letter !='' LIMIT ".$limit;
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
    
    
    
    function get_current_script_OthersSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and OtherLyrics  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,OtherLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
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
    
    function get_current_script_OthersSongLyricsStuffNotation($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,OtherLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and OtherLyricsStuffNotation  !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,OtherLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
                and OtherLyricsStuffNotation !='' LIMIT ".$limit;
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