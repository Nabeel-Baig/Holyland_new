<?php

class Season extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('season_model');
        $this->load->model('term_model');
    }


public   function index(){

    $data =  array();
       $datass =  array();
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('seeson_name', 'Season Name', 'required|min_length[1]|max_length[255]');

       /*$data['countries'] = $this->state_model->getState_list();*/

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_season');
            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns

            $season = array(
                'seeson_name' => $this->input->post('seeson_name'),
                'gor_from_date' => $this->input->post('gor_from_date'),
                'gor_to_date' => $this->input->post('gor_to_date'),
               'hij_from_date' => $this->input->post('hij_from_date'),
               'hij_to_date' => $this->input->post('hij_to_date'),
               'inactive_flag' => $this->input->post('inactive_flag'),
               
            );

            //Transfering data to Model
            $this->season_model->season_insert($season);
            $season['message'] = 'Data Inserted Successfully';
    
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_season', $season);
    }
}


public   function season_list(){
     $id = $this->uri->segment(3);
            $data =  array();
       $data['terms'] = $this->term_model->getTerms();
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/season_list', $data);
    }


public function showAllseason(){
    $output = $this->season_model->showAllseason();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addseason(){
    $result = $this->season_model->addseason();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editseason(){
    $result = $this->season_model->editseason();
    echo json_encode($result);
  }

  public function updateseason(){
    $result = $this->season_model->updateseason();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deleteseason(){
    $msg['success'] = $this->season_model->deleteseason();
    echo json_encode($msg);
  }


}
?>