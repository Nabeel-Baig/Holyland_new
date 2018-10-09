<?php

class Supplier extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }

 

public   function index(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_supplier.php');
    } 

public   function supplier_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/supplier_list.php');
    }
}
?>