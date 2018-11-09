<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Hotel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .accordion {
    /*background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;*/
      margin-bottom: 2%;
    background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border: none;
     text-align: left; 
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;
    display: grid;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
    border-radius: 20px;
}


.accordion1 {
   /* background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;*/
  margin-bottom: 2%;
     background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border: none;
     text-align: left; 
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;
    display: grid;
}

.active, .accordion1:hover {
    background-color: #ccc; 
}

.panel1 {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
    border-radius: 20px;
}


.accordion2 {
    /*background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;*/
  margin-bottom: 2%;
     background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border: none;
     text-align: left; 
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;
    display: grid;
}

.active, .accordion2:hover {
    background-color: #ccc; 
}

.panel2 {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
    border-radius: 20px;
}

.accordion3 {
   /* background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;*/
  margin-bottom: 2%;
     background-color: #1e79d8;
    color: white;
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border: none;
     text-align: left; 
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 20px;
    display: grid;
}

.active, .accordion3:hover {
    background-color: #ccc; 
}

.panel3 {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
    border-radius: 20px;
}




     .container {
       display: inline-block;
       cursor: pointer;
     }

    .bar1, .bar2, .bar3 {
      width: 30px;
      height: 3px;
      background-color: #333;
      margin: 3px 0;
      transition: 0.4s;
    }

    .change .bar1 {
      -webkit-transform: rotate(-45deg) translate(-9px, 6px);
      transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
      -webkit-transform: rotate(45deg) translate(-8px, -8px);
      transform: rotate(45deg) translate(-8px, -8px);
    }

  </style>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 3%">
      <h1>
        Master Data
        <small>Add Hotel</small>
      </h1>
      <ol class="breadcrumb" style="    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 12px;
    padding: 7px 5px;
    position: absolute;
    top: 15px;
    left: 393px;
    border-radius: 2px;">
        <li>
         <!--  <div class="form-group">
                  <input type="text" class="form-control" placeholder="Record No"  placeholder="Password" style="width: 182%">
          </div> -->
        </li>
        
      </ol>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box" style="width: 80%;margin-left: 10%;background: #c1c1c1;">
          <form name="myForm" role="form" id="myform" action="<?php echo base_url('hotel'); ?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
          <div class="box-body">
            
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
                </div>
                <div class="form-group">
                  <label>Hotel Name</label><?php echo form_error('hotel_name'); ?>
                  <input type="text" required="hotel_name" class="form-control" placeholder="Name" name="hotel_name" id="hotel_name" tabindex="1">
                </div>

                <div class="form-group">
                  <label>Country</label>
                    <select name="country" id="country" required="country" style="width: 100%;border: 1px solid #d4d4d4;padding: 6px;" tabindex="4">
                      <option value="">Select Country</option>
                      <?php foreach ($country as $country) { ?>
                        <option value="<?= $country->country_id ?>"><?= $country->country_name ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Category</label>
                   <select name="category" id="category" required="category" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;" tabindex="7">
                     <option value="">Select Category</option>
                       <?php foreach ($categories as $category) { ?>
                        <option><?= $category->category_desc ?></option>
                      <?php } ?>
                   </select>

                </div>

                  
                
                 <div class="form-group" style="margin-top: 0%;">
                  <label>Account Number</label>
                    <input type="number" placeholder="Account Number" name="gl_ac_no" id="gl_ac_no" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;" tabindex="10">
                </div>
                
                 <div class="form-group">
                  <label>Allotment Account Number</label>
                    <input type="number" placeholder="Allotment Account Number" name="alot_gl_ac_no" id="alot_gl_ac_no" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;" tabindex="12">
                </div>
               
            

                <div class="form-group">
                  <label>VAT No</label>
                  <input type="number" class="form-control" placeholder="VAT No" name="vat_no" id="vat_no" tabindex="14">
                </div>




                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->
          
          <!-- /.box -->


        </div>

        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                 
                <div class="form-group">
                  <label>Hotel Address</label>
                  <input type="text" class="form-control" placeholder="Hotel Address" name="address" id="address" tabindex="2">
                </div>
                <div class="form-group">
                  <label>Website</label>
                  <input type="text" class="form-control" placeholder="Website" name="hot_website" id="hot_website" tabindex="5">
                </div>

                <div class="form-group" style="margin-top: -0%;">
                  <label>State</label>
                   <select name="state" id="state" required="state" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;" tabindex="8">
                    <option value="">Select State</option>
                  </select>
                </div>
              
                    <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="hot_email_id" id="hot_email_id" tabindex="11">
                </div>

                  



                 <div class="form-group">
                  <label>Account Title</label>
                  <input type="text" class="form-control" placeholder="Account Title" id="exampleInputEmail1" tabindex="13">
                </div>

                  <div class="form-group">
                  <label>Allotment Account Title</label>
                  <input type="text" class="form-control" placeholder="Allotment Account Title" id="exampleInputEmail1" tabindex="15">
                </div>

                <div class="form-group">
                  <label>GAZT No</label>
                  <input type="number" class="form-control" placeholder="GAZT No" name="gazt_no" id="gazt_no" tabindex="17">
                </div>







            



                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->
          
          <!-- /.box -->


        </div>

        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
           
                <div class="form-group">

                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <label>Phone</label>
                          <input type="text" required="phone" maxlength="11" minlength="10" minlength="10" class="form-control" placeholder="03333906233" style="width: 55%" name="phone[]" data-role="phone" value="" tabindex="3" />
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
                        </div>
                      </div>
                    </tr>
                  </table>



                </div>

                <div class="form-group" style="margin-top: -10%">

                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <label>Fax</label>
                          <input type="text" class="form-control" maxlength="11" minlength="10" minlength="10" placeholder="03333906233" style="width: 55%" name="fax[]" data-role="fax" value="" tabindex="6" />
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
                        </div>
                      </div>
                    </tr>
                  </table>



                </div>
              

              <div class="form-group" style="margin-top: -10%">
                  <label>City</label>
                    <select name="city" id="city" required="city" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;" tabindex="9">
                      <option value="">Select City</option>
                    </select>
                </div>


                <div class="form-group">
                  
                  <p style="position: relative;top: 15px;">
                    <label for="web_appear_flag">
                  <input type="checkbox" name="web_appear_flag" value="1" class="checkbox1">
                  Appear In Web
                  </label>
                </p>
                </div>
                <div class="form-group">
                  
                  <p style="position: relative;top: 20px;">
                    <label for="hot_avail_flag">
                  <input type="checkbox" name="hot_avail_flag" value="1" class="checkbox1">
                  Appear in Hotel availability
                  </label>
                </p>
                </div>
                <div class="form-group">
                  
                  <p style="position: relative;top: 30px;">
                    <label for="vat_flag">
                  <input type="checkbox" name="vat_flag" value="1" class="checkbox1">
                  NO VAT
                  </label>
                </p>
                </div>

                   <div class="form-group">
                  
                  <p style="position: relative;top: 30px;">
                    <label for="gst_flag">
                  <input type="checkbox" name="gst_flag" value="1" class="checkbox1">
                  NO GST
                  </label>
                </p>
                </div>

                <div class="form-group" style="position: relative;top: 35px;">

                  <label for="inactive_flag" class="" >
                    <input type="checkbox" name="inactive_flag" value="1" class="checkbox1">
                    Suspended
                  </label>
                 <!--  <label style="margin-left: 5%;">
                    <input type="checkbox" name="checkbox1" class="checkbox1">
                    Black List
                  </label> -->
                </div>

                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->
        </div>
      </div>
      



      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12">
            <div class="box">
              <table id="myTable" class=" table order-list"  style="width:100%">
                <thead>
                <tr class="info">
                
                <th>Description</th>
                <th>File Name</th>
                </tr>

                </thead>
                <tbody>
    <!--            <tr>
           
            <td class="col-sm-6">
                <input type="text" required="file_description" class="form-control" name="file_description[]" placeholder="File Description"  />
            </td>
            <td class="col-sm-6">
                <input type="file" required="file_name" name="file_name[]" placeholder="File Upload" class="form-control"/>
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr> -->
                </tbody>
            <tfoot>
                    <tr>
                        <td colspan="5" style="text-align: left;">
                            <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
    </div>
        <br><br>
<div class="row" style="margin-bottom: 3%">
 <div class="col-xs-12">
   <div class="col-md-3">

     <button class="accordion btn-primary" type="button">Contact Person
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>

     <!--<script>-->
     <!--function myFunction(x) {-->
     <!--x.classList.toggle("change");-->
     <!--}-->
     <!--</script>-->

     <div class="panel">
       <br>
       <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="contact_person_name[]" id="contact_person_name">
                      </div>
      
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="contact_person_title[]" id="contact_person_title">
                      </div>
      
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" maxlength="11" minlength="10" minlength="10" placeholder="03333906233" name="contact_person_phone[]" id="contact_person_phone">
                      </div>
      
                    <div class="form-group">
                      <label>Mobile</label>
                        <input type="text" class="form-control" maxlength="11" minlength="10" minlength="10" placeholder="Mobile" name="contact_person_mobile[]" id="contact_person_mobile">
                      </div>
      
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="contact_person_email[]" id="contact_person_email">
                      </div>
        <div class="form-group">
          <label for="inactive_flag" class="" style="    font-weight: 400;margin-left: 6%;">
            <input type="radio" name="contact_person_inactive_flag[]" id="contact_person_inactive_flag"  value="0" class="checkbox1">
            Active
          </label>
          <label for="inactive_flag" style="    font-weight: 400;    margin-left: 10%;">
            <input type="radio" name="contact_person_inactive_flag[]" id="contact_person_inactive_flag" value="1" class="checkbox1">
            Inactive
          </label>
        </div>


       <!--</div>-->

       <div class="form-group">
         <button type="button" class="btn btn-primary form-control center-block" id="addrows" value="Add Row" style="width: 50%;border-radius: 40px;">Add</button>
       </div>

       <script>
           var acc = document.getElementsByClassName("accordion");
           var i;

           for (i = 0; i < acc.length; i++) {
               acc[i].addEventListener("click", function() {
                   this.classList.toggle("active");
                   var panel = this.nextElementSibling;
                   if (panel.style.display === "block") {
                       panel.style.display = "none";
                   } else {
                       panel.style.display = "block";
                   }
               });
           }
       </script>
     </div>
   </div>
   <div class="col-md-3">
     <button class="accordion1 btn-primary" type="button">Room Type
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel1">
       <br>
       
       <div class="form-group">
        <label>No Of Bed</label>
         <input type="number" class="form-control" placeholder="No Of Bed" name="room_type_nob[]" id="room_type_nob">
       </div>
       <!-- <div class="form-group">
        <label>No Of Person</label>
         <input type="number" class="form-control" placeholder="No Of Person" name="room_type_nop[]" id="room_type_nop">

       </div> -->

       <div class="form-group">
        <label>Room Type</label>
         <select class="form-control" name="room_type_room[]" id="room_type_room">
           <option value=""></option>
           <?php foreach ($rooms as $room) {  ?>
            <option value="<?= $room->room_id ?>"><?= $room->room_type_name ?></option>
          <?php } ?>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox1" name="room_type_web_flag[]" id="room_type_web_flag" value="1" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button type="button" class="btn btn-primary form-control center-block" id="addroom" value="Add Row" style="width: 50%;border-radius: 40px;">Add</button>
       </div>

       <script>
           var acc = document.getElementsByClassName("accordion1");
           var i;

           for (i = 0; i < acc.length; i++) {
               acc[i].addEventListener("click", function() {
                   this.classList.toggle("active");
                   var panel = this.nextElementSibling;
                   if (panel.style.display === "block") {
                       panel.style.display = "none";
                   } else {
                       panel.style.display = "block";
                   }
               });
           }
       </script>
     </div>
   </div>

   <div class="col-md-3">
     <button class="accordion2 btn-primary" type="button">Meal Plan
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel2">
       <br>
       

       <div class="form-group">
         <select class="form-control" name="meal_plan_meal[]" id="meal_plan_meal">
           <option value=""></option>
           <?php foreach ($meals as $meal) {  ?>
            <option value="<?= $meal->meal_plan_id ?>"><?= $meal->meal_plan_desc ?></option>
          <?php } ?>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox1" name="meal_plan_web_flag[]" id="meal_plan_web_flag" value="1" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button type="button" class="btn btn-primary form-control center-block" id="addmeal" value="Add Row" style="width: 50%;border-radius: 40px;">Add</button>
       </div>

       <script>
           var acc = document.getElementsByClassName("accordion2");
           var i;

           for (i = 0; i < acc.length; i++) {
               acc[i].addEventListener("click", function() {
                   this.classList.toggle("active");
                   var panel = this.nextElementSibling;
                   if (panel.style.display === "block") {
                       panel.style.display = "none";
                   } else {
                       panel.style.display = "block";
                   }
               });
           }
       </script>
     </div>
   </div>
   <div class="col-md-3">
     <button class="accordion3 btn-primary" type="button">View
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel3">
       <br>
       

       <div class="form-group">
        <select class="form-control" name="view_name[]" id="view_name">
           <option value=""></option>
           <?php foreach ($views as $view) {  ?>
            <option value="<?= $view->hot_view_id ?>"><?= $view->hot_view_desc ?></option>
          <?php } ?>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox1" name="view_web_flag[]" id="view_web_flag" value="1" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button type="button" class="btn btn-primary form-control center-block" id="addview" value="Add Row" style="width: 50%;border-radius: 40px;">Add</button>
       </div>

       <script>
           var acc = document.getElementsByClassName("accordion3");
           var i;

           for (i = 0; i < acc.length; i++) {
               acc[i].addEventListener("click", function() {
                   this.classList.toggle("active");
                   var panel = this.nextElementSibling;
                   if (panel.style.display === "block") {
                       panel.style.display = "none";
                   } else {
                       panel.style.display = "block";
                   }
               });
           }
       </script>
     </div>
   </div>
 </div>
  
    </div>

<div class="row">
  <div class="col-xs-12">
  <div class="col-xs-12">
    <div class="box">
      <!-- <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
      </div> -->
      <!-- /.box-header -->
      <div class="box-body"  style="overflow-x: auto">
        <table id="myTable" class=" table orders-lists" style="width:100%">
          <h3>Contact Person</h3>
          <thead>
          <tr class="info">
            <th>Name</th>
            <th>Tittle</th>
            <th>Phone No.</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
          </thead>
          <tbody>
          

      

          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  </div>
</div>

      <div class="row">
          <div class="col-xs-12">
          <div class="col-xs-12">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                <table id="myTableRoom" class=" table orders-listsroom" style="width:100%">
          <h3>Room Type</h3>
          <thead>
          <tr class="info">
            <th>Bed</th>
            <th>Room Type</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
          </thead>
          <tbody>
          

      

          </tbody>

        </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          </div>
        </div>

      <div class="row">
        <div class="col-xs-12">
          
          <div class="col-md-6">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                <table id="myTable" class=" table orders-listsmp" style="width:100%">
          <h3>Meal Plan</h3>
          <thead>
          <tr class="info">
            <th>Meal Plan</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
          </thead>
          <tbody>
          

      

          </tbody>

        </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-6">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                    <table id="myTable" class=" table orders-listsview" style="width:100%">
          <h3>View</h3>
          <thead>
          <tr class="info">
            <th>View</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
          </thead>
          <tbody>
          

      

          </tbody>

        </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
        
      </div>


<br><br>
    <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block" style="width: 30%;border-radius: 40px;">Submit</button> </div>
        <div class="col-md-4"></div>
      </div>
      <br>
      </form>
        </div>
      </div>

      <!-- <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block">Submit</button> </div>
        <div class="col-md-4"></div>
      </div> -->



    </section>
  </div>
  <script type="text/javascript">
      function validateForm() {
        var x = document.forms["myForm"]["hotel_name"].value;
        if (x == "") {
          alert("Hotel Name Must be filled out..");
          return false;
        }
        else {
          alert("Data Inserted Successfully.");
        }
      }
  </script>

 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="../../index.html">Holy Land</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul> -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active" style="background-color: #222d32;"><div><h4 class="control-sidebar-heading">Layout Options</h4><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="fixed" class="pull-right"> Fixed layout</label><p>Activate the fixed layout. You can't use fixed and boxed layouts together</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="layout-boxed" class="pull-right"> Boxed Layout</label><p>Activate the boxed layout</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label><p>Toggle the left sidebar's state (open or collapse)</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label><p>Let the sidebar mini expand on hover</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar Slide</label><p>Toggle between slide over content and push content effects</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label><p>Toggle between dark and light skins for the right sidebar</p></div><h4 class="control-sidebar-heading">Skins</h4><ul class="list-unstyled clearfix"><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Blue</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Black</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Purple</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Green</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Red</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Yellow</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Black Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Green Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Red Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Yellow Light</p></li></ul></div></div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
     
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
    
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>


<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            var nam = $(this).parents('.field_wrapper').find('input').attr('data-role');
            var fieldHTML = '<div><input type="text" maxlength="11" minlength="10" minlength="10" class="form-control" placeholder="'+nam.substr(0,1).toUpperCase()+nam.substr(1)+'" style="width: 55%" name="'+nam+'[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png'); ?>"/></a></div>'; //New input field html
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(this).parents('.field_wrapper').append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>



        <script type="text/javascript">
          $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

      
        cols += '<td><input type="text" class="form-control" name="file_description['+counter+'][]" id="file_description" placeholder="File Description"  /></td>';
        cols += '<td><input type="file" class="form-control" placeholder="Upload File" name="file_name['+counter+'][]" id="file_name"/></td>';


        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
        </script>


