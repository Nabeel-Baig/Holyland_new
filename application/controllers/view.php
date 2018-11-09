<?php

class view extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('view_model');
    }

public   function index(){
   
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('hot_view_desc', 'view Name', 'required|min_length[1]|max_length[255]');

       
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_view');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'hot_view_desc' => $this->input->post('hot_view_desc'),
                'hot_view_sht_name' => $this->input->post('hot_view_sht_name'),
                'inactive_flag' => $this->input->post('inactive_flag'),
               
            );
            //Transfering data to Model
            $this->view_model->insert_view($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View


             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_view', $data);
        }
    }
      

public     function view_list() {
           // lOADING View
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/view_list');
}

public function showAllview(){
    $output = $this->view_model->showAllview();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addview(){
    $result = $this->view_model->addview();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editview(){
    $result = $this->view_model->editview();
    echo json_encode($result);
  }

  public function updateview(){
    $result = $this->view_model->updateview();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deleteview(){
    $msg['success'] = $this->view_model->deleteview();
    echo json_encode($msg);
  }


}
?>