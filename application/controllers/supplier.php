<?php

class Supplier extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->load->model('country_model');
        $this->load->model('state_model');
        $this->load->model('city_model');
        $this->load->model('supplier_model');
        $this->load->model('branch_model');
        $this->load->model('saleman_model');
        $this->load->model('category_model');
        $this->load->model('hotel_model');
        $this->load->model('payment_model');
        $this->load->model('travel_model');
    }

public   function index(){


//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('supplier_name', 'Supplier Name', 'required|min_length[1]|max_length[255]');

      $data['country'] = $this->country_model->fetch_country();
      $data['branches'] = $this->branch_model->fetch_branch();
      $data['categories'] = $this->category_model->fetch_category();
      $data['hotels'] = $this->hotel_model->fetch_hotel();
      $data['payments'] = $this->payment_model->fetch_payment();
      $data['travels'] = $this->travel_model->fetch_travel();

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_supplier', $data);

            
        } else {
    /*        echo "<pre>";
            $this->multiple_upload();
print_r($_FILES['file_name']);
die;*/
            try {
               
               if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $files =  array();
                     $supplier_files_details = array();
                if(isset($_FILES['file_name']['name'])){
                    for ($i=0; $i < count($_FILES['file_name']['name']); $i++) { 

                        $file_type = pathinfo($_FILES['file_name']['name'][$i][0], PATHINFO_EXTENSION);
                        $orignal_file_name = $this->input->post('supplier_name').rand(1111,9999).'_'.rand(1111,9999).'.'.$file_type;
                        array_push($files, array(
                            //'name' => $_FILES['file_name']['name'][$i], 
                            'name' => $orignal_file_name, 
                            'type' => $_FILES['file_name']['type'][$i][0], 
                            'tmp_name' => $_FILES['file_name']['tmp_name'][$i][0], 
                            'error' => $_FILES['file_name']['error'][$i][0], 
                            'size' => $_FILES['file_name']['size'][$i][0]
                        ));
                    }

                    $_FILES = '';
                    for ($i=0; $i < count($files); $i++) { 
                        $_FILES['file_name'.$i] = $files[$i]; 
                    }
                    $suppliers_file = $this->multiple_upload();

                   
                    for ($i=0; $i < count($suppliers_file); $i++) { 
                        array_push($supplier_files_details, array(
                            'file_description' => reset($this->input->post('file_description')[$i]),
                            'file_upload' =>  $suppliers_file[$i]
                        ));
                    }
                }
                

                $contact_person_array =  array();   
               if($this->input->post('contact_person_name') !== null){
                 for ($i=0; $i < count($this->input->post('contact_person_name')); $i++) { 
                    array_push($contact_person_array, array(
                        'contact_person_name' => isset($this->input->post('contact_person_name')[$i][0]) ? $this->input->post('contact_person_name')[$i][0] : '', 
                        'contact_person_title' => isset($this->input->post('contact_person_title')[$i][0]) ? $this->input->post('contact_person_title')[$i][0] : '', 
                        'contact_person_phone' => isset($this->input->post('contact_person_phone')[$i][0]) ? $this->input->post('contact_person_phone')[$i][0] : '', 
                        'contact_person_mobile' => isset($this->input->post('contact_person_mobile')[$i][0]) ? $this->input->post('contact_person_mobile')[$i][0] : '', 
                        'contact_person_email' => isset($this->input->post('contact_person_email')[$i][0]) ? $this->input->post('contact_person_email')[$i][0] : '', 
                        'contact_person_inactive_flag' => isset($this->input->post('contact_person_inactive_flag')[$i][0]) ? $this->input->post('contact_person_inactive_flag')[$i][0] : '' 
                    ));
                }
               }
                
                  //Setting values for tabel columns
            $supplier = array(
                'supplier_name' => $this->input->post('supplier_name'),
                'credit_term_desc' => $this->input->post('credit_term_desc'),
                'state_id' => $this->input->post('state'),
                'gl_ac_no' => $this->input->post('gl_ac_no'),
                'vat_no' => $this->input->post('vat_no'),
                'branch_id' => $this->input->post('branch'),
                'gst_no' => $this->input->post('gst_no'),
                'vat_flag' => $this->input->post('vat_flag'),
                'black_list_flag' => $this->input->post('black_list_flag'),
                'credit_limit' => $this->input->post('credit_limit'),
                'supplier_sht_name' => $this->input->post('supplier_sht_name'),
                'country_id' => $this->input->post('country'),
                'address' => $this->input->post('address'),
                'website' => $this->input->post('website'),
                'category_id' => $this->input->post('category'),
                'ntn_no' => $this->input->post('ntn_no'),
                'hotel_id' => $this->input->post('hotel'),
                'pay_terms_id' => $this->input->post('payment'),
                'city_id' => $this->input->post('city'),
                'email_id' => $this->input->post('email_id'),
                'gst_no' => $this->input->post('gst_no'),
                'note' => $this->input->post('note'),
                'travel_no' => $this->input->post('travel_no'),
                'travel_type_id' => $this->input->post('travel'),
                'inactive_flag' => $this->input->post('inactive_flag'),
                'fax_list' => json_encode($this->input->post('fax')),
                'phone_list' => json_encode($this->input->post('phone')),
                'cont_person' => json_encode($contact_person_array),
                'attachement_detail' => json_encode($supplier_files_details)
            );
          }
                //echo "working or not";
            } catch (Exception $ex) {
                echo json_encode(["message"=>$ex->getMessage()]);
            }

            //Transfering data to Model
            $this->supplier_model->supplier_insert($supplier);
            $supplier['message'] = 'Data Inserted Successfully';
               $supplier['country'] = $this->country_model->fetch_country();
      $supplier['branches'] = $this->branch_model->fetch_branch();
      $supplier['categories'] = $this->category_model->fetch_category();
      $supplier['hotels'] = $this->hotel_model->fetch_hotel();
      $supplier['payments'] = $this->payment_model->fetch_payment();
      $supplier['travels'] = $this->travel_model->fetch_travel();


            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_supplier', $supplier);
}

    }

     private function multiple_upload($upload_dir = 'uploads', $config = array())
    {
    $files = array();

    if(empty($config))
    {
        $config['upload_path'] = $this->config->config['upload_path']. '/supplier_file';
        $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png|pdf|doc|docx|xls|xlsx|rar|zip|pdf|doc|docx|xls|xlsx|rar|zip';
        $config['max_size']      = '800000000';
    }

        $this->load->library('upload', $config);

        $errors = FALSE;

        foreach($_FILES as $key => $value)
        {
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {                                           
                    $data['upload_message'] = $this->upload->display_errors(ERR_OPEN, ERR_CLOSE); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
                    $this->load->vars($data);

                    $errors = TRUE;
                }
                else
                {
                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data()['file_name'];
                }
            }
        }

        // There was errors, we have to delete the uploaded files
        if($errors)
        {                    
            foreach($files as $key => $file)
            {
                @unlink($file['full_path']);    
            }                    
        }
        elseif(empty($files) AND empty($data['upload_message']))
        {
            $this->lang->load('upload');
            $data['upload_message'] = ERR_OPEN.$this->lang->line('upload_no_file_selected').ERR_CLOSE;
            $this->load->vars($data);
        }
        else
        {
            return $files;
        }
    } 

    function fetch_state()
 {
  if($this->input->post('country_id'))
  {
   echo $this->state_model->fetch_state($this->input->post('country_id'));
  }
 }

 function fetch_city()
 {
  if($this->input->post('state_id'))
  {
   echo $this->city_model->fetch_city($this->input->post('state_id'));
  }
 }

public   function supplier_list(){
      $data['country'] = $this->country_model->fetch_country();
      $data['branches'] = $this->branch_model->fetch_branch();
      $data['categories'] = $this->category_model->fetch_category();
      $data['hotels'] = $this->hotel_model->fetch_hotel();
      $data['payments'] = $this->payment_model->fetch_payment();
      $data['travels'] = $this->travel_model->fetch_travel();
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/supplier_list', $data);
    }
public function showAllsupplier(){
    $output = $this->supplier_model->showAllsupplier();
  /*  echo "<pre>";
    print_r($output);*/
/*     var_dump($output);die();*/
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addsupplier(){
    $result = $this->supplier_model->addsupplier();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editsupplier(){
    $result = $this->supplier_model->editsupplier();
    echo json_encode($result);
  }

  public function updatesupplier(){
   /* echo "<pre>";
    print_r($this->input->post());die();*/
    $result = $this->supplier_model->updatesupplier();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    header("Location: " . base_url('supplier/supplier_list'));
  }


   public function deletesupplier(){
    $msg['success'] = $this->supplier_model->deletesupplier();
    echo json_encode($msg);
  }


}

?>