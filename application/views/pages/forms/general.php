 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="box" style="width: 80%;margin-left: 10%;background: #c1c1c1;">
      <div class="box-body">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 3%">
      <h1>
        Master Data
        <small>Add Client</small>
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
          <!-- <div class="form-group">
                  <input type="text" class="form-control" placeholder="Record No" id="exampleInputPassword1" placeholder="Password" style="width: 182%">
          </div> -->
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name" id="exampleInputPassword1">
                </div>
                 <div class="form-group">
                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <label>Fax</label>
                          <input type="text" class="form-control" placeholder="Fax" style="width: 55%" name="fax[]" data-role="fax" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png') ?>"\></a>
                        </div>
                      </div>
                    </tr>
                  </table>
                  
                </div>
                <div class="form-group" style="margin-top: -10%;">
                  <form action="/action_page.php" method="get">
                    <label>Credit Due Date</label>
                    <input list="browsers" placeholder="Select Credit Due Date " name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <form action="/action_page.php" method="get">
                    <label>State/Province</label>
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
                  <label>Account Number</label>
                  <input type="number" class="form-control" placeholder="Account Number" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label>VAT No</label>
                  <input type="number" class="form-control" placeholder="VAT No" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <label>Branch</label>
                    <input list="browsers" placeholder="Select Branch" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers6">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>
                <div class="form-group">
                  <label>GAZT No</label>
                  <input type="number" class="form-control" placeholder="GAZT No" id="exampleInputEmail1">
                </div>

<div class="form-group">

                  <p style="position: relative;top: 10px;">
                    <input type="checkbox" name="checkbox1" class="checkbox1">
                    NO VAT
                    <label class="" style="    font-weight: 400;margin-left: 3%;">
                      <input type="checkbox" name="checkbox1" class="checkbox1">
                      Suspended
                    </label>
                    <label style="    font-weight: 400;    margin-left: 3%;">
                      <input type="checkbox" name="checkbox1" class="checkbox1">
                      Black List
                    </label>
                  </p>
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
                  <label>Confirm Credit Limit</label>
                  <input type="text" class="form-control" placeholder="Confirm Credit Limit" id="exampleInputEmail1">
                </div>
                <div class="form-group" >
                  <label>Short Name</label>
                  <input type="text" class="form-control" placeholder="Short Name" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <label>Salesman</label>
                    <input list="browsers" placeholder="Select Salesman" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <label>Commission</label>
                  <input type="text" class="form-control" placeholder="Commission">
                </div>

                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <label>Country</label>
                    <input list="browsers" placeholder="Select Country" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Address" id="exampleInputEmail1">
                </div>

                <div class="form-group" style="">
                  <label>Website</label>
                  <input type="text" class="form-control" placeholder="Website">
                </div>


                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <label>Category</label>
                    <input list="browsers" placeholder="Select Category" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers6">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>
                

                 <div class="form-group">
                  <label>NTN No.</label>
                  <input type="number" class="form-control" placeholder="NTN No." id="exampleInputEmail1">
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
                  <form action="/action_page.php" method="get">
                    <label>Dedicated Hotels</label>
                    <input list="browsers" placeholder="Dedicated Hotels" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers7">
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
            <label>Phone</label>
             <input type="text" class="form-control" placeholder="Phone" data-role="phone" style="width: 55%" name="phone[]" value=""/>
             <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png') ?>"/></a>
           </div>
         </div>
       </tr>
    </table>

                </div>

                <div class="form-group" style="margin-top: -10%">
                  <form action="/action_page.php" method="get">
                    <label>Payment Method</label>
                    <input list="browsers" placeholder="Select Payment Method" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <form action="/action_page.php" method="get">
                    <label>City</label>
                    <input list="browsers" placeholder="Select City" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <label>Account title</label>
                  <input type="text" class="form-control" placeholder="Account title" id="exampleInputEmail1">
                </div>

 <div class="form-group">
  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1">
                </div>
               


                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <label>Recovery Officer</label>
                    <input list="browsers" placeholder="Recovery Officer" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <datalist id="browsers7">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>

                  </form>
                </div>

                <div class="form-group">
                  <label>GST No.</label>
                  <input type="number" class="form-control" placeholder="GST No." id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label>Instructions</label>
                  <input type="text" class="form-control" placeholder="Instructions" id="exampleInputEmail1">
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
      <div class="row" style="margin-bottom: 3%">
        <h4 style="margin-bottom: 3%;margin-left: 2%;">
        Travel Information
        <!-- <small>Add Client</small> -->
      </h4>

        <div class="col-md-4">
          <div class="form-group">
            <label>Travel No</label>
                  <input type="number" class="form-control" placeholder="Travel No" id="exampleInputEmail1" style="    width: 95%;margin-left: 2%;">
                </div>
        </div>
        <div class="col-md-4">
           <div class="form-group">
             <form action="/action_page.php" method="get">
              <label>Travel Type</label>
               <input list="browsers" placeholder="Select Travel Type" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
               <datalist id="browsers6">
                 <option value="Internet Explorer">
                 <option value="Firefox">
                 <option value="Chrome">
                 <option value="Opera">
                 <option value="Safari">
               </datalist>

             </form>
                </div>
        </div>


      </div>

      <div class="row"  style="margin-bottom: 3%">

        <div class="col-md-4"></div>

      </div>
