<?php

class Payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('payment_model');
    }


// Function to insert Payment
   public function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('pay_term_desc', 'Payment Terms', 'required|min_length[1]|max_length[25]');

        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_payment');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'pay_term_desc' => $this->input->post('pay_term_desc'),
                'note' => $this->input->post('note'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->payment_model->add_payment($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_payment', $data);
}
}

// Function to Fetch payment_list
public     function payment_list() {
            //$id = $this->uri->segment(3);
            //$data['credits'] = $this->payment_model->show_country();
            //var_dump($datas['single_country']);die;
            //echo json_encode($data);
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/payment_list');
}

public function showAllpayment(){
    /*$result = $this->payment_model->showAllpayment();
    echo json_encode($result);*/


    $output = $this->payment_model->showAllpayment();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function addpayment(){
    $result = $this->payment_model->addpayment();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function editpayment(){
    $result = $this->payment_model->editpayment();
    echo json_encode($result);
  }

  public function updatepayment(){
    $result = $this->payment_model->updatepayment();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletepayment(){
    $result = $this->payment_model->deletepayment();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

}
?>