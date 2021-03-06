<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Subscriber_M extends CI_Model{
    public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
    function saveSubscriber($SubscribeName,$SubscribeEmail){
        $data = array(
            'SubName' => $SubscribeName,
            'SubEmail' => $SubscribeEmail
        );
        $this->db->trans_start();
        $this->db->insert('subscriber',$data); 
        $this->db->trans_complete();

        //return ($this->db->affected_rows() != 1) ? false : true;
        
        if ($this->db->trans_status() === FALSE) {
            return 0;
        } else {
            return 1;
        }
    }
    
    function saveSubmission($SubscribeName,$SubscribeEmail,$SubscribePhone,$file_name){
        $data = array(
            'SubmissionName' => $SubscribeName,
            'SubmissionEmail' => $SubscribeEmail,
            'SubmissionPhone' => $SubscribePhone,
            'FileName' => $file_name
        );
        $this->db->trans_start();
        $this->db->insert('submission',$data); 
        $this->db->trans_complete();

        //return ($this->db->affected_rows() != 1) ? false : true;
        
        if ($this->db->trans_status() === FALSE) {
            return 0;
        } else {
            return 1;
        }
    }
}