<!-- 
      <div class="row" style="margin-top: -2%">
        <div class="box-body" >
         <div class="col-md-3">
           <div class="form-group">
            <label>ID</label>
             <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
           </div>
         </div>
         <div class="col-md-3">
          <label>Description</label>
           <input type="text" id="as" name="as" class="form-control" placeholder="Description">
         </div>
          <div class="col-md-3">
             <label class="btn btn-primary center-block" for="my-file-selector" style="border-radius: 30px;width: 40%;margin-bottom: 2%;margin-top: 2%;">
    <input id="my-file-selector" name="age" type="file" multiple="multiple" style="display:none"
        onchange="$('#upload-file-info').html(
            (this.files.length > 1) ? this.files.length + ' files' : this.files[0].name)">                     
    Upload&hellip;
</label>
<span class='label label-info' id="upload-file-info"></span>
          </div>
          <div class="col-md-3">
            <button class="btn btn-primary btn-sm center-block"  style="width: 50%;border-radius: 40px;margin-bottom: 2%;margin-top: 2%;">Add</button>
          </div>
        </div>
      </div> -->


<div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12">
            <div class="box">
              <table id="myTable" class=" table order-list"  style="width:100%">
                <thead>
                <tr class="info">
                <th>ID</th>
                <th>Description</th>
                <th>File Name</th>
                </tr>

                </thead>
                <tbody>
               <tr>
            <td class="col-sm-4">
                <input type="hidden" name="file_id[]" class="form-control" placeholder="ID Auto Generate" />
            </td>
            <td class="col-sm-4">
                <input type="mail" name="file_description[]" placeholder="File Description"  class="form-control"/>
            </td>
            <td class="col-sm-3">
                <input type="file" name="file_name[]" placeholder="File Upload" class="form-control"/>
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr>
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

<div class="row" style="margin-top:3% ">
        
        <div class="col-md-4">
      
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
                       <!-- <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="S No" name="fname" id="fname">
                      </div> -->
      
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="lname[]" id="lname">
                      </div>
      
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title[]" id="title">
                      </div>
      
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone[]" id="phone">
                      </div>
      
                    <div class="form-group">
                      <label>Mobile</label>
                        <input type="text" class="form-control" placeholder="Mobile" name="mobile[]" id="mobile">
                      </div>
      
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email[]" id="email">
                      </div>
        <div class="form-group">
          <label for="inactive_flag" class="" style="    font-weight: 400;margin-left: 6%;">
            <input type="radio" name="inactive_flag[]" id="inactive_flag" value="0" class="checkbox1">
            Active
          </label>
          <label for="inactive_flag" style="    font-weight: 400;    margin-left: 10%;">
            <input type="radio" name="inactive_flag[]" id="inactive_flag" value="1" class="checkbox1">
            Inactive
          </label>
        </div>
      
      
      
      
      
      
                      <div class="form-group">
                        <input type="button" class="btn btn-lg btn-block " id="addrows" value="Add Row" />
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
      </div>
      
          </div>

      <br>
