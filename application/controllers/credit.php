<?php

class Credit extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('credit_model');
    }


// Function to insert Credit
   public     function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('credit_term_desc', 'Credit Terms', 'required|min_length[1]|max_length[25]');

        //Validating Name Field
        $this->form_validation->set_rules('no_of_days', 'Days', 'required|min_length[1]|max_length[25]');

        //Validating Radio Button
        $this->form_validation->set_rules('inactive_flag', 'Status', 'required|min_length[0]|max_length[1]');
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_credit');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'no_of_days' => $this->input->post('no_of_days'),
                'credit_term_desc' => $this->input->post('credit_term_desc'),
                'note' => $this->input->post('note'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->credit_model->add_credit($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_credit', $data);
}
}

// Function to Fetch credit_list
public     function credit_list() {
            
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/credit_list');
}

public function showAllcredit(){
   /* $result = $this->credit_model->showAllcredit();
    echo json_encode($result);*/

    $output = $this->credit_model->showAllcredit();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function addcredit(){
    $result = $this->credit_model->addcredit();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function editcredit(){
    $result = $this->credit_model->editcredit();
    echo json_encode($result);
  }

  public function updatecredit(){
    $result = $this->credit_model->updatecredit();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletecredit(){
    $result = $this->credit_model->deletecredit();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

}
?>