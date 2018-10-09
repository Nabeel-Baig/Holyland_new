<?php

class saleman extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('saleman_model');
    }


public   function index(){


    //Including validation library
            $this->load->library('form_validation');

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            //Validating Name Field
            $this->form_validation->set_rules('salesperson_name', 'SalesPErson Name', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_saleman');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'salesperson_name' => $this->input->post('salesperson_name'),
               // 'employee_id' => $this->input->post('employee_id'),
                'commmission_per' => $this->input->post('commmission_per'),
                'commission_fix' => $this->input->post('commission_fix'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->saleman_model->add_saleman($data);
            $data['message'] = 'Data Inserted Successfully';
       // echo "This";
            $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_saleman');
    }
}

public   function saleman_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/saleman_list');
    }


public function showAllsaleman(){
    $output = $this->saleman_model->showAllsaleman();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addsaleman(){
    $result = $this->saleman_model->addsaleman();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editsaleman(){
    $result = $this->saleman_model->editsaleman();
    echo json_encode($result);
  }

  public function updatesaleman(){
    $result = $this->saleman_model->updatesaleman();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deletesaleman(){
    $msg['success'] = $this->saleman_model->deletesaleman();
    echo json_encode($msg);
  }



}
?>