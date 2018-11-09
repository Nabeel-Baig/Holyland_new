<?php

class hotel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('hotel_model');
          $this->load->model('country_model');
        $this->load->model('category_model');
        $this->load->model('room_model');
        $this->load->model('meal_model');
        $this->load->model('view_model');
    }
public   function index(){

    //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('hotel_name', 'Hotel Name', 'required|min_length[1]|max_length[50]');

        

        $data['country'] = $this->country_model->fetch_country();
      $data['categories'] = $this->category_model->fetch_category();
      $data['rooms'] = $this->room_model->fetch_room();
      $data['views'] = $this->view_model->fetch_view();
      $data['meals'] = $this->meal_model->fetch_meal();
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_hotel', $data);

            
        } else {


             try {
                   
                    if($_SERVER['REQUEST_METHOD'] === 'POST'){

                    $files =  array();
                     $hotel_files_details = array();
                if(isset($_FILES['file_name']['name'])){
                    for ($i=0; $i < count($_FILES['file_name']['name']); $i++) { 

                        $file_type = pathinfo($_FILES['file_name']['name'][$i][0], PATHINFO_EXTENSION);
                        $orignal_file_name = $this->input->post('hotel_name').rand(1111,9999).'_'.rand(1111,9999).'.'.$file_type;
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
                    $hotels_file = $this->multiple_upload();

                   
                    for ($i=0; $i < count($hotels_file); $i++) { 
                        array_push($hotel_files_details, array(
                            'file_description' => reset($this->input->post('file_description')[$i]),
                            'file_upload' =>  $hotels_file[$i]
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

                 $room_type_array =  array();   
               if($this->input->post('room_type_nob') !== null){
                 for ($i=0; $i < count($this->input->post('room_type_nob')); $i++) { 
                    array_push($room_type_array, array(
                        'room_type_nob' => isset($this->input->post('room_type_nob')[$i][0]) ? $this->input->post('room_type_nob')[$i][0] : '', 
                        /*'room_type_nop' => isset($this->input->post('room_type_nop')[$i][0]) ? $this->input->post('room_type_nop')[$i][0] : '', */
                        'room_type_room' => isset($this->input->post('room_type_room')[$i][0]) ? $this->input->post('room_type_room')[$i][0] : '', 
                        'room_type_web_flag' => isset($this->input->post('room_type_web_flag')[$i][0]) ? $this->input->post('room_type_web_flag')[$i][0] : '' 
                    ));
                }
               }
             
                 $meal_plan_array =  array();   
               if($this->input->post('meal_plan_meal') !== null){
                 for ($i=0; $i < count($this->input->post('meal_plan_meal')); $i++) { 
                    array_push($meal_plan_array, array(
                        'meal_plan_meal' => isset($this->input->post('meal_plan_meal')[$i][0]) ? $this->input->post('meal_plan_meal')[$i][0] : '', 
                        'meal_plan_web_flag' => isset($this->input->post('meal_plan_web_flag')[$i][0]) ? $this->input->post('meal_plan_web_flag')[$i][0] : '' 
                    ));
                }
               }


                 $view_array =  array();   
               if($this->input->post('view_name') !== null){
                 for ($i=0; $i < count($this->input->post('view_name')); $i++) { 
                    array_push($view_array, array(
                        'view_name' => isset($this->input->post('view_name')[$i][0]) ? $this->input->post('view_name')[$i][0] : '', 
                        'view_web_flag' => isset($this->input->post('view_web_flag')[$i][0]) ? $this->input->post('view_web_flag')[$i][0] : '' 
                    ));
                }
               }
                
                

                
                
                  //Setting values for tabel columns
            $data = array(
                'hotel_name' => $this->input->post('hotel_name'),
                'gazt_no' => $this->input->post('gazt_no'),
                'state_id' => $this->input->post('state'),
                'gl_ac_no' => $this->input->post('gl_ac_no'),
                'vat_no' => $this->input->post('vat_no'),
                'alot_gl_ac_no' => $this->input->post('alot_gl_ac_no'),
                'gst_no' => $this->input->post('gst_no'),
                'vat_flag' => $this->input->post('vat_flag'),
                'gst_flag' => $this->input->post('gst_flag'),
                'category' => $this->input->post('category'),
                'country_id' => $this->input->post('country'),
                'address' => $this->input->post('address'),
                'hot_website' => $this->input->post('hot_website'),
                'ntn_no' => $this->input->post('ntn_no'),
                'hotel_id' => $this->input->post('hotel'),
                'city_id' => $this->input->post('city'),
                'hot_email_id' => $this->input->post('hot_email_id'),
                'gst_no' => $this->input->post('gst_no'),
                'web_appear_flag' => $this->input->post('web_appear_flag'),
                'hot_avail_flag' => $this->input->post('hot_avail_flag'),
                'inactive_flag' => $this->input->post('inactive_flag'),
                'fax_list' => json_encode($this->input->post('fax')),
                'phone_list' => json_encode($this->input->post('phone')),
                'cont_person' => json_encode($contact_person_array),
                'room_type' => json_encode($room_type_array),
                'meal_plan' => json_encode($meal_plan_array),
                'view' => json_encode($view_array),
                'attachement_detail' => json_encode($hotel_files_details)
            );
                          }
                //echo "working or not";
            } catch (Exception $ex) {
                echo json_encode(["message"=>$ex->getMessage()]);
            }
         
            //Transfering data to Model
            $this->hotel_model->add_hotel($data);
            $data['message'] = 'Data Inserted Successfully';
              $data['country'] = $this->country_model->fetch_country();
      $data['categories'] = $this->category_model->fetch_category();
      $data['rooms'] = $this->room_model->fetch_room();
      $data['views'] = $this->view_model->fetch_view();
      $data['meals'] = $this->meal_model->fetch_meal();

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_hotel', $data);
}
    }

     private function multiple_upload($upload_dir = 'uploads', $config = array())
    {
    $files = array();

    if(empty($config))
    {
        $config['upload_path'] = $this->config->config['upload_path'] . '/hotel_files';
        $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png|pdf|doc|docx|xls|xlsx|rar|zip';
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


public   function hotel_list(){
      $data['country'] = $this->country_model->fetch_country();
      $data['categories'] = $this->category_model->fetch_category();
      $data['rooms'] = $this->room_model->fetch_room();
      $data['views'] = $this->view_model->fetch_view();
      $data['meals'] = $this->meal_model->fetch_meal();
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/hotel_list.php', $data);
    }

    public function showAllhotel(){
    $output = $this->hotel_model->showAllhotel();
 /*   echo "<pre>";
    print_r($output);*/
/*     var_dump($output);die();*/
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  /*public function addhotel(){
    $result = $this->hotel_model->addhotel();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }*/


  public function edithotel(){
    $result = $this->hotel_model->edithotel();
    echo json_encode($result);
  }

  public function updatehotel(){
   /* echo "<pre>";
    print_r($this->input->post());die;*/
    
    $result = $this->hotel_model->updatehotel();

    $msg['success'] = false;
    $msg['type'] = 'update';
    
    if($result){
      $msg['success'] = true;
    }
    header("Location: " . base_url('hotel/hotel_list'));
  }


   public function deletehotel(){
    $msg['success'] = $this->hotel_model->deletehotel();
    echo json_encode($msg);
  }

}
?>
