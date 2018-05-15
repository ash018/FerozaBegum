<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        
        $this->load->model('Subscriber_M');
        //$this->load->model('admin_m');
    }
    
    
    public function index() {
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Home';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['header'] = $this->load->view('inc/header', $data, TRUE);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('home/home_v', $data, TRUE);
        $data['footer'] = $this->load->view('inc/footer', $data, TRUE);
        $form_data = $this->input->post();
        $SubscribeName =  $this->input->post("SubscribeName");
        $SubscribeEmail = $this->input->post("SubscribeEmail");
        
        $alertCheck =  $this->Subscriber_M->saveSubscriber($SubscribeName,$SubscribeEmail);
        
        $data['alertCheck'] = $alertCheck;
        
//        if($alertCheck==1){
//            echo '<div class="alert alert-success" role="alert">
//                  <strong>Thank You!</strong> You have successfully subscribed.
//                  </div>';
//        }
//        else{
//            echo 'Fail';
//        }
        
        $this->load->view('home/HomeSubscriber', $data);
        
    }
}
