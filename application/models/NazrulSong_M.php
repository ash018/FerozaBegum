<?php

class NazrulSong_M extends CI_Model {
    
    
    function getCollectedRecording($page_title){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable');
        $where = "Header='Music' and Category='$page_title' and SubCategory='Collected Recording' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function get_current_page_records_CollectedRecording($page_title,$limit, $start){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable',$limit,$start);
        $where = "Header='Music' and Category='$page_title' and SubCategory='Collected Recording' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getNazrulVideo() {
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Nazrul Sangeet' and SubCategory='Full Album' and LiveLink !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getModernBengaliSong(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Modern Bengali Song' and SubCategory='Full Album' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function getRabindraSangeet(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Rabindra Sangeet' and SubCategory='Full Album' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_page_records($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Nazrul Sangeet' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Nazrul Sangeet' and LiveLink !='' LIMIT ".$limit;
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
    
    function get_current_page_records_Modern_Bengali_Song($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Modern Bengali Song' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Modern Bengali Song' and LiveLink !='' LIMIT ".$limit;
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
    
    function get_current_page_records_Rabindra_Sangeet($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Rabindra Sangeet' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Rabindra Sangeet' and LiveLink !='' LIMIT ".$limit;
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
    
    function get_current_script_records($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID FROM ferozatable where Header='Songbook' and SubCategory = 'Single Pages' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID FROM ferozatable where Header='Songbook' and SubCategory = 'Single Pages' LIMIT ".$limit;
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
    
    function get_current_script_NazrulSong($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyrics !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyrics !='' LIMIT ".$limit;
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
    
    function get_current_script_NazrulSongScript($limit, $start){
        
        if($start!=0){
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyricsStuffNotation !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyricsStuffNotation !='' LIMIT ".$limit;
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
    
    function getRangeYear($page_title){
        $sql = "SELECT TRUNCATE(MIN(ReleaseYearAlbum),-1) as MN,TRUNCATE(MAX(ReleaseYearAlbum),-1) as MX,"
                . " TRUNCATE(MAX(ReleaseYearAlbum),-1) - TRUNCATE(MIN(ReleaseYearAlbum),-1) as Diff"
                . " FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='".$page_title."'"
                . " and ReleaseYearAlbum !='Undated' and ReleaseYearAlbum !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getFullSongList($listID,$songID){
        if($listID == 1 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 1){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Nazrul Sangeet'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Rabindra Sangeet'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 2){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Rabindra Sangeet'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Modern Bengali Song'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 3){
            $sql = "SELECT LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Modern Bengali Song'";
            $query =  $this->db->query($sql);
        }
        
        
        return $query->result();
    }
    
    function getDetailScriptList($listID){
        if($listID == 1){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1980' and '1989' ";
            $query =  $this->db->query($sql);
        }
        if($listID == 4){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6){
            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year ='Undated'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getDetailsList($detailsID){
        
        $sql = "SELECT Category,SongTitle,ReleaseYearSong,ReleaseYearAlbum,AlbumTitle,LiveLink,Script01,"
                . "`Album01`,`Album02`, `Album03`,`Album04`,`Album05`,`Album06`,`Album07`,`Album08`,`Album09`,`Album10`"
                .",Remarks,AlbumFormat,VocalArtist,Lyricist,MusicComposer,MusicDirector,MusicArranger,SoundRecordist,RecordingStudio,Producer,RecordLabel"
                . " from `ferozatable` where Album01 = '" . $detailsID."'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getScriptDetailsList($detailsID){
        $sql = "SELECT * FROM ferozatable WHERE Script01= '" . $detailsID."' or Script02='" . $detailsID."'  or Script03 = '" . $detailsID."' or Script04='" . $detailsID."'";
         
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    
    function getScriptList(){
        $sql = "SELECT Album01,ID FROM ferozatable where Header='Songbook' and SubCategory = 'Single Pages'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    
    function getNazrulSong(){
        $sql = "SELECT ID,Year,Album01,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyrics !=''
               ";
        
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getNazrulSongScript(){
        $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' and SubCategory = 'Single Pages'
                and NazrulSangeetLyricsStuffNotation !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
   
     
}