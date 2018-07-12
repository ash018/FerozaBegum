<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->model('Subscriber_M');
            
        }

        public function index()
        {
            $data = array();
            $data['page'] = 'Home';
            $data['page_title'] = 'Home';
            //$data['userid'] = $this->session->userdata('userid');
            //$data['UserName'] = $this->session->userdata('UserName');
            $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $this->load->view('home/home_v', $data, TRUE);
            $this->load->view('upload', $data);
        }

        public function upload_file()
        {
                
                $data = array();
                $data['page'] = 'Home';
                $data['page_title'] = 'Home';
                //$data['userid'] = $this->session->userdata('userid');
                //$data['UserName'] = $this->session->userdata('UserName');
                $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
                $data['main_content'] = $this->load->view('home/home_v', $data, TRUE);
            
                $config['upload_path']          = './uploads/';
                //$config['upload_path']          = 'D:\xampp\htdocs\img';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|xlsx';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                
                $SubscribeName =  $this->input->post("SubscribeName");
                $SubscribeEmail = $this->input->post("SubscribeEmail");
                $SubscribePhone = $this->input->post("SubscribePhone");
                $file_name="";
                if ( ! $this->upload->do_upload('userfile'))
                {
                        
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload', $error);
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                    $file_name = $upload_data['file_name'];
                    
                    $this->load->view('upload', $data);
                }
                $this->Subscriber_M->saveSubmission($SubscribeName,$SubscribeEmail,$SubscribePhone,$file_name);
                
        }
}
