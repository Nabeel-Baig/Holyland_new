<?php

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

public   function index(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/general.php');
    }

public   function get_clients(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/data.php');
    }


}

?>