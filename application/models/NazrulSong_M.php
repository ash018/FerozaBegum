<?php

class NazrulSong_M extends CI_Model {
    
    
    function getMixedRecording($page_title){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable');
        $where = "Header='Music' and Category='$page_title' and SubCategory='Mixed Album' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getSinglesRecording($page_title){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable');
        $where = "Header='Music' and Category='$page_title' and SubCategory='Single Song' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getSinglesRabindraRecording($page_title){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable');
        $where = "Header='Music' and Category='$page_title' and SubCategory='Single Song' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function get_current_page_records_MixedRecording($page_title,$limit, $start){

        $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='".$page_title."' and SubCategory='Mixed Album' and LiveLink !='' LIMIT ".$start.','.$limit;
        
        $query =  $this->db->query($sql);
        return $query->result(); 
            
    }
    
    
    
    function get_current_page_records_SinglesRecording($page_title,$limit, $start){

        $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='".$page_title."' and SubCategory='Single Song' and LiveLink !='' LIMIT ".$start.','.$limit;
        $query =  $this->db->query($sql);
        return $query->result(); 
            
    }
    
    function get_current_page_records_Kabbo_Geeti_Song($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Kabbo Geeti Song' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Kabbo Geeti Song' and LiveLink !='' LIMIT ".$limit;
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
    
    function get_current_page_records_Hindustani_Song($limit, $start){
        if($start!=0){
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Hindustani Geet' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID,LiveLink FROM ferozatable where Header='Music' and Category='Hindustani Geet' and LiveLink !='' LIMIT ".$limit;
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
    
    function getCollectedRecording($page_title){
        $this->db->select('Album01,ID, LiveLink');
        $this->db->from('ferozatable');
        $where = "Header='Music' and Category='$page_title' and SubCategory='Collected Recording' and LiveLink !=''";
        $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function get_current_page_records_CollectedRecording($page_title,$limit, $start){
        
        
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='$page_title' and SubCategory='Collected Recording' and LiveLink !='' LIMIT ".$start.','.$limit;
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getNazrulVideo() {
        //$sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Nazrul Sangeet' and SubCategory='Full Album' and LiveLink !=''";
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and SubCategory='Solo Album' and LiveLink !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getModernBengaliSong(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Modern Bengali Song' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function getRabindraSangeet(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Rabindra Sangeet' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function getKabboGeetiSong(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Kabbo Geeti Song' and SubCategory='Full Album' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function getHindustaniSong(){
        $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and Category='Hindustani Geet' and SubCategory='Full Album' and LiveLink !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_current_page_records($limit, $start){
        
        if($start!=0){
            $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and SubCategory='Solo Album' and LiveLink !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID, LiveLink FROM ferozatable where Header='Music' and SubCategory='Solo Album' and LiveLink !='' LIMIT ".$limit;
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
            $sql = "SELECT Album01,ID FROM ferozatable where NazrulSangeetLyrics !='' and Album01C !='' and Category='Feroza Begum' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT Album01,ID FROM ferozatable where NazrulSangeetLyrics !='' and Album01C !='' and Category='Feroza Begum' LIMIT ".$limit;
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
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyrics !='' and Album01C!='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum'
                and NazrulSangeetLyrics !='' and Album01C!='' LIMIT ".$limit;
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
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyricsStuffNotation !='' LIMIT ".$start.','.$limit;
        }
        else{
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
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
    
    function getRangeYearSong($Category,$filter){
        
        if($filter=='NazrulSong'){
            $sql = "SELECT MIN(Year) as MN,MAX(Year) as MX,MAX(Year) - MIN(Year) as Diff"
                    . " FROM `ferozatable` WHERE NazrulSangeetLyrics !='' and Album01C !='' and Category='$Category' and Year !='Undated'";
            $query =  $this->db->query($sql);
            return $query->result();
        }
        if($filter=='NazrulSongScript'){
            $sql = "SELECT MIN(Year) as MN,MAX(Year) as MX,MAX(Year) - MIN(Year) as Diff"
                    . " FROM `ferozatable` WHERE NazrulSangeetLyricsStuffNotation !='' and Album01C !='' and Category='$Category' and Year !='Undated'";
            $query =  $this->db->query($sql);
            return $query->result();
        }
        if($filter=='RabindraSong'){
            $sql = "SELECT MIN(Year) as MN,MAX(Year) as MX,MAX(Year) - MIN(Year) as Diff"
                    . " FROM `ferozatable` WHERE RabindraSangeetLyrics !='' and Album01C !='' and Category='$Category' and Year !='Undated'";
            $query =  $this->db->query($sql);
            return $query->result();
        }
        if($filter='ModernBengaliSong'){
            $sql = "SELECT MIN(Year) as MN,MAX(Year) as MX,MAX(Year) - MIN(Year) as Diff"
                    . " FROM `ferozatable` WHERE ModernBengaliSongLyrics !='' and Album01C !='' and Category='$Category' and Year !='Undated'";
            $query =  $this->db->query($sql);
            return $query->result();
            
        }
    }
    
    function getRangeYear($page_title){
        $sql = "SELECT TRUNCATE(MIN(ReleaseYearAlbum),-1) as MN,TRUNCATE(MAX(ReleaseYearAlbum),-1) as MX,"
                . " TRUNCATE(MAX(ReleaseYearAlbum),-1) - TRUNCATE(MIN(ReleaseYearAlbum),-1) as Diff"
                . " FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='".$page_title."'"
                . " and ReleaseYearAlbum !='Undated' and ReleaseYearAlbum !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getRangeYearWithSubCategory($page_title,$SubCategory){
        $sql = "SELECT TRUNCATE(MIN(ReleaseYearAlbum),-1) as MN,TRUNCATE(MAX(ReleaseYearAlbum),-1) as MX,"
                . " TRUNCATE(MAX(ReleaseYearAlbum),-1) - TRUNCATE(MIN(ReleaseYearAlbum),-1) as Diff"
                . " FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='".$page_title."' and SubCategory='".$SubCategory."'"
                . " and ReleaseYearAlbum !='Undated' and ReleaseYearAlbum !=''";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getFullSongBookList($SongbookID,$bookID){
        
        if($SongbookID>1900 && $bookID==1){
            $rSongYear = $SongbookID+9;
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyrics !=''  and CAST(Year as decimal(10,5)) BETWEEN '$SongbookID' and '$rSongYear'
               ";
            $query =  $this->db->query($sql);
        }
        
        if($SongbookID==1 && $bookID==1){
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyrics !='' 
               ";
            $query =  $this->db->query($sql);
        }
        if($SongbookID==2 && $bookID==1){
            $sql = "SELECT ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                    where Header='Songbook' and Category='Feroza Begum' 
                    and NazrulSangeetLyrics !='' 
                    and Year = 'Undated'
                ";
            $query =  $this->db->query($sql);
        }
        
        return $query->result();
    }
    
    function getMixedFullSongList($listID,$songID){
        if($listID > 1900 && $songID == 1){
            $bYearlistID = $listID + 9;
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet' and SubCategory='Mixed Album' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '$listID' and '$bYearlistID'";
            $query =  $this->db->query($sql);
            return $query->result();
        }
    }
    
    function getCollectedFullSongList($listID,$songID){
        
        if($listID > 1900 && $songID == 1){
            $bYearlistID = $listID + 9;
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet' and SubCategory='Collected Recording' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '$listID' and '$bYearlistID'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet' and SubCategory='Collected Recording'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and SubCategory='Collected Recording' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and SubCategory='Collected Recording' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and SubCategory='Collected Recording' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and SubCategory='Collected Recording' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Nazrul Sangeet' and SubCategory='Collected Recording'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList19401950($listID,$songID){
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1940' and '1950'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1940' and '1950'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1940' and '1950'";
            $query =  $this->db->query($sql);
        }
    }
    
    function getFullSongList19501960($listID,$songID){
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1950' and '1960'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1950' and '1960'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1950' and '1960'";
            $query =  $this->db->query($sql);
        }
    }
    
    function getFullSongList19601970($listID,$songID){
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1960' and '1970'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1960' and '1970'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1960' and '1970'";
            $query =  $this->db->query($sql);
        }
    }
    
    function getFullSongList19701980($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1980'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1980'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1980'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList19801990($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1990'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1990'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1990'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList19902000($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '2000'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '2000'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '2000'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList20002010($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2010'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2010'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2010'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList20102015($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2010' and '2015'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2010' and '2015'";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2010' and '2015'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongListOthers($listID,$songID){
        
        if($listID==1){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum='Undated' and Category='Nazrul Sangeet'";
            $query =  $this->db->query($sql);
        }
        if($listID==2){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum='Undated' and Category='Rabindra Sangeet' ";
            $query =  $this->db->query($sql);
        }
        if($listID==3){
            $sql="SELECT ID,Category,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum='Undated' and Category='Modern Bengali Song'";
            $query =  $this->db->query($sql);
        }
        return $query->result();
    }
    
    function getFullSongList($listID,$songID){
        
        if($listID > 1900 && $songID == 1){
            $bYearlistID = $listID + 9;
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '$listID' and '$bYearlistID'";
            $query =  $this->db->query($sql);
        }
        
        if($listID > 1900 && $songID == 2){
            $bYearlistID = $listID + 9;
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '$listID' and '$bYearlistID'";
            $query =  $this->db->query($sql);
        }
        
        if($listID > 1900 && $songID == 3){
            $bYearlistID = $listID + 9;
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '$listID' and '$bYearlistID'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Nazrul Sangeet'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Nazrul Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 1){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Nazrul Sangeet'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Rabindra Sangeet'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Rabindra Sangeet' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 2){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Rabindra Sangeet'";
            $query =  $this->db->query($sql);
        }
        
        if($listID == 1 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and Category='Modern Bengali Song'";
            $query =  $this->db->query($sql);
        }
        if($listID == 2 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1970' and '1979'";
            $query =  $this->db->query($sql);
        }
        if($listID == 3 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1980' and '1989' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 4 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 5 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum!='Undated' and Category='Modern Bengali Song' and CAST(ReleaseYearAlbum as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
            $query =  $this->db->query($sql);
        }
        if($listID == 6 && $songID == 3){
            $sql = "SELECT ID,SubCategory,LiveLink,RecordLabel,ReleaseYearAlbum,AlbumTitle,`SongTitle` FROM `ferozatable` WHERE AlbumTitle!='' and SongTitle!='' and ReleaseYearAlbum ='Undated' and Category='Modern Bengali Song'";
            $query =  $this->db->query($sql);
        }
        
        
        return $query->result();
    }
    
    function getDetailScriptList($SongbookID,$script_id){
        if($SongbookID>1900 && $script_id==1){
            $rSongYear = $SongbookID+9;
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and RabindraSangeetLyrics !='' and CAST(Year as decimal(10,5)) BETWEEN '$SongbookID' and '$rSongYear'
               ";
            $query =  $this->db->query($sql);
        }
        
        if($SongbookID==1 && $script_id==1){
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and RabindraSangeetLyrics !='' 
               ";
            $query =  $this->db->query($sql);
        }
        if($SongbookID==2 && $script_id==1){
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                    where Header='Songbook' and Category='Feroza Begum' 
                    and RabindraSangeetLyrics !=''
                    and Year = 'Undated'
                ";
            $query =  $this->db->query($sql);
        }
        if($SongbookID>1900 && $script_id==2){
            $rSongYear = $SongbookID+9;
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliSongLyrics !='' and CAST(Year as decimal(10,5)) BETWEEN '$SongbookID' and '$rSongYear'
               ";
            $query =  $this->db->query($sql);
        }
        
        if($SongbookID==1 && $script_id==2){
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and ModernBengaliSongLyrics !='' 
               ";
            $query =  $this->db->query($sql);
        }
        if($SongbookID==2 && $script_id==2){
            $sql = "SELECT ID,Year,Album01,RabindraSangeetLyrics FROM `ferozatable`
                    where Header='Songbook' and Category='Feroza Begum' 
                    and ModernBengaliSongLyrics !=''
                    and Year = 'Undated'
                ";
            $query =  $this->db->query($sql);
        }
        
//        if($listID == 1){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages'";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 2){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1970' and '1979'";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 3){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1980' and '1989' ";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 4){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 5){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 6){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and Year ='Undated'";
//            $query =  $this->db->query($sql);
//        }
        return $query->result();
    }
    
    function getDetailStuffNotationList($SongbookID){
        if($SongbookID>1900){
            $rSongYear = $SongbookID+9;
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyricsStuffNotation !='' and CAST(Year as decimal(10,5)) BETWEEN '$SongbookID' and '$rSongYear'
               ";
            $query =  $this->db->query($sql);
        }
        
        if($SongbookID==1){
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyricsStuffNotation !='' 
               ";
            $query =  $this->db->query($sql);
        }
        if($SongbookID==2){
            $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                    where Header='Songbook' and Category='Feroza Begum' 
                    and NazrulSangeetLyricsStuffNotation !=''
                    and Year = 'Undated'
                ";
            $query =  $this->db->query($sql);
        }
//        if($listID == 1){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !=''";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 2){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !='' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1970' and '1979'";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 3){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !='' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1980' and '1989' ";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 4){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !='' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '1990' and '1999' ORDER BY ReleaseYearAlbum";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 5){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !='' and Year!='Undated' and CAST(Year as decimal(10,5)) BETWEEN '2000' and '2014' ORDER BY ReleaseYearAlbum";
//            $query =  $this->db->query($sql);
//        }
//        if($listID == 6){
//            $sql = "SELECT Album01,ID FROM `ferozatable` where Header='Songbook' and SubCategory = 'Single Pages' and NazrulSangeetLyricsStuffNotation !='' and Year ='Undated'";
//            $query =  $this->db->query($sql);
//        }
        return $query->result();
    }
    
    function getDetailsList($detailsID){
        
//        $sql = "SELECT Category,SongTitle,ReleaseYearSong,ReleaseYearAlbum,AlbumTitle,LiveLink,Script01,"
//                . "`Album01`,`Album02`, `Album03`,`Album04`,`Album05`,`Album06`,`Album07`,`Album08`,`Album09`,`Album10`"
//                .",Remarks,AlbumFormat,VocalArtist,Lyricist,MusicComposer,MusicDirector,MusicArranger,SoundRecordist,RecordingStudio,Producer,RecordLabel"
//                . " from `ferozatable` where Album01 = '" . $detailsID."'";
        $sql = "SELECT Category,SongTitle,ReleaseYearSong,ReleaseYearAlbum,AlbumTitle,LiveLink,Notebook01,"
                . "`Album01`,`Album02`, `Album03`,`Album04`,`Album05`,`Album06`,`Album07`,`Album08`,`Album09`,`Album10`"
                .",Remarks,AlbumFormat,VocalArtist,Lyricist,MusicComposer,MusicDirector,MusicArranger,SoundRecordist,RecordingStudio,Producer,RecordLabel"
                . " from `ferozatable` where Album01 = '" . $detailsID."'";
        
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getScriptDetailsList($detailsID){
        
        
        $sql = "SELECT * FROM ferozatable WHERE Album01 = '" . $detailsID."'";
        $query =  $this->db->query($sql);
        return $query->result();
        
    }
    
    function getInfoDetailsList($script_id){
        $sql = "SELECT * FROM ferozatable WHERE Album01 = '" . $script_id."'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    
    function getScriptList(){
        $sql = "SELECT Album01,ID FROM ferozatable WHERE Category='Nazrul Sangeet' and SubCategory = 'Single Song'";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    
    function getNazrulSong(){
        $sql = "SELECT Category,SubCategory,ID,Year,Album01,Album01C,NazrulSangeetLyrics FROM `ferozatable`
                where NazrulSangeetLyrics !='' and Album01C !='' and Category='Feroza Begum'
               ";
        
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getNazrulSongScript(){
        $sql = "SELECT ID,Year,Album01,NazrulSangeetLyricsStuffNotation FROM `ferozatable`
                where Header='Songbook' and Category='Feroza Begum' 
                and NazrulSangeetLyricsStuffNotation !=''";
        $query = $this->db->query($sql);
        return $query->result();
    }
   
     
}