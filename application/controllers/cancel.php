<?php

class Cancel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cancel_model');
    }


public   function index(){
    //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('reason_name', 'Reason Name', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_cancel');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'reason_name' => $this->input->post('reason_name'),
                'note' => $this->input->post('note'), 
            );
            //Transfering data to Model
            $this->cancel_model->add_cancel($data);
            $data['message'] = 'Data Inserted Successfully';

       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_cancel', $data);
    }
}
public   function cancel_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/cancel_list');
    }


public function showAllcancel(){
    /*$result = $this->cancel_model->showAllcancel();
    echo json_encode($result);*/

    $output = $this->cancel_model->showAllcancel();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function addcancel(){
    $result = $this->cancel_model->addcancel();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function editcancel(){
    $result = $this->cancel_model->editcancel();
    echo json_encode($result);
  }

  public function updatecancel(){
    $result = $this->cancel_model->updatecancel();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletecancel(){
    $result = $this->cancel_model->deletecancel();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }



}
?>