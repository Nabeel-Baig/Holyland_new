 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
        <small>Client List</small>
      </h1>
      <ol class="breadcrumb">
        <li><button class="btn btn-dropbox btn-sm" style="wclient_idth: 100%;border-radius: 30px;"><a href="<?php echo base_url('client'); ?> " style="color: whitesmoke"style="width: 100%;border-radius: 30px;">Add</a></button></li>

      </ol>
      <!--<ol class="breadcrumb">-->
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
        <!--<li><a href="#">Tables</a></li>-->
        <!--<li class="active">Data tables</li>-->
      <!--</ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>

            <!-- /.box-header -->
            <div class="box-body"  style="overflow-x: auto">
              <table id="example1" class="table table-bordered table-striped"  style="width:100%">

                <thead>
                <tr class="info">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Short Name</th>
                  <th>Category</th>
                  <th>Salesperson</th>
                  <th>Commission</th>
                  <!-- <th>Recovery Officer</th> -->
                  <th>Payment Method</th>
                  <th>Confirm Credit Limit</th>
                  <th>Credit Term Desc</th>
                  <th>Dedicated Hotels</th>
                  <th>Phone</th>
                  <th>Fax</th>
                  <th>Country</th>
                  <th>State/Province</th>
                  <th>City</th>
                  <th>Address</th>
                  <!-- <th>Account Title</th> -->
                  <th>Account Number</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Instructions</th>
                  <th>Vat No</th>
                  <th>NTN No</th>
                  <th>GST No</th>
                  <th>Branch</th>
                  <th>Status</th>
                  <th>Attachment</th>
                  <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody id="showdata">
               <!--  <tr>
                  <td>005</td>
                  <td>Ahsan</td>
                  <td>Ali</td>
                  <td> 4</td>
                  <td>Pakistan</td>
                  <td>Pakistan</td>
                  <td>Karachi</td>
                  <td>Johr</td>
                  <td>03331234567</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Active</td>
                  <td>
                   <label class="btn btn-primary " for="my-file-selector" style="border-radius: 30px;width: 50%;    padding: 2px 8px;">
<input id="my-file-selector" type="file" multiple="multiple" style="display:none"onchange="$('#upload-file-info').html((this.files.length > 1) ? this.files.length + ' files' : this.files[0].name)">
    Upload&hellip;
</label>
<span class='label label-info' id="upload-file-info"></span>
                  </td>
                  <td>
                    <a class="fa fa-pencil fa-lg" style="color: dodgerblue;padding-left: 16%;position: relative;left: 10px;" ng-click="r.changeView('requests/edit/' + request.id)" data-toggle="modal" data-target="#myModal">

        </a>
        <a class="fa fa-times fa-lg" style="color: red;position: relative;left: 15px;" ng-click="r.changeView('requests/edit/' + request.id)">

        </a>
        <a class="fa fa-eye fa-lg" style="color: #695649;position: relative;left: 20px;" ng-click="r.changeView('requests/edit/' + request.id)" data-toggle="modal" data-target="#myModal">

        </a>
                  </td>
                </tr>

                <tr>
                  <td>005</td>
                  <td>Ahsan</td>
                  <td>Ali</td>
                  <td> 4</td>
                  <td>Pakistan</td>
                  <td>Pakistan</td>
                  <td>Karachi</td>
                  <td>Johr</td>
                  <td>03331234567</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Karachi</td>
                  <td>Active</td>
                  <td>
                   <label class="btn btn-primary" for="my-file-selector" style="border-radius: 30px;width: 50%;    padding: 2px 8px;">
<input id="my-file-selector" type="file" multiple="multiple" style="display:none"onchange="$('#upload-file-info').html((this.files.length > 1) ? this.files.length + ' files' : this.files[0].name)">
    Upload&hellip;
