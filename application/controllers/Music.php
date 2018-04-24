<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Music extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('NazrulSong_M');
        //$this->load->model('admin_m');
    }
    
    public function index() {
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        
        $this->load->library('pagination');
        
        $data = array();
        $data['page'] = 'Music';
        $data['page_title'] = 'Music';
        $page_title = 'Nazrul Sangeet';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        // load db and model
        
        
 
        // init params
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['youtubeLink'] = $this->NazrulSong_M->getNazrulVideo();
        $total_records = sizeof($data['youtubeLink']);
        
        $config['base_url'] = base_url() . 'Music/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 3;
        $config['num_links'] = 15;
        
 
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_page_records($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
         
        //$this->load->view('user_listing', $params);
        
        $this->pagination->initialize($data);
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYear($page_title);
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('music/album/nazrul_sangeet_v', $data, TRUE);
        
        $this->load->view('index', $data);
    }
    
    public function ModernBengaliSong(){
       
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        
        $this->load->library('pagination');
        
        $data = array();
        $data['page'] = 'Modern Bengali Song';
        $data['page_title'] = 'Modern Bengali Song';
        $page_title = 'Modern Bengali Song';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        // load db and model
        
        
 
        // init params
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['youtubeLink'] = $this->NazrulSong_M->getModernBengaliSong();
        $total_records = sizeof($data['youtubeLink']);
        
        $config['base_url'] = base_url() . 'Music/ModernBengaliSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
 
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_page_records_Modern_Bengali_Song($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
         
        //$this->load->view('user_listing', $params);
        
        $this->pagination->initialize($data);
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYear($page_title);
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('music/album/modern_bengali_song_v', $data, TRUE);
        
        $this->load->view('index', $data);
    
    }
    
    public function RabindraSangeet(){
       
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        
        $this->load->library('pagination');
        
        $data = array();
        $data['page'] = 'Rabindra Sangeet';
        $data['page_title'] = 'Rabindra Sangeet';
        $page_title = 'Rabindra Sangeet';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        // load db and model
        
        
 
        // init params
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['youtubeLink'] = $this->NazrulSong_M->getRabindraSangeet();
        $total_records = sizeof($data['youtubeLink']);
        
        $config['base_url'] = base_url() . 'Music/RabindraSangeet/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
 
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_page_records_Rabindra_Sangeet($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
         
        //$this->load->view('user_listing', $params);
        
        $this->pagination->initialize($data);
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYear($page_title);
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('music/album/rabindra_sangeet_v', $data, TRUE);
        
        $this->load->view('index', $data);
    
    }
    
    public function getSongList(){
        $songListID = $this->input->get('songListID',TRUE);
        $songID = $this->input->get('songID',TRUE);
        
        $data['FullSongList'] =$this->NazrulSong_M->getFullSongList($songListID,$songID);
        $data['songListID'] = $songListID;
        
        
        
        echo $this->load->view('music/MusicList/FullList',$data, TRUE);
    }
    
    public function getSongDetailsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        //echo $detailsID;
        
        $data['detailsList'] = $this->NazrulSong_M->getDetailsList($detailsID);
        echo $this->load->view('music/MusicList/detailList',$data, TRUE);
    }
    
    public function getDupSongDetailsList(){
        $dupID = $this->input->get('dupID',TRUE);
        
    }

}
