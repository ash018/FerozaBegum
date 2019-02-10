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
        
        $this->load->library('pagination');
        $searchSong = $this->input->post('searchSong',TRUE);
        $x = 0;
        $data['searchSong'] = $searchSong;
        
        $limit_per_page = 10;
        
        if($searchSong!=''){
            $data['song'] = $this->Search_M->getSearchSong($searchSong);
            $limit_per_page = 10;
            $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           
            $total_records = sizeof($data['song']);

            $config['base_url'] = base_url() . 'Search/index/';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['num_links'] = 15;
            $config['reuse_query_string'] = TRUE;
            $config['searchSong'] = $searchSong;
            
            if ($total_records > 0) 
            {
            // get current page records
                $x+=1;
                
                
                $data["results"] = $this->Search_M->get_current_page_records_SearchSong($searchSong,$limit_per_page, $start_index);
                
                $this->pagination->initialize($config);

                // build paging links
                $data["links"] = $this->pagination->create_links();
            }
            $this->pagination->initialize($data);

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

