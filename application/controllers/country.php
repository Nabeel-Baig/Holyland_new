<?php

class country extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('country_model');
    }

public   function index(){
   
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('country_name', 'Country Name', 'required|min_length[3]|max_length[255]');

       
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_country');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'country_name' => $this->input->post('country_name'),
                'country_sht_name' => $this->input->post('country_sht_name'),
                'inactive_flag' => $this->input->post('inactive_flag'),
               
            );
            //Transfering data to Model
            $this->country_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View


             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_country', $data);
        }
    }
      

public     function country_list() {
           // lOADING View
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/country_list');
}

public function showAllcountry(){
    $output = $this->country_model->showAllcountry();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addcountry(){
    $result = $this->country_model->addcountry();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editcountry(){
    $result = $this->country_model->editcountry();
    echo json_encode($result);
  }

  public function updatecountry(){
    $result = $this->country_model->updatecountry();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deletecountry(){
    $msg['success'] = $this->country_model->deletecountry();
    echo json_encode($msg);
  }


}
?>