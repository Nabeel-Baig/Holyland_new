<?php

class Travel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('travel_model');
    }


// Function to insert Travel
   public     function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('travel_type_desc', 'Travel Type', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_travel');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'travel_type_desc' => $this->input->post('travel_type_desc'),
                'travel_type_sht_desc' => $this->input->post('travel_type_sht_desc'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->travel_model->add_travel($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_travel', $data);
}
}

// Function to Fetch Travel_list
public     function travel_list() {
            //$id = $this->uri->segment(3);
            //$data['credits'] = $this->travel_model->show_country();
            //var_dump($datas['single_country']);die;
            //echo json_encode($data);
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/travel_list');
}

public function showAlltravel(){
  /*  $result = $this->travel_model->showAlltravel();
    echo json_encode($result);
  }

  public function addtravel(){
    $result = $this->travel_model->addtravel();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);*/


    $output = $this->travel_model->showAlltravel();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function edittravel(){
    $result = $this->travel_model->edittravel();
    echo json_encode($result);
  }

  public function updatetravel(){
    $result = $this->travel_model->updatetravel();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletetravel(){
    $result = $this->travel_model->deletetravel();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }



}
?>