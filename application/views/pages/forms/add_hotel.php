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
          <div class="box-body">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="ID Auto Generate" disabled>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Select Category" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Select City" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers5">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Account Title" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Allotment Account Title" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <input type="number" class="form-control" placeholder="VAT No" id="exampleInputEmail1">
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
            </form>
          
          <!-- /.box -->


        </div>

        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                 
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Hotel Address" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Select Country" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers4">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>
                <div class="form-group">

                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <input type="text" class="form-control" placeholder="Phone" style="width: 55%" name="phone[]" data-role="phone" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
                        </div>
                      </div>
                    </tr>
                  </table>



                </div>
                <div class="form-group" style="margin-top: -10%;">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Account Number" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers1">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Allotment Account Number" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers2">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>

                <div class="form-group">
                  <input type="number" class="form-control" placeholder="GAZT No" id="exampleInputEmail1">
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
            </form>
          
          <!-- /.box -->


        </div>

        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1">
                </div>

                <div class="form-group">

                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <input type="text" class="form-control" placeholder="Fax" style="width: 55%" name="fax[]" data-role="fax" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
                        </div>
                      </div>
                    </tr>
                  </table>



                </div>
                <div class="form-group" style="margin-top: -11%;">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Select State/Province" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers3">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>




                <div class="form-group">
                  
                  <p style="position: relative;top: 15px;">
                  <input type="checkbox" name="checkbox1" class="checkbox1">
                  Appear In Web
                </p>
                </div>
                <div class="form-group">
                  
                  <p style="position: relative;top: 20px;">
                  <input type="checkbox" name="checkbox1" class="checkbox1">
                  Appear in Hotel availability
                </p>
                </div>
                <div class="form-group">
                  
                  <p style="position: relative;top: 30px;">
                  <input type="checkbox" name="checkbox1" class="checkbox1">
                  NO VAT
                </p>
                </div>
                <div class="form-group" style="position: relative;top: 35px;">

                  <label class="" style="    font-weight: 400;">
                    <input type="checkbox" name="checkbox1" class="checkbox1">
                    Suspended
                  </label>
                  <label style="font-weight: 400;margin-left: 5%;">
                    <input type="checkbox" name="checkbox1" class="checkbox1">
                    Block List
                  </label>
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
            </form>
        </div>
      </div>
      



      <div class="row" style="margin-top: 2%">
        <div class="col-xs-12">
          <div class="box-body">
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
              </div>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Description">
            </div>
            <div class="col-md-3">
              <!-- <input type="file"> -->
              <label class="btn btn-primary center-block" for="my-file-selector" style="border-radius: 30px;width: 40%;margin-bottom: 2%;margin-top: 2%;">
                <input id="my-file-selector" type="file" multiple="multiple" style="display:none"
                       onchange="$('#upload-file-info').html(
            (this.files.length > 1) ? this.files.length + ' files' : this.files[0].name)">
                Upload&hellip;
              </label>
              <span class='label label-info' id="upload-file-info" style="    margin-left: 30%;"></span>
            </div>
            <div class="col-md-3">
              <button class="btn btn-primary btn-sm center-block" style="width: 50%;border-radius: 30px;margin-bottom: 2%;margin-top: 2%;">Add</button>
            </div>

          </div>
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-xs-12">
          <div class="col-xs-12">
            <div class="box">
               <div class="box-body">
                <table id="example1" class="table table-responsive"  style="width:100%">
                    <thead>
                    <tr class="info">
                        <th>ID</th>
                        <th>Description</th>
                        <th>File Name</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td>005</td>
                        <td>123</td>
                        <td>image</td>
                    </tr>

                    <tr>
                        <td>005</td>
                        <td>125</td>
                        <td>image</td>
                    </tr>
                    </tbody>

                </table>
            </div>
          </div>
        </div>
        </div>
      </div>
        <br><br>
