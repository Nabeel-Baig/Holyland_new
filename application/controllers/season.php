<?php

class Season extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('season_model');
    }


public   function index(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_season.php');
    }

public   function season_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/season_list.php');
    }



}
?>