<div class="box"  style="overflow-x: auto">
        <table id="myTable" class=" table orders-lists" style="width:100%">
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
          <!-- <tr>
            <td></td>
            <td>Ahsan</td>
            <td>Ali</td>
            <td> 4</td>
            <td>Pakistan</td>
            <td>Karachi</td>
            <td>Active</td>
            <td>
              <a onclick="editHtmlTbleSelectedRow();" class="fa fa-pencil fa-lg" style="color: dodgerblue;position: relative;right:8px;">

              </a>

              <a onclick="removeSelectedRow();" class="fa fa-times fa-lg" style="color: red;position: relative;left:5px;">

              </a>
            </td>

          </tr> -->


      

          </tbody>

        </table>
      </div>

    </div>
  
 



     <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block" style="width: 30%;border-radius: 40px;">Submit</button> </div>
        <div class="col-md-4"></div>
      </div>
          <br>

</form>

    </section>
  </div>
</div>

  <footer class="main-footer" style="    margin-top: -20px;">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="../../index.html">Holy Land</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
   <div class="tab-content">
      <!-- Home tab content -->
      <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active" style="background-color: #222d32;">
        <div><h4 class="control-sidebar-heading">Layout Options</h4><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="fixed" class="pull-right"> Fixed layout</label><p>Activate the fixed layout. You can't use fixed and boxed layouts together</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="layout-boxed" class="pull-right"> Boxed Layout</label><p>Activate the boxed layout</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label><p>Toggle the left sidebar's state (open or collapse)</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label><p>Let the sidebar mini expand on hover</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar Slide</label><p>Toggle between slide over content and push content effects</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label><p>Toggle between dark and light skins for the right sidebar</p></div><h4 class="control-sidebar-heading">Skins</h4><ul class="list-unstyled clearfix"><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Blue</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Black</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Purple</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Green</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Red</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Yellow</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Black Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Green Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Red Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Yellow Light</p></li></ul></div></div>
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
</div>

<!-- ./wrapper -->


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


<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            var nam = $(this).parents('.field_wrapper').find('input').attr('data-role');
            var fieldHTML = '<div><input type="text" class="form-control" placeholder="'+nam.substr(0,1).toUpperCase()+nam.substr(1)+'" style="width: 55%" name="'+nam+'[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png') ?>"/></a></div>'; //New input field html
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


<!-- 


        <style type="text/css">
          body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

table
{
    border-collapse: separate;
}

tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content: counter(Serial); /* Display the counter */
}
        </style>
 -->

        <script type="text/javascript">
          $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="hidden" class="form-control" placeholder="ID Auto Generate" name="file_id' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="File Description" name="file_description' + counter + '"/></td>';
        cols += '<td><input type="file" class="form-control" placeholder="Upload File" name="file_name' + counter + '"/></td>';

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
    var counter = 0;

    $("#addrows").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="hidden" class="form-control" placeholder="Contact Name" name="cont_name[]"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Contact Name" name="lname[]"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Contact Title" name="title[]"/></td>';
        cols += '<td><input type="number" class="form-control" placeholder="Contact Phone" name="phone[]"/></td>';
        cols += '<td><input type="number" class="form-control" placeholder="Contact Mobile" name="mobile[]"/></td>';
        cols += '<td><input type="email" class="form-control" placeholder="Contact Email" name="email[]"/></td>';
        cols += '<td><label>Active</label><input type="radio" class="checkbox1" name="inactive_flag[]"/><label>Inactive</label><input type="radio" class="checkbox1" name="inactive_flag[]"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-lists").append(newRow);
        counter++;
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

</body>
</html>
