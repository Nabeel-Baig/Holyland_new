<?php

class Meal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('meal_model');
    }



// Function to insert meal
    public function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('meal_plan_desc', 'Meal Name', 'required|min_length[1]|max_length[255]');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_meal');


        } else {
            //Setting values for tabel columns
            $data = array(
                'meal_plan_desc' => $this->input->post('meal_plan_desc'),
                'inactive_flag' => $this->input->post('inactive_flag'),
            );
            //Transfering data to Model
            $this->meal_model->add_meal($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
            $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_meal', $data);
        }
    }

// Function to Fetch credit_list
    public     function meal_list() {
        //$id = $this->uri->segment(3);
        //$data['credits'] = $this->meal_model->show_country();
        //var_dump($datas['single_country']);die;
        //echo json_encode($data);
        $this->load->view('header');
        $this->load->view('aside');
        //$this->load->view('nav_bar');
        $this->load->view('pages/tables/meal_list');
    }

    public function showAllmeal(){
        /*$result = $this->meal_model->showAllmeal();
        echo json_encode($result);*/

        $output = $this->meal_model->showAllmeal();

        // Flags so I can encode html code in json for styling
        echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
    }

    public function addmeal(){
        $result = $this->meal_model->addmeal();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function editmeal(){
        $result = $this->meal_model->editmeal();
        echo json_encode($result);
    }

    public function updatemeal(){
        $result = $this->meal_model->updatemeal();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function deletemeal(){
        $result = $this->meal_model->deletemeal();
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }




}
?>