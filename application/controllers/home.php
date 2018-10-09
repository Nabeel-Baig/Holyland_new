<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
    function index() {
        
            //Loading View
            $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('home_view');
        
    }






}

?>