<script type="text/javascript">
          $(document).ready(function () {
    var c_p_counter = 0;

    $("#addrows").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var name = $("#contact_person_name").val();
        var title = $("#contact_person_title").val();
        var phone = $("#contact_person_phone").val();
        var mobile = $("#contact_person_mobile").val();
        var email = $("#contact_person_email").val();
        var inactive_flag = $("#contact_person_inactive_flag:checked").val();
        var active = '';
        var inactive = '';
        console.log(inactive_flag);
        if(inactive_flag == 0)
          active = 'checked';
        else if(inactive_flag == 1)
          inactive = 'checked';


        cols += '<td><input type="text" class="form-control" placeholder="Contact Name" value="'+name+'" name="contact_person_name['+ c_p_counter +'][]" required="contact_person_name"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Contact Title" value="'+title+'" name="contact_person_title['+ c_p_counter +'][]" required="contact_person_title"/></td>';
        cols += '<td><input type="text" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" value="'+phone+'" name="contact_person_phone['+ c_p_counter +'][]"/></td>';
        cols += '<td><input type="text" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" value="'+mobile+'" name="contact_person_mobile['+ c_p_counter +'][]" required="contact_person_mobile"/></td>';
        cols += '<td><input type="email" class="form-control" placeholder="Contact Email" value="'+email+'" name="contact_person_email['+ c_p_counter +'][] required="contact_person_email"/></td>';
        cols += '<td><label><input type="radio" class="checkbox1 active" value="0" '+active+' name="contact_person_inactive_flag['+ c_p_counter +'][]"/>Active</label><label><input type="radio" class="checkbox1 inactive" value="1" '+inactive+' name="contact_person_inactive_flag['+ c_p_counter +'][]"/>Inactive</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-lists").append(newRow);
        c_p_counter++;
        $("#contact_person_name").val("");
        $("#contact_person_title").val("");
        $("#contact_person_phone").val("");
        $("#contact_person_mobile").val("");
        $("#contact_person_email").val("");
        $(".col-md-4 input[name='contact_person_inactive_flag[]']").each(function(){
          $(this).prop("checked", false);
        });
    });



    $("table.orders-lists").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var prices = +row.find('input[name^="prices"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.orders-lists").find('input[name^="prices"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
        </script>




<script type="text/javascript">
          $(document).ready(function () {
    var c_p_counter = 0;


    $("#addroom").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var bed = $("#room_type_nob").val();
        /*var person = $("#room_type_nop").val();*/
        var room = $("#room_type_room").val();
        var web_flag = $("#room_type_web_flag:checked").val();
        var web = '';
        console.log(web_flag);
        if(web_flag == 1)
          web = 'checked';



        var temp = [];
        var selected = '';
        temp.push('<option value=""></option>');
        <?php foreach ($rooms as $room) { ?>
          if (<?= $room->room_id ?> == room) {
            selected = 'selected';
          }else {
            selected ='';
          }
          temp.push('<option value="<?= $room->room_id ?>"'+selected+'><?= $room->room_type_name ?></option>');
        <?php } ?>
        var room_html = '<select class="form-control" name="room_type_room['+c_p_counter+'][]" required="room_type_room">'+temp.join(' ')+'</select>';
        


        cols += '<td><input type="text" class="form-control" placeholder="No Of Bed" value="'+bed+'" name="room_type_nob['+ c_p_counter +'][]" required="room_type_nob"/></td>';
       /* cols += '<td><input type="text" class="form-control" placeholder="No Of Person" value="'+person+'" name="room_type_nop['+ c_p_counter +'][]"/></td>';*/
        cols += '<td>'+room_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="room_type_web_flag['+ c_p_counter +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsroom").append(newRow);
        c_p_counter++;
        $("#room_type_nob").val("");
        /*$("#room_type_nop").val("");*/
        $("#room_type_room").val("");
        $(".col-md-4 input[name='room_type_web_flag[]']").each(function(){
          $(this).prop("checked", false);
        });
    });



    $("table.orders-listsroom").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var prices = +row.find('input[name^="prices"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.orders-listsroom").find('input[name^="prices"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
        </script>


<script type="text/javascript">
          $(document).ready(function () {
    var c_p_counter = 0;


    $("#addmeal").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var room = $("#meal_plan_meal").val();
        var web_flag = $("#meal_plan_web_flag:checked").val();
        var web = '';
        console.log(web_flag);
        if(web_flag == 1)
          web = 'checked';

   

        var temp = [];
        var selected = '';
        temp.push('<option value=""></option>');
        <?php foreach ($meals as $meal) { ?>
          if (<?= $meal->meal_plan_id ?> == room) {
            selected = 'selected';
          }else {
            selected ='';
        }
        temp.push('<option value="<?= $meal->meal_plan_id ?>" '+selected+'><?= $meal->meal_plan_desc ?></option>');
      <?php } ?>
      var meal_html = '<select class="form-control" name="meal_plan_meal['+c_p_counter+'][]">'+temp.join(' ')+'</select>';
        

        cols += '<td>'+meal_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="meal_plan_web_flag['+ c_p_counter +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsmp").append(newRow);
        c_p_counter++;
        $("#meal_plan_meal").val("");
        $(".col-md-4 input[name='meal_plan_web_flag[]']").each(function(){
          $(this).prop("checked", false);
        });
    });



    $("table.orders-listsmp").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var prices = +row.find('input[name^="prices"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.orders-listsmp").find('input[name^="prices"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
        </script>





<script type="text/javascript">
          $(document).ready(function () {
    var c_p_counter = 0;


     $("#addview").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var room = $("#view_name").val();
        var web_flag = $("#view_web_flag:checked").val();
        var web = '';
        console.log(web_flag);
        if(web_flag == 1)
          web = 'checked';


      var temp = [];
        var selected = '';
        temp.push('<option value=""></option>');
        <?php foreach ($views as $view) { ?>
          if (<?= $view->hot_view_id ?> == room) {
            selected = 'selected';
          }else {
            selected ='';
        }
        temp.push('<option value="<?= $view->hot_view_id ?>" '+selected+'><?= $view->hot_view_desc ?></option>');
      <?php } ?>
      var view_html = '<select class="form-control" name="view_name['+c_p_counter+'][]">'+temp.join(' ')+'</select>';
        

        cols += '<td>'+view_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="view_web_flag['+ c_p_counter +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsview").append(newRow);
        c_p_counter++;
        $("#view_name").val("");
        $(".col-md-4 input[name='view_web_flag[]']").each(function(){
          $(this).prop("checked", false);
        });
    });



    $("table.orders-listsview").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});






function calculateRow(row) {
    var prices = +row.find('input[name^="prices"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.orders-listsview").find('input[name^="prices"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
        </script>



<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>client/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#city').html('<option value="">Select City</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>city/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});
</script>