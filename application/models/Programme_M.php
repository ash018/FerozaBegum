<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programme_M extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function getTvProgramFB($program,$programCat){
        $sql = "SELECT * FROM programmenew WHERE ProgramType = '$program' AND ProgramCategory='$programCat' ";
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
    
    public function getTvProgram($program){
        $sql = "SELECT * FROM programmenew WHERE ProgramType = '$program' ";
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
    
    public function getVideoFootage($program){
        $sql = "SELECT * FROM programmenew WHERE ProgramType = '$program' ";
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
    
    public function getStageShow($program){
        $sql = "SELECT * FROM programmenew WHERE ProgramType = '$program' ";
        
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
    
    public function getFullProgramList($programListID){
        $sql = "SELECT * FROM programmenew WHERE EntryCode = '$programListID'";
        $query =  $this->db->query($sql);
        return $query->result();
    }

}