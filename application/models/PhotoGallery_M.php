<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class PhotoGallery_M extends CI_Model {
    

    public function getSinglePhoto(){
        $sql = "SELECT ID,PhotoCode,Year,Caption FROM photo WHERE Type='Single Photo';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    public function getFamilyLifePhoto(){
        $sql = "SELECT ID,PhotoCode,Year,Caption FROM photo WHERE Type='Family Life';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    public function getSingingCareerPhoto(){
        $sql = "SELECT ID,PhotoCode,Year,Caption FROM photo WHERE Type='Singing Career';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    public function getWithMaestroPhoto(){
        $sql = "SELECT ID,PhotoCode,Year,Caption FROM photo WHERE Type='With Maestro';";
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    public function getDetailsList($detailsID){
        
        $sql = "SELECT ID,PhotoCode,Year,PressNews01,PressNews02,PressNews03,Caption"
                . " from `photo` where PhotoCode = '" . $detailsID."'";
        //echo $sql;
        $query =  $this->db->query($sql);
        return $query->result();
    }
    
    function getPressNewsDetailsList($detailsID){
        
        $sql = "SELECT ID,NewsCode,Year,Type,Language,Photograph01,Photograph02,Photograph03,Photograph04,Photograph05,Photograph06,Photograph07,Photograph08,Photograph09,Photograph10,VideoClip,AudioClip,Caption"
               . " from `press` where NewsCode = '" . $detailsID."'";
        //echo $sql;
        $query =  $this->db->query($sql);
        return $query->result();
    }
}
