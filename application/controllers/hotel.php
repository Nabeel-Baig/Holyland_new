<?php

class hotel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
public   function index(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_hotel.php');
    }

public   function hotel_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/hotel_list.php');
    }

}
?>