<div class="row" style="margin-bottom: 3%">
 <div class="col-xs-12">
   <div class="col-md-3">

     <button class="accordion btn-primary">Contact Person
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
         <input type="hidden" class="form-control" placeholder="S No" name="fpname" id="fpname" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div>

       <div class="form-group">
         <input type="text" class="form-control" placeholder="Name" name="lpname" id="lpname" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div>

       <div class="form-group">
         <input type="text" class="form-control" placeholder="Title" name="title" id="title" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div>



       <div class="form-group">
         <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div>

       <div class="form-group">
         <input type="text" class="form-control" placeholder="Email" name="email" id="email" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div>

<!-- <div class="form-group">
         <input type="text" class="form-control" placeholder="Email" name="age" id="age" style="width: 100%;border-radius: 0px;padding: 9px;">
       </div> -->
       <!--<div class="form-group">-->
       <!--<label class="" style="    font-weight: 400;margin-left: 6%;">-->
       <!--<input type="checkbox" name="checkbox1" class="checkbox1">-->
       <!--Active-->
       <!--</label>-->
       <!--<label style="    font-weight: 400;    margin-left: 10%;">-->
       <!--<input type="checkbox" name="checkbox1" class="checkbox1">-->
       <!--Inactive-->
       <!--</label>-->
       <!--</div>-->

       <div class="form-group">
         <button onclick="addHtmlTable();" type="text" class="btn btn-primary form-control center-block" style="width: 50%;border-radius: 40px;">Add</button>
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
     <button class="accordion1 btn-primary">Room Type
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel1">
       <br>
       <!-- <div class="form-group">
         <input type="number" class="form-control" placeholder="S No" name="fname" id="fname">
       </div> -->
       <div class="form-group">
        <label>No Of Bed</label>
         <input type="number" class="form-control" placeholder="No Of Bed" name="fname" id="fname">
       </div>
       <div class="form-group">
        <label>No Of Person</label>
         <input type="number" class="form-control" placeholder="No Of Person" name="lname" id="lname">

       </div>

       <div class="form-group">
        <label>Room Type</label>
         <select class="form-control" name="age" id="age">
           <option>Room Type</option>
           <option>option 2</option>
           <option>option 3</option>
           <option>option 4</option>
           <option>option 5</option>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button onclick="addHtmlTableRow();" type="text" class="btn btn-primary form-control center-block" style="width: 50%;border-radius: 40px;">Add</button>
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
     <button class="accordion2 btn-primary">Meal Plan
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel2">
       <br>
       <div class="form-group">
         <input type="text" class="form-control" placeholder="S No">
       </div>

       <div class="form-group">
         <select class="form-control">
           <option>Meal Plan</option>
           <option>option 2</option>
           <option>option 3</option>
           <option>option 4</option>
           <option>option 5</option>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button type="text" class="btn btn-primary form-control center-block" style="width: 50%;border-radius: 40px;">Add</button>
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
     <button class="accordion3 btn-primary">View
       <div class="container" onclick="myFunction(this)" style="margin-left: 74%;margin-top: -9%;">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </button>
     <div class="panel3">
       <br>
       <div class="form-group">
         <input type="text" class="form-control" placeholder="S No">
       </div>

       <div class="form-group">
         <select class="form-control">
           <option>View</option>
           <option>option 2</option>
           <option>option 3</option>
           <option>option 4</option>
           <option>option 5</option>
         </select>
       </div>
       <div class="form-group" style="display: flex;">
         Appear in web
         <input type="checkbox" class="checkbox" style="margin-left: 3%;">
       </div>

       <div class="form-group">
         <button type="text" class="btn btn-primary form-control center-block" style="width: 50%;border-radius: 40px;">Add</button>
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
        <table id="table1" class="table table-striped"  style="width:100%">
          <h3>Contact Person</h3>
          <thead>
          <tr class="info">
            <th>S.No</th>
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
          <tr>
            <td></td>
            <td>Ahsan</td>
            <td>Ali</td>
            <td> 4</td>
            <td>Pakistan</td>
            <td>Karachi</td>
            <td>Active</td>
            <td>
              <a onclick="editHtmlTbleSelectedRowp();" class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

              </a>

              <a onclick="removeSelectedRowp();" class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

              </a>
            </td>

          </tr>

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
          <div class="col-md-4">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                <table id="table" class="table table-striped"  style="width:100%">
                  <h3>Room Type</h3>
                  <thead>
                  <tr class="info">
                    <th>Bed</th>
                    <th>Person</th>
                    <th>Room Type</th>
                    <th>Actions</th>              
                        </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>5</td>
                    <td>Ahsan</td>
                    <td>West</td>
                    <td>
                      <a onclick="editHtmlTbleSelectedRow();" class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a onclick="removeSelectedRow();" class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Ahsan</td>
                    <td>East</td>
                    <td>
                      <a onclick="editHtmlTbleSelectedRow();" class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a onclick="removeSelectedRow();" class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>


                  </tr>
                  </tbody>

                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-4">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                <table id="example1" class="table table-striped"  style="width:100%">
                  <h3>View</h3>
                  <thead>
                  <tr class="info">
                    <th>S.No</th>
                    <th>View</th>
                    <th>Action</th>


                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>005</td>
                    <td>Ahsan</td>
                    <td>
                      <a class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>

                  </tr>

                  <tr>
                    <td>005</td>
                    <td>Ahsan</td>
                    <td>
                      <a class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>

                  </tr>
                  </tbody>

                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-4">
            <div class="box">
              <!-- <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div> -->
              <!-- /.box-header -->
              <div class="box-body"  style="overflow-x: auto">
                <table id="example1" class="table table-striped"  style="width:100%">
                  <h3>Meal Plan</h3>
                  <thead>
                  <tr class="info">
                    <th>S.No</th>
                    <th>Meal Plan</th>
                    <th>Action</th>


                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>005</td>
                    <td>Ahsan</td>

                    <td>
                      <a class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td>005</td>
                    <td>Ahsan</td>

                    <td>
                      <a class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

                      </a>

                      <a class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

                      </a>
                    </td>
                  </tr>
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
        </div>
      </div>

      <!-- <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block">Submit</button> </div>
        <div class="col-md-4"></div>
      </div> -->

