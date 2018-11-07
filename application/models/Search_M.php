<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Search_M extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getSearchSong($searchSong){
        $sql = "SELECT Category,Year,LiveLink, SongTitle,ReleaseYearSong,ReleaseYearAlbum,AlbumTitle,AlbumFormat,Album01 FROM ferozatable WHERE SongTitle LIKE '%$searchSong%' AND LiveLink!=''";
        $query =  $this->db->query($sql);
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
    
    function get_current_page_records_SearchSong($searchSong,$limit, $start){
        echo $sql = "SELECT Category,Year,LiveLink, SongTitle,ReleaseYearSong,ReleaseYearAlbum,AlbumTitle,AlbumFormat,Album01 FROM ferozatable WHERE SongTitle LIKE '%$searchSong%' AND LiveLink!='' LIMIT ".$start.','.$limit;
        $query = $this->db->query($sql);
        return $query->result();
        
    }

}