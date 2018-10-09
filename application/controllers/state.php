<?php

class State extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('country_model');
        $this->load->model('state_model');
    }


    public   function index(){
   //var_dump($this->input->post('country'));die;
        //$this->load->model('state_model','form_insert', TRUE);
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('country', 'Country Name', 'required|min_length[0]|max_length[4]');

        //Validating Name Field
        $this->form_validation->set_rules('state_name', 'State Name', 'required|min_length[3]|max_length[15]');

        //Validating Email Field
        $this->form_validation->set_rules('state_sht_name', 'State Short Name', 'required|min_length[2]|max_length[15]');


        //Validating Radio Button
        $this->form_validation->set_rules('inactive_flag', 'Status', 'required|min_length[0]|max_length[1]');

       $data =  array();

       $data['countries'] = $this->country_model->getCountries_list();

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_state', $data);
            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns

            $state = array(
                'state_name' => $this->input->post('state_name'),
                'state_sht_name' => $this->input->post('state_sht_name'),
                'inactive_flag' => $this->input->post('inactive_flag'),
               'country_id' => $this->input->post('country'),
               
            );

            //Transfering data to Model
            $this->state_model->state_insert($state);
            $state['message'] = 'Data Inserted Successfully';
            //Loading View
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_state', $state);
        }
    }


public      function state_list(){
          /* $id = $this->uri->segment(3);
            $data =  array();
            $data['countries'] = $this->state_model->getCountries();
            /*$data['states'] = $this->state_model->show_state();*/
            //$data['single_state'] = $this->state_model->show_state_id($id);*/
            $data['countries'] = $this->country_model->getCountries_list();
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/state_list', $data);
}


public function showAllstate(){
    $output = $this->state_model->showAllstate();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addstate(){
    $result = $this->state_model->addstate();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editstate(){
    $result = $this->state_model->editstate();
    echo json_encode($result);
  }

  public function updatestate(){
    $result = $this->state_model->updatestate();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deletestate(){
    $msg['success'] = $this->state_model->deletestate();
    echo json_encode($msg);
  }



}
?>