</form>

    </section>
  </div>

 
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
            var fieldHTML = '<div><input type="text" class="form-control" placeholder="'+nam.substr(0,1).toUpperCase()+nam.substr(1)+'" style="width: 55%" name="'+nam+'[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png'); ?>"/></a></div>'; //New input field html
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


      <script>
            
            var rIndex,
                table = document.getElementById("table");
            
            // check the empty input
            function checkEmptyInput()
            {
                var isEmpty = false,
                    fname = document.getElementById("fname").value,
                    lname = document.getElementById("lname").value,
                    age = document.getElementById("age").value;
            
                if(fname === ""){
                    alert("No Of Bed Connot Be Empty");
                    isEmpty = true;
                }
                else if(lname === ""){
                    alert("No of Person Connot Be Empty");
                    isEmpty = true;
                }
                else if(age === ""){
                    alert("Room Type Connot Be Empty");
                    isEmpty = true;
                }
                return isEmpty;
            }
            
            // add Row
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    fname = document.getElementById("fname").value,
                    lname = document.getElementById("lname").value,
                    age = document.getElementById("age").value;
            
                cell1.innerHTML = fname;
                cell2.innerHTML = lname;
                cell3.innerHTML = age;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            }
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("fname").value = this.cells[0].innerHTML;
                      document.getElementById("lname").value = this.cells[1].innerHTML;
                      document.getElementById("age").value = this.cells[2].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var fname = document.getElementById("fname").value,
                    lname = document.getElementById("lname").value,
                    age = document.getElementById("age").value;
               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = fname;
                table.rows[rIndex].cells[1].innerHTML = lname;
                table.rows[rIndex].cells[2].innerHTML = age;
              }
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("age").value = "";
            }
        </script>


          <script>
            
            var rIndex1,
                table1 = document.getElementById("table1");
            
            // check the empty input
            function checkEmptyInputp()
            {
                var isEmpty = false,
                    fpname = document.getElementById("fpname").value,
                    lpname = document.getElementById("lpname").value,
                    title  = document.getElementById("title").value,
                    phone  = document.getElementById("phone").value,
                    mobile = document.getElementById("mobile").value,
                    email  = document.getElementById("email").value;
                    //age = document.getElementById("age").value;
            
                if(lpname === ""){
                    alert("Name Connot Be Empty");
                    isEmpty = true;
                }
                else if(title === ""){
                    alert("Title Connot Be Empty");
                    isEmpty = true;
                }
                else if(mobile === ""){
                    alert("Mobile Connot Be Empty");
                    isEmpty = true;
                }
                return isEmpty;
            }
            
            // add Row
            function addHtmlTable()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
                var newRow = table1.insertRow(table1.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),
                    cell6 = newRow.insertCell(5),
                    //cell7 = newRow.insertCell(6),
                    fpname = document.getElementById("fpname").value,
                    lpname = document.getElementById("lpname").value,
                    title = document.getElementById("title").value,
                    phone = document.getElementById("phone").value,
                    mobile = document.getElementById("mobile").value,
                    email = document.getElementById("email").value;
                   // age = document.getElementById("age").value;

                    /* if (document.getElementById('age1').checked) 
                      age = "Active";
                    else if(document.getElementById('age2').checked)
                       age = "Inactive";*/
         
                cell1.innerHTML = fpname;
                cell2.innerHTML = lpname;
                cell3.innerHTML = title;
                cell4.innerHTML = phone;
                cell5.innerHTML = mobile;
                cell6.innerHTML = email;
                //cell7.innerHTML = age;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            }
            
            // display selected row data into input text
            function selectedRowToInputp()
            {
                
                for(var i = 1; i < table1.rows.length; i++)
                {
                    table1.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex1 = this.rowIndex;
                      document.getElementById("fpname").value = this.cells[0].innerHTML;
                      document.getElementById("lpname").value = this.cells[1].innerHTML;
                      document.getElementById("title").value = this.cells[2].innerHTML;
                      document.getElementById("phone").value = this.cells[3].innerHTML;
                      document.getElementById("mobile").value = this.cells[4].innerHTML;
                      document.getElementById("email").value = this.cells[5].innerHTML;
                     // document.getElementById("age").value = this.cells[6].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRowp()
            {
                var fpname = document.getElementById("fpname").value,
                    lpname = document.getElementById("lpname").value,
                    title = document.getElementById("title").value,
                    phone = document.getElementById("phone").value,
                    mobile = document.getElementById("mobile").value,
                    email = document.getElementById("email").value;
                   // age = document.getElementById("age").value;
               if(!checkEmptyInput()){
                table1.rows[rIndex1].cells[0].innerHTML = fpname;
                table1.rows[rIndex1].cells[1].innerHTML = lpname;
                table1.rows[rIndex1].cells[2].innerHTML = title;
                table1.rows[rIndex1].cells[3].innerHTML = phone;
                table1.rows[rIndex1].cells[4].innerHTML = mobile;
                table1.rows[rIndex1].cells[5].innerHTML = email;
               // table1.rows[rIndex].cells[6].innerHTML = age;
              }
            }
            
            function removeSelectedRowp()
            {
                table1.deleteRow(rIndex1);
                // clear input text
                document.getElementById("fpname").value = "";
                document.getElementById("lpname").value = "";
                document.getElementById("title").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("mobile").value = "";
                document.getElementById("email").value = "";
                //document.getElementById("age").value = "";
            }
        </script>


</body>
</html>
