<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
        <small>Hotel List</small>
      </h1>
      <ol class="breadcrumb">
        <li><button class="btn btn-dropbox btn-sm" style="width: 100%;border-radius: 30px;"><a href="<?php echo base_url('hotel'); ?> " style="color: whitesmoke;">Add</a></button></li>

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
            <!-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body"  style="overflow-x: auto">
              <table id="example1" class="table table-striped"  style="width:auto">
                <thead>
                <tr class="info">
                  <th>ID</th>
                  <th>Hotel Name</th>
                  <th>Category</th>
                  <th>Phone</th>
                  <th>Fax</th>
                  <th>Country</th>
                  <th>State/Province</th>
                  <th>City</th>
                  <th>Address</th>
                  <th>Account Number</th>
                  <th>Allotment Account Number</th>
                  <th>Email</th>
                  <th>hot_website</th>
                  <th>VAT No</th>
                  <th>GAZT No</th>
                 <th>NTN No</th>
                 <th>GST No</th>
                  <th>Status</th>
                  <th>Attachment</th>
                  <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody id="showdata">
                
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
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
          <small>Edit Hotel</small>
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
                <input type="text" class="form-control" placeholder="Record No" style="width: 182%;border-radius: 1px;">
              </div> -->
            </li>

          </ol>

        </section>

        <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="box" style="width: 80%;margin-left: 10%;background: #c1c1c1;">
            <div class="modal-body">
              <form role="form" id="myForm" action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
                  <input type="hidden" name="hotel_id" value="0">
                </div>
                <div class="form-group">
                  <label>Hotel Name</label>
                  <input type="text" required="hotel_name" class="form-control" placeholder="Name" name="hotel_name" id="hotel_name">
                </div>

                <div class="form-group">
                  <label>Country</label>
                    <select name="country_id" id="country_id" required="country_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 6px;">
                      <option value="">Select Country</option>
                      <?php foreach ($country as $country) { ?>
                        <option value="<?= $country->country_id ?>"><?= $country->country_name ?></option>
                      <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                 <label>Category</label>
                   <select name="category" id="category" required="category" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                     <option value="">
                       <?php foreach ($categories as $category) { ?>
                        <option><?= $category->category_desc ?></option>
                      <?php } ?>
                     </option>
                   </select>
                </div>
                

                <div class="form-group">
                  <label>Account Number</label>
                    <input list="browsers" placeholder="Account Number" name="gl_ac_no" id="gl_ac_no" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                </div>

                <div class="form-group">
                  <label>Allotment Account Number</label>
                    <input list="browsers" placeholder="Allotment Account Number" name="alot_gl_ac_no" id="alot_gl_ac_no" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                </div>

                <div class="form-group">
                   <label>VAT No</label>
                  <input type="number" class="form-control" placeholder="VAT No" name="vat_no" id="vat_no">
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
                  <input type="text" class="form-control" placeholder="Hotel Address" name="address" id="address">
                </div>

                <div class="form-group">
                  <label>Website</label>
                  <input type="text" class="form-control" placeholder="Website" name="hot_website" id="hot_website">
                </div>
                 <div class="form-group">
                  <label>State</label>
                   <select name="state_id" id="state_id" required="state_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                    <option value="">Select State</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="hot_email_id" id="hot_email_id">
                </div>
               
                <div class="form-group">

                  <label>Account Title</label>
                  <input type="text" class="form-control" placeholder="Account Title" id="exampleInputEmail1">


                </div>
                <div class="form-group" style="margin-top: -1%;">
                  <label>Allotment Account Title</label>
                  <input type="text" class="form-control" placeholder="Allotment Account Title" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                 <label>GAZT No</label>
                  <input type="number" class="form-control" placeholder="GAZT No" name="gazt_no" id="gazt_no">
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
                          <input type="text" required="phone" maxlength="11" minlength="10" class="form-control" placeholder="03333906233" style="width: 55%" name="phone[]" data-role="phone" value=""/>
                          <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 163px;"><img src="<?php echo base_url('assets/images/add-icon.png'); ?>"/></a>
                        </div>
                      </div>
                    </tr>
                  </table>


                </div>


                <div class="form-group" style="margin-top: -11%">
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


                <div class="form-group" style="margin-top: -10%">
                  <label>City</label>
                    <select name="city_id" id="city_id" required="city_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                      <option value="">Select City</option>
                    </select>
                </div>

                <div class="form-group">

                 <p style="position: relative;top: 15px;">
                    <label for="web_appear_flag">
                  <input type="checkbox" name="web_appear_flag" value="1" class="checkbox1 inactive_web">
                  Appear In Web
                  </label>
                </p>
                </div>
                <div class="form-group">

                <p style="position: relative;top: 20px;">
                    <label for="hot_avail_flag">
                  <input type="checkbox" name="hot_avail_flag" value="1" class="checkbox1 inactive_avail">
                  Appear in Hotel availability
                  </label>
                </p>
                </div>
                <div class="form-group">

                   <p style="position: relative;top: 30px;">
                    <label for="vat_flag">
                  <input type="checkbox" name="vat_flag" value="1" class="checkbox1 inactive_vat">
                  NO VAT
                  </label>
                </p>
                </div>

                  <div class="form-group">
                  
                  <p style="position: relative;top: 30px;">
                    <label for="gst_flag">
                  <input type="checkbox" name="gst_flag" value="1" class="checkbox1 inactive_gst">
                  NO GST
                  </label>
                </p>
                </div>

                <div class="form-group" style="position: relative;top: 37px;">

                    <label for="inactive_flag" class="" >
                    <input type="checkbox" name="inactive_flag" value="1" class="checkbox1 inactive">
                    Suspended
                  </label>
              <!--     <label style="margin-left: 5%;">
                    <input type="checkbox" name="checkbox1" class="checkbox1 inactive_black">
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
              <br>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->
          </div>
        




        
        <br>
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
                 <table id="myTableMeal" class=" table orders-listsmp" style="width:100%">
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
                 <table id="myTableView" class=" table orders-listsview" style="width:100%">
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

        <div class="row">

        </div>


        <div class="row">

        </div>
  

        <br><br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4  center-block"> <button type="submit" class="btn btn-primary center-block" id="btnSave" style="width: 30%;border-radius: 40px;">Submit</button> </div>
          <div class="col-md-4"></div>
        </div>
        <br>
</form>
        </div>
          </div>
        </div>

        <!-- <div class="row">
  <div class="col-md-4"></div>
          <div class="col-md-4  center-block"> <button class="btn btn-primary center-block">Submit</button> </div>
          <div class="col-md-4"></div>
        </div> -->

      

      </section>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


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
  window.attachement_detail_global_count = 0;
  window.contact_person_global_count = 0;
  window.room_type_global_count = 0;
  window.meal_plan_global_count = 0;
  window.view_global_count = 0;
  $(document).ready(function() {
  $(function(){
    showAllhotel();

    //Add New
    $('#btnAdd').click(function(){
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New hotel Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>hotel/addhotel');
    });


/*$("#myform").submit(function (event) {
    event.preventDefault();
    var frmAction=$(this).attr("action");
    alert(frmAction);
});*/

    

    //edit
    $('#showdata').on('click', '.item-edit', function(){
      var hotel_id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit hotel Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>hotel/updatehotel');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>hotel/edithotel',
        data: {hotel_id: hotel_id},
        async: false,
        dataType: 'json',
        success: function(data){

          $('select[name="country_id"] option:selected').attr('Selected', false);
          $('select[name="state_id"] option:selected').attr('Selected', false);
          $('input[name=hotel_name]').val("");
          $('input[name=hotel_id]').val("");
            
          getStateListByCountryId(data.country_id, function(){
              setTimeout(function(){ $('select[name="state_id"]').find('option[value='+data.state_id+']').attr('Selected', 'Selected'); }, 500);
            });

          getCityListByStateId(data.state_id, function(){
              setTimeout(function(){ $('select[name="city_id"]').find('option[value='+data.city_id+']').attr('Selected', 'Selected'); }, 500);
            });

          $('select[name="country_id"]').find('option[value='+data.country_id+']').attr('Selected', 'Selected');
          $('input[name=hotel_id]').val(data.hotel_id);
          $('input[name=hotel_name]').val(data.hotel_name);
          $('select[name=category]').val(data.category);
          $('input[name=gl_ac_no]').val(data.gl_ac_no);
          $('input[name=alot_gl_ac_no]').val(data.alot_gl_ac_no);
          $('input[name=hot_email_id]').val(data.hot_email_id);
          $('input[name=hot_website]').val(data.hot_website);
          $('input[name=address]').val(data.address);
          $('input[name=vat_no]').val(data.vat_no);
          $('input[name=gazt_no]').val(data.gazt_no);
          $('input[name=ntn_no]').val(data.ntn_no);
          $('input[name=gst_no]').val(data.gst_no);
          if(data.inactive_flag == 1){
            $('.inactive').prop('checked', true);
            $('.active').prop('checked', false);
          }
           if(data.web_appear_flag == 1){
            $('.inactive_web').prop('checked', true);
            $('.active').prop('checked', false);
          }
           if(data.hot_avail_flag == 1){
            $('.inactive_avail').prop('checked', true);
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


          var attachement_detail = JSON.parse(data.attachement_detail);
          window.attachement_detail_global_count = attachement_detail.length;
            $('#myTableFiles tbody').html('');
          if (attachement_detail.length > 0) {
            for(let i=0; i < attachement_detail.length; i++){
              $('#myTableFiles tbody').append('<tr><td><input type="text" class="form-control" placeholder="File Description" value="'+attachement_detail[i].file_description+'" name="file_description['+i+'][]" id="file_description[]"></td><td><a href="<?= base_url('assets/hotel_files') ?>/'+attachement_detail[i].file_upload+'" target="_blank">'+attachement_detail[i].file_upload+'<a/><input type="file" class="form-control hidden" placeholder="Upload File" name="file_name['+i+'][]" id="file_name"><input type="hidden" name="file_name_hidden['+i+'][]" id="file_name_hidden" value="'+attachement_detail[i].file_upload+'"></td><td><img src="<?= base_url('assets/hotel_files') ?>/'+attachement_detail[i].file_upload+'" width="50" height="50" /></td><td><input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"></td></tr>');
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

          var room_type = JSON.parse(data.room_type);
          window.room_type_global_count = room_type.length;
          /*console.log(room_type != null);*/
          if (room_type != null && room_type.length > 0) {
            $('#myTableRoom tbody').html('');
            for(let i = 0; i < room_type.length; i++){
              
              var temp =[];
              var selected = '';
              temp.push('<option value=""></option>');
              <?php foreach ($rooms as $room): ?>
                if (<?= $room->room_id ?> == room_type[i].room_type_room) {
                  selected = 'selected';
                }
                else {
                  selected = '';
                }
                temp.push('<option value="<?= $room->room_id ?>"'+selected+'><?= $room->room_type_name ?></option>');
              <?php endforeach ?>
              var room_html = '<select class="form-control" name="room_type_room['+i+'][]" required="room_type_room">'+temp.join(' ')+'</select>';

              if(room_type[i].room_type_web_flag)
                var ischeck_room = "checked";
              else
                var ischeck_room = "";
              if (room_type[i].room_type_room == "")
                continue;
              $('#myTableRoom tbody').append('<tr><td><input type="number" class="form-control" value="'+room_type[i].room_type_nob+'" name="room_type_nob['+i+'][]" id="room_type_nob" placeholder="No. of Bed" required="room_type_nob"></td><td>'+room_html+'</td><td><label><input type="checkbox" name="room_type_web_flag['+i+'][]" '+ischeck_room+' value="1" class="checkbox1" >Appear in Web</label></td><td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td></tr>');
            }
          }

          var meal_plan = JSON.parse(data.meal_plan);
          window.meal_plan_global_count = meal_plan.length;
          if (meal_plan != null && meal_plan.length > 0) {
            $('#myTableMeal tbody').html('');

            for(let i = 0; i < meal_plan.length; i++){
              if (meal_plan[i].meal_plan_web_flag == 1) {
                $('.inactive_meal').prop('checked', true);
                $('.active_meal').prop('checked', false);
              }
              var temp = [];
              var selected = '';
              temp.push('<option value=""></option>');
              <?php foreach ($meals as $meal) {  ?>
                if(<?= $meal->meal_plan_id ?> == meal_plan[i].meal_plan_meal){
                  selected = 'selected';
                }else{
                  selected = '';
                }
                temp.push('<option value="<?= $meal->meal_plan_id ?>" '+selected+'><?= $meal->meal_plan_desc ?></option>');
              <?php } ?>
              var meal_html = '<select class="form-control" name="meal_plan_meal['+i+'][]">'+temp.join(' ')+'</select>';
              
              if(meal_plan[i].meal_plan_web_flag)
                var ischeck_meal = "checked";
              else
                var ischeck_meal = "";
              if (meal_plan[i].meal_plan_meal == "")
                continue;
              $('#myTableMeal tbody').append('<tr><td>'+meal_html+'</td><td><label><input type="checkbox" name="meal_plan_web_flag['+i+'][]" id="meal_plan_web_flag" value="1" '+ischeck_meal+' class="checkbox1 inactive_meal">Appear in Web</label></td><td><input type="button" class="ibtnDel btn btn-md btn-danger" value="Delete"></td></tr>');
            }
          }

          var view =JSON.parse(data.view);
          window.view_global_count = view.length;
          if (view != null  && view.length > 0) {
            $('#myTableView tbody').html('');
            for(let i = 0; i < view.length; i++){
              if (view[i].view_web_flag == 1) {
                $('.inactive_view').prop('checked', true);
                $('.active_view').prop('checked', false);
              }

              var temp = [];
              var selected = '';
              temp.push('<option value=""></option>');
              <?php foreach ($views as $view): ?>
                if (<?= $view->hot_view_id ?> == view[i].view_name) {
                  selected = 'selected';
                }else {
                  selected = '';
                }
                temp.push('<option value="<?= $view->hot_view_id ?>"'+selected+'><?= $view->hot_view_desc?></option>');
              <?php endforeach ?>
              var view_html = '<select class="form-control" name="view_name['+i+'][]">'+temp.join(' ')+'</select>';
              
               if(view[i].view_web_flag)
                var ischeck_view = "checked";
              else
                var ischeck_view = "";
              
              if (view[i].view_name == "")
                continue;
              $('#myTableView tbody').append('<tr><td>'+view_html+'</td><td><label><input type="checkbox" name="view_web_flag['+i+'][]" value="1" '+ischeck_view+' class="checkbox1 inactive_view">Appear in Web</label></td><td><input type="button" class="ibtnDel btn btn-md btn-danger" value="Delete"></td></tr>');
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
      var hotel_id = $(this).attr('data');
      $('#deleteModal').modal('show');
      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>hotel/deletehotel',
          data:{hotel_id:hotel_id},
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('hotel Type Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllhotel();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('hotel has not been deleted. This Term id is using in another table.');
          }
        });
      });
    });



    //function
    function showAllhotel(){
       var tableSrc = '<?php echo base_url() ?>hotel/showAllhotel';
       //remove present table datalist
      $('#example1').dataTable().fnDestroy();
      $('#example1').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": tableSrc,
          "aoColumns": [
              { "sTitle": "ID", "sType": "numeric" },
              { "sTitle": "Hotel Name", "sType": "string" },
              { "sTitle": "Category", "sType": "string" },
              { "sTitle": "Phone", "sType": "string" },
              { "sTitle": "Fax", "sType": "string" },
              { "sTitle": "Country", "sType": "string" },
              { "sTitle": "State/Province", "sType": "string" },
              { "sTitle": "City", "sType": "string" },
              { "sTitle": "Address", "sType": "string" },
              { "sTitle": "Account Number ", "sType": "string" },
              { "sTitle": "Allotment Account Number", "sType": "string" },
              { "sTitle": "Email", "sType": "string" },
              { "sTitle": "hot_website", "sType": "string" },
              { "sTitle": "VAT No", "sType": "string" },
              { "sTitle": "GAZT No", "sType": "string" },
              { "sTitle": "NTN No ", "sType": "string" },
              { "sTitle": "GST No", "sType": "string" },
              { "sTitle": "Status", "sType": "string" },
              { "sTitle": "Attachment", "sType": "string" },
              { "sTitle": "Action", "sType": "html" }
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
        /*console.log(inactive_flag);*/
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

</body>
</html>


<script type="text/javascript">
          $(document).ready(function () {
    var c_p_counter = 0;


    $("#addroom").on("click", function () {
        c_p_counter = window.room_type_global_count;
        var newRow = $("<tr>");
        var cols = "";
        var bed = $("#room_type_nob").val();
        /*var person = $("#room_type_nop").val();*/
        var room = $("#room_type_room").val();
        var web_flag = $("#room_type_web_flag:checked").val();
        var web = '';
        /*console.log(web_flag);*/
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
        var room_html = '<select class="form-control" name="room_type_room['+window.room_type_global_count+'][]">'+temp.join(' ')+'</select>';
        


        cols += '<td><input type="text" class="form-control" placeholder="No Of Bed" value="'+bed+'" name="room_type_nob['+ window.room_type_global_count +'][]"/></td>';
       /* cols += '<td><input type="text" class="form-control" placeholder="No Of Person" value="'+person+'" name="room_type_nop['+ window.room_type_global_count +'][]"/></td>';*/
        cols += '<td>'+room_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="room_type_web_flag['+ window.room_type_global_count +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsroom").append(newRow);
        window.room_type_global_count++;
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


    $("#addmeal").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var room = $("#meal_plan_meal").val();
        var web_flag = $("#meal_plan_web_flag:checked").val();
        var web = '';
        /*console.log(web_flag);*/
        if(web_flag == 1)
          web = 'checked';

         var temp = [];
              var selected = '';
              temp.push('<option value=""></option>');
              <?php foreach ($meals as $meal) {  ?>
                if(<?= $meal->meal_plan_id ?> == room){
                  selected = 'selected';
                }else{
                  selected = '';
                }
                temp.push('<option value="<?= $meal->meal_plan_id ?>" '+selected+'><?= $meal->meal_plan_desc ?></option>');
              <?php } ?>
              var meal_html = '<select class="form-control" name="meal_plan_meal['+window.meal_plan_global_count+'][]">'+temp.join(' ')+'</select>';
              
        cols += '<td>'+meal_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="meal_plan_web_flag['+ window.meal_plan_global_count +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsmp").append(newRow);
        window.meal_plan_global_count++;
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
        /*console.log(web_flag);*/
        if(web_flag == 1)
          web = 'checked';

        

        var temp = [];
        var selected = '';
        temp.push('<option value=""></option>')
        <?php foreach ($views as $view) { ?>
          if (<?= $view->hot_view_id ?> == room) {
            selected = 'selected';
          }
          else {
            selected = '';
          }
          temp.push('<option value="<?= $view->hot_view_id ?>" '+selected+'><?= $view->hot_view_desc ?></option>');
        <?php } ?>
        var view_html = '<select class="form-control" name="view_name['+window.view_global_count+'][]">'+temp.join(' ')+'</select>';
        


        cols += '<td>'+view_html+'</td>';
        cols += '<td><label><input type="checkbox" class="checkbox1" value="1" '+web+' name="view_web_flag['+ window.view_global_count +'][]"/>Appear in web</label></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.orders-listsview").append(newRow);
        window.view_global_count++;
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