</label>
<span class='label label-info' id="upload-file-info"></span>
                  </td>
                  <td>
                    <a class="fa fa-pencil fa-lg" style="color: dodgerblue;padding-left: 16%;position: relative;left: 10px;" ng-click="r.changeView('requests/edit/' + request.id)" data-toggle="modal" data-target="#myModal">

        </a>
        <a class="fa fa-times fa-lg" style="color: red;position: relative;left: 15px;" ng-click="r.changeView('requests/edit/' + request.id)">

        </a>
        <a class="fa fa-eye fa-lg" style="color: #695649;position: relative;left: 20px;" ng-click="r.changeView('requests/edit/' + request.id)" data-toggle="modal" data-target="#myModal">
        </a>
                  </td>
                </tr> -->
                </tbody>
                
              </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     <!--  <b>Version</b> 2.4.0 -->
    </div>
      <strong>Copyright &copy; 2018-2019  <a href="http://incisivesoft.com/">Incisivesoft</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
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

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<!-- page script -->


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="    width: 85%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <section class="content-header" style="margin-bottom: 3%">
        <h1>
          Master Data
          <small>Edit Client</small>
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
              <input type="text" class="form-control" placeholder="Record No" style="width: 182%;border-radius: 1px">
            </div> -->
          </li>

        </ol>

      </section>

      <!-- Main content -->
     <section class="content">
       <div class="box" style="width: 80%;margin-left: 10%;background: #c1c1c1;">
         <div class="modal-body">
          <form role="form" id="myForm" action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
                  <input type="hidden" name="client_id" value="">
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="client_name" required="client_name" style="width: 100%;padding: 8px;border-radius: 1px;">

                </div>

                 <div class="form-group">
                  <table>
                    <tr>
                      <div class="field_wrapper">
                        <div>
                          <label>Fax</label>
                          <input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" style="width: 55%" name="fax[]" data-role="fax" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png') ?>"\></a>
                        </div>
                      </div>
                    </tr>
                  </table>
                  
                </div>
                <div class="form-group" style="margin-top: -8%;">
                    <label>Credit Term Desc</label>
                    <input type="text" placeholder="Credit Term Desc" name="credit_term_desc" id="credit_term_desc" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
           

                </div>
                <div class="form-group" style="margin-top: -0%;">
                    <label>Country</label>
                    <select name="country_id" id="country_id" required="country_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 6px;">
                      <option value="">Select Country</option>
                      <?php
                      foreach ($country as $row) {
                         echo '<option value="'.$row->country_id.'">'.$row->country_name.'</option>';
                      }
                      ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Account title</label>
                  <input type="text" class="form-control" placeholder="Account title" id="exampleInputEmail1">
                </div>

                 <div class="form-group">
                  <label>Recovery Officer</label>
                    <input list="browsers" placeholder="Recovery Officer" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                </div>
                <div class="form-group">
                  <label>GST No.</label>
                  <input type="number" class="form-control" placeholder="GST No." name="gst_no" id="gst_no">
                </div>

                <div class="form-group">
                  <label>VAT No</label>
                  <input type="number" class="form-control" placeholder="VAT No" name="vat_no" id="vat_no">
                </div>
               

              

              <div class="form-group">
          <label class="pr-4" for="vat_flag">
            <input type="checkbox" name="vat_flag" value="1" id="vat_flag" class="checkbox1 inactive_vat">No VAT
          </label> 
          <label class="pr-4" for="gst_flag">
            <input type="checkbox" name="gst_flag" value="1" id="gst_flag" class="checkbox1 inactive_gst">NO GST
          </label> 
          <label class="pr-4" for="black_list_flag">
            <input type="checkbox" name="black_list_flag" value="1" id="black_list_flag" class="checkbox1 inactive_black">Blacklist
          </label> 
          <label class="pr-4" for="inactive_flag">
            <input type="checkbox" name="inactive_flag" value="1" id="inactive_flag" class="checkbox1 inactive">SUSPENDED
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
       
          
          <!-- /.box -->


        </div>

        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                 
                <div class="form-group">
                  <label>Confirm Credit Limit</label>
                  <input type="text" class="form-control" placeholder="Confirm Credit Limit" name="credit_limit" id="credit_limit">
                </div>
                <div class="form-group" >
                  <label>Short Name</label>
                  <input type="text" class="form-control" placeholder="Short Name" name="client_sht_name" id="client_sht_name">
                </div>

                <div class="form-group">
                 <label>Salesman</label>
                    <select name="salesperson_id" id="salesperson_id" required="salesperson_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value=""></option>
                      <?php foreach ($sales as $salesperson) { ?>
                        <option value="<?= $salesperson->salesperson_id ?>"><?= $salesperson->salesperson_name ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Commission</label>
                  <input type="text" class="form-control" placeholder="Commission" name="salesperson_commission" id="salesperson_commission">
                </div>

                <div class="form-group">
                  <label>State/Province</label>
                  <select name="state_id" id="state_id" required="state_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <option value="">Select State</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Account Number</label>
                  <input type="number" class="form-control" placeholder="Account Number" name="gl_ac_no" id="gl_ac_no">
                </div>

                <div class="form-group" style="">
                  <label>Website</label>
                  <input type="text" class="form-control" placeholder="Website" name="website" id="website">
                </div>
                <div class="form-group">
                 <label>Category</label>
                    <select name="category_id" id="category_id" required="category_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value=""></option>
                      <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category->category_id ?>"><?= $category->category_desc ?></option>
                      <?php } ?>
                    </select>
                </div>

                 <!--<div class="form-group">-->
                  <!--<input type="number" class="form-control" placeholder="GAZT No" id="exampleInputEmail1">-->
                <!--</div>                -->
               
                

                 <div class="form-group">
                 <label>NTN No.</label>
                  <input type="number" class="form-control" placeholder="NTN No." name="ntn_no" id="ntn_no">
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
                  <label>Dedicated Hotels</label>
                    <select name="hotel_id" id="hotel_id" required="hotel_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value=""></option>
                      <?php foreach ($hotels as $hotel) { ?>
                        <option value="<?= $hotel->hotel_id ?>"><?= $hotel->hotel_name ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">

    <table>
       <tr>
         <div class="field_wrapper">
           <div>
            <label>Phone</label>
             <input type="text" required="phone" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" style="width: 55%" name="phone[]" data-role="phone" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
           </div>
         </div>
       </tr>
    </table>

                </div>

                <div class="form-group" style="margin-top: -9%">
                  <label>Branch</label>
                    <select name="branch_id" id="branch_id" required="branch_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value=""></option>
                      <?php foreach ($branches as $branch) { ?>
                        <option value="<?= $branch->branch_id ?>"><?= $branch->branch_name ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                 <label>Payment Method</label>
                    <select name="pay_terms_id" id="pay_terms_id" required="pay_terms_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value=""></option>
                      <?php foreach ($payments as $payment) { ?>
                        <option value="<?= $payment->pay_terms_id ?>"><?= $payment->pay_term_desc ?></option>
                      <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                  <label>City</label>
                    <select name="city_id" id="city_id" required="city_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value="">Select City</option>
                    </select>
                </div>

               <div class="form-group">
                <label>Email</label>
                  <input type="email" required="email" class="form-control" placeholder="Email" name="email_id" id="email_id">
                </div>
               


                <div class="form-group">
                  <label>Address</label>
                  <input type="text" required="address" class="form-control" placeholder="Address" name="address" id="address">
                </div>
              
                <div class="form-group">
                  <label>Instructions</label>
                  <input type="text" class="form-control" placeholder="Instructions" name="note" id="note">
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
      <div class="row" style="margin-bottom: 3%">
        <h4 style="margin-bottom: 3%;margin-left: 2%;">
        Travel Information
        <!-- <small>Add Client</small> -->
      </h4>
        <div class="col-md-4">
          <div class="form-group">
           <label>Travel No</label>
                  <input type="number" class="form-control" placeholder="Travel No" name="travel_no" id="travel_no" style="    width: 95%;margin-left: 2%;">
                </div>
        </div>
        <div class="col-md-4">
           <div class="form-group">
            <label>Travel Type</label>
              <select name="travel_type_id" id="travel_type_id" required="travel_type_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                <option value="">Select Travel Type</option>
                <?php foreach ($travels as $travel) { ?>
                  <option value="<?= $travel->travel_type_id ?>"><?= $travel->travel_type_desc ?></option>
              <?php } ?>
              </select>
                </div>
        </div>


      </div>

      <div class="row"  style="margin-bottom: 3%">

        <div class="col-md-4"></div>

      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12">
            <div class="box">
              <table id="myTableFiles" class=" table order-list"  style="width:100%">
                <thead>
                <tr class="info">
                
                <th>Description</th>
                <th>File Name</th>
                <th>Attachement</th>
                <th>Action</th>
                </tr>

                </thead>
                <tbody>
               
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
                       <!-- <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="S No" name="fname" id="fname">
                      </div> -->
      
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
                        <input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" name="contact_person_phone[]" id="contact_person_phone">
                      </div>
      
                    <div class="form-group">
                      <label>Mobile</label>
                        <input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" name="contact_person_mobile[]" id="contact_person_mobile">
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
</div>
<br>
  <div class="box"  style="overflow-x: auto">
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

      <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button type="submit" class="btn btn-primary center-block" id="btnSave" style="width: 30%;border-radius: 40px;">Submit</button> </div>
        <div class="col-md-4"></div>
      </div>

</form>
         </div>
         </div>
    </section>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 
 <!-- <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            var nam = $(this).parents('.field_wrapper').find('input').attr('data-role');
            var fieldHTML = '<div><input type="text" class="form-control" placeholder="'+nam.substr(0,1).toUpperCase()+nam.substr(1)+'" style="width: 55%;padding: 10px;border-radius: 1px" name="'+nam+'[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php //echo base_url('assets/images/remove-icon.png'); ?>"/></a></div>'; //New input field html
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
</script> -->





<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
          Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  window.contact_person_global_count = 0;
  window.attachement_detail_global_count = 0;
  $(document).ready(function() {
  $(function(){
    showAllclient();

    //Add New
    $('#btnAdd').click(function(){
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New client Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>client/addclient');
    });


      

    //edit
    $('#showdata').on('click', '.item-edit', function(){
      var client_id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit client Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>client/updateclient');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>client/editclient',
        data: {client_id: client_id},
        async: false,
        dataType: 'json',
        success: function(data){

          $('select[name="country_id"] option:selected').attr('Selected', false);
          $('select[name="state_id"] option:selected').attr('Selected', false);
          $('input[name=client_name]').val("");
          $('input[name=client_id]').val("");
            
          getStateListByCountryId(data.country_id, function(){
              setTimeout(function(){ $('select[name="state_id"]').find('option[value='+data.state_id+']').attr('Selected', 'Selected'); }, 500);
            });

          getCityListByStateId(data.state_id, function(){
              setTimeout(function(){ $('select[name="city_id"]').find('option[value='+data.city_id+']').attr('Selected', 'Selected'); }, 500);
            });

          $('select[name="country_id"]').find('option[value='+data.country_id+']').attr('Selected', 'Selected');
          $('select[name="category_id"]').find('option[value='+data.category_id+']').attr('Selected', 'Selected');
          $('select[name="salesperson_id"]').find('option[value='+data.salesperson_id+']').attr('Selected', 'Selected');
          $('select[name="pay_terms_id"]').find('option[value='+data.pay_terms_id+']').attr('Selected', 'Selected');
          $('select[name="hotel_id"]').find('option[value='+data.hotel_id+']').attr('Selected', 'Selected');
          $('select[name="branch_id"]').find('option[value='+data.branch_id+']').attr('Selected', 'Selected');
          $('select[name="travel_type_id"]').find('option[value='+data.travel_type_id+']').attr('Selected', 'Selected');
          $('input[name=client_id]').val(data.client_id);
          $('input[name=client_name]').val(data.client_name);
          $('input[name=client_sht_name]').val(data.client_sht_name);
          $('input[name=salesperson_commission]').val(data.salesperson_commission);
          $('input[name=credit_limit]').val(data.credit_limit);
          $('input[name=credit_term_desc]').val(data.credit_term_desc);
          $('input[name=gl_ac_no]').val(data.gl_ac_no);
          $('input[name=email_id]').val(data.email_id);
          $('input[name=website]').val(data.website);
          $('input[name=note]').val(data.note);
          $('input[name=vat_no]').val(data.vat_no);
          $('input[name=ntn_no]').val(data.ntn_no);
          $('input[name=gst_no]').val(data.gst_no);
          $('input[name=travel_no]').val(data.travel_no);
          $('input[name=address]').val(data.address);
          if(data.inactive_flag == 1){
            $('.inactive').prop('checked', true);
            $('.active').prop('checked', false);
          }
          if(data.black_list_flag == 1){
            $('.inactive_black').prop('checked', true);
            $('.active').prop('checked', false);
          }
            if(data.vat_flag == 1){
            $('.inactive_vat').prop('checked', true);
            $('.active').prop('checked', false);
          }
            if(data.gst_flag == 1){
            $('.inactive_gst').prop('checked', true);
            $('.active').prop('checked', false);
          }


              var phone_parent = $('input[name^="phone"]').parents('.field_wrapper');
          var phone_list = JSON.parse(data.phone_list);
          if(phone_list.length > 0){
            $(phone_parent).html('<div><label>Phone</label><input type="text" required="phone" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" style="width: 55%" name="phone[]" data-role="phone" value=""/><a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a></div>');
            for(let i = 0; i < phone_list.length; i++){
              if(i == 0){
                $('input[name^="phone"]').val(phone_list[i]);
                continue;
              }
              $(phone_parent).append('<div><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" style="width: 55%;padding: 10px;border-radius: 1px" name="phone[]" value="'+phone_list[i]+'"><a href="javascript:void(0);" style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png'); ?>"></a></div>');
            }
          }

          var fax_parent = $('input[name^="fax"]').parents('.field_wrapper');
          var fax_list = JSON.parse(data.fax_list);
          if(fax_list.length > 0){
            $(fax_parent).html('<div><label>Fax</label><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" style="width: 55%" name="fax[]" data-role="fax" value=""/><a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a></div>');
            for(let i = 0; i < fax_list.length; i++){
              if(i == 0){
                $('input[name^="fax"]').val(fax_list[i]);
                continue;
              }
              $(fax_parent).append('<div><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" style="width: 55%;padding: 10px;border-radius: 1px" name="fax[]" value="'+fax_list[i]+'"><a href="javascript:void(0);" style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png'); ?>"></a></div>');
            }
          }

          var contact_person = JSON.parse(data.cont_person);
               window.contact_person_global_count = contact_person.length;
          if(contact_person.length > 0){
            $('#myTable tbody').html('');
            /*console.log(contact_person);*/
            for(let i = 0; i < contact_person.length; i++){
               if(contact_person[i].contact_person_inactive_flag == "1"){
                var ischeck_contact_person_inactive = "checked";
                var ischeck_contact_person_active = "";
               }else if(contact_person[i].contact_person_inactive_flag == "0"){
                var ischeck_contact_person_active = "checked";
                var ischeck_contact_person_inactive = "";
               }
               if(contact_person[i].contact_person_name == "")
                continue;
              $('#myTable tbody').append('<tr><td><input type="text" class="form-control" value="'+contact_person[i].contact_person_name+'" name="contact_person_name['+i+'][]" id="contact_person_name" required="contact_person_name" placeholder="Name" /></td><td><input type="text" class="form-control" value="'+contact_person[i].contact_person_title+'" placeholder="Title" name="contact_person_title['+i+'][]" id="contact_person_title" required="contact_person_title"></td><td><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" name="contact_person_phone['+i+'][]" id="contact_person_phone" value="'+contact_person[i].contact_person_phone+'"></td><td><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="03333906233" name="contact_person_mobile['+i+'][]" id="contact_person_mobile" value="'+contact_person[i].contact_person_mobile+'" required="contact_person_mobile"></td><td><input type="email" placeholder="Email" class="form-control" name="contact_person_email['+i+'][]" id="contact_person_email" value="'+contact_person[i].contact_person_email+'" required="contact_person_email"></td><td><label><input type="radio" name="contact_person_inactive_flag['+i+'][]" id="contact_person_inactive_flag"  value="0" '+ischeck_contact_person_active+' class="checkbox1"/>Active</label><label><input type="radio" name="contact_person_inactive_flag['+i+'][]" id="contact_person_inactive_flag"  value="1" '+ischeck_contact_person_inactive+' class="checkbox1"/>Inactive</label></td><td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td></tr>');
            }
          }

          var attachement_detail = JSON.parse(data.attachement_detail);
          window.attachement_detail_global_count = attachement_detail.length;
            $('#myTableFiles tbody').html('');
          if (attachement_detail.length > 0) {
            for(let i=0; i < attachement_detail.length; i++){
              $('#myTableFiles tbody').append('<tr><td><input type="text" class="form-control" placeholder="File Description" value="'+attachement_detail[i].file_description+'" name="file_description['+i+'][]" id="file_description[]"></td><td><a href="<?= base_url('assets/client_files') ?>/'+attachement_detail[i].file_upload+'" target="_blank">'+attachement_detail[i].file_upload+'<a/><input type="file" class="form-control hidden" placeholder="Upload File" name="file_name['+i+'][]" id="file_name"><input type="hidden" name="file_name_hidden['+i+'][]" id="file_name_hidden" value="'+attachement_detail[i].file_upload+'"></td><td><img src="<?= base_url('assets/client_files') ?>/'+attachement_detail[i].file_upload+'" width="50" height="50" /></td><td><input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"></td></tr>');
            }
          }
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    });

    //delete- 
    $('#showdata').on('click', '.item-delete', function(){
      var client_id = $(this).attr('data');
      $('#deleteModal').modal('show');
      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>client/deleteclient',
          data:{client_id:client_id},
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('client Type Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllclient();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('client has not been deleted. This Term id is using in another table.');
          }
        });
      });
    });



    //function
    function showAllclient(){
       var tableSrc = '<?php echo base_url() ?>client/showAllclient';
       //remove present table datalist
      $('#example1').dataTable().fnDestroy();
      $('#example1').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": tableSrc,
          "aoColumns": [
              { "sTitle": "ID", "sType": "numeric" },
              { "sTitle": "Name", "sType": "string" },
              { "sTitle": "Short Name", "sType": "string" },
              { "sTitle": "Category", "sType": "string" },
              { "sTitle": "Salesperson", "sType": "string" },
              { "sTitle": "Commission", "sType": "string" },
              { "sTitle": "Payment Method", "sType": "string" },
              { "sTitle": "Confirm Credit Limit", "sType": "string" },
              { "sTitle": "Credit Term Desc", "sType": "string" },
              { "sTitle": "Dedicated Hotels ", "sType": "string" },
              { "sTitle": "Phone", "sType": "string" },
              { "sTitle": "Fax", "sType": "string" },
              { "sTitle": "Country", "sType": "string" },
              { "sTitle": "State/Province", "sType": "string" },
              { "sTitle": "City", "sType": "string" },
              { "sTitle": "Address", "sType": "string" },
              { "sTitle": "Account Number ", "sType": "string" },
              { "sTitle": "Email", "sType": "string" },
              { "sTitle": "Website", "sType": "string" },
              { "sTitle": "Instructions", "sType": "string" },
              { "sTitle": "Vat No", "sType": "string" },
              { "sTitle": "NTN No ", "sType": "string" },
              { "sTitle": "GST No", "sType": "string" },
              { "sTitle": "Branch", "sType": "string" },
              { "sTitle": "Status", "sType": "string" },
              { "sTitle": "Attachment", "sType": "string" },
              { "sTitle": "Action", "sType": "string" }
          ]
      }).css("width","100%");
    }
  });
});

 
</script>

 <script type="text/javascript">
          $(document).ready(function () {

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

      
        cols += '<td><input type="text" class="form-control" name="file_description['+window.attachement_detail_global_count+'][]" id="file_description" placeholder="File Description"  /></td>';
        cols += '<td><input type="file" class="form-control" placeholder="Upload File" name="file_name['+window.attachement_detail_global_count+'][]" id="file_name"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        window.attachement_detail_global_count++;
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
        if(inactive_flag == 0){
          var active = 'checked';
          var inactive = '';
        }
        else if(inactive_flag == 1){
         var inactive = 'checked';
         var active = '';
        }


        cols += '<td><input type="text" class="form-control" placeholder="Contact Name" value="'+name+'" name="contact_person_name['+window.contact_person_global_count+'][]" required="contact_person_name"/></td>';
        cols += '<td><input type="text" class="form-control" placeholder="Contact Title" value="'+title+'" name="contact_person_title['+window.contact_person_global_count+'][]" required="contact_person_title"/></td>';
        cols += '<td><input type="text" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" value="'+phone+'" name="contact_person_phone['+window.contact_person_global_count+'][]"/></td>';
        cols += '<td><input type="text" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" value="'+mobile+'" name="contact_person_mobile['+window.contact_person_global_count+'][]" required="contact_person_mobile"/></td>';
        cols += '<td><input type="email" class="form-control" placeholder="Contact Email" value="'+email+'" name="contact_person_email['+window.contact_person_global_count+'][] required="contact_person_email"/></td>';
        cols += '<td><label><input type="radio" class="checkbox1 active" value="0" '+active+' name="contact_person_inactive_flag['+window.contact_person_global_count+'][]"/>Active</label><label><input type="radio" class="checkbox1 inactive" value="1" '+inactive+' name="contact_person_inactive_flag['+window.contact_person_global_count+'][]"/>Inactive</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-lists").append(newRow);
        window.contact_person_global_count++;
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
 
   function getStateListByCountryId(country_id, callBak = null){
          var country_id = country_id;
          if(country_id == '')
          {
            $('#state_id').prop('disabled',true);
          }
          else
          {
            $('#state_id').prop('disabled',false);
          
           $.ajax({
              url:"<?php echo base_url(); ?>client/fetch_state",
              method: "POST",
              data:{country_id:country_id},
              success: function(data){
                $('#state_id').html(data);
              },
              error: function(){
                alert ('Error occur..!!12');
              }
          });
        }
        if(callBak != null){
          callBak();
        }
      }

      function getCityListByStateId(state_id, callBak = null){
          var state_id = state_id;
          if(state_id == '')
          {
            $('#city_id').prop('disabled',true);
          }
          else
          {
            $('#city_id').prop('disabled',false);
          
          $.ajax({
              url:"<?php echo base_url(); ?>city/fetch_city",
              method: "POST",
              data:{state_id:state_id},
              success: function(data){
                $('#city_id').html(data);
              },
              error: function(){
                alert ('Error occur..!!12');
              }
          });
        }
        if(callBak != null){
          callBak();
        }
      }
    $(document).ready(function(){
       $("#country_id").change(function(){
        getStateListByCountryId($(this).val());
      });
       $("#state_id").change(function(){
        getCityListByStateId($(this).val());
      });
    });
 </script>

 <script type="text/javascript">
      $(window).ready(function(){

        var maxField = 10; //Input fields increment limitation
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var x = 1; //Initial field counter is 1
       var remove_img = "<?php echo base_url('assets/images/remove-icon.png'); ?>";

        $(wrapper).on('click', '.add_button', function(e){
            e.preventDefault();
           var nam = $(this).parents('.field_wrapper').find('input').attr('data-role');
            var fieldHTML = '<div><input type="text" class="form-control" maxlength="11" minlength="10" placeholder="'+nam.substr(0,1).toUpperCase()+nam.substr(1)+'" style="width: 55%" name="'+nam+'[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 163px;" class="remove_button"><img src="'+remove_img+'" /></a></div>'; //New input field html
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
