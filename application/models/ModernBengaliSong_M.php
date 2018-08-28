<?php

class ModernBengaliSong_M extends CI_Model {
    
    
    
    function getModernBengaliSong() {
        $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliSongLyrics FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliSongLyrics !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getModernBengaliLyricsStuffNotation() {
        $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliLyricsStuffNotation FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliLyricsStuffNotation !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_script_ModernBengaliSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliSongLyrics FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliSongLyrics !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliSongLyrics FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliSongLyrics !='' LIMIT ".$limit;
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
    
    function get_current_script_ModernBengaliLyricsStuffNotation($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliLyricsStuffNotation FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliLyricsStuffNotation !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,ModernBengaliLyricsStuffNotation FROM ferozatable
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliLyricsStuffNotation !='' LIMIT ".$limit;
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