<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Search_M');
        //$this->load->model('admin_m');
    }
    
    public function index() {
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $data = array();
        $data['page'] = 'Music';
        $data['page_title'] = 'Music';
        $page_title = 'Search';
       
        
        $searchSong = $this->input->post('searchSong',TRUE);
        
        
        $data['searchSong'] = $searchSong;
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if($searchSong!=''){
            $data['results'] = $this->Search_M->getSearchSong($searchSong);
            
           

        }
        else{
            $data["results"] = null;
        }
        
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('search/searchSong', $data, TRUE);
        
        $this->load->view('index', $data);
    }
    
    public function searchSong(){
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
         if (isset($_POST)) {
            $searchSong = $this->input->post('searchSong',TRUE);
         }
        echo $searchSong; 
    }
}
?>

