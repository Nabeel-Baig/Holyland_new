  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 3%">
      <h1>
        Setup Data
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
          <div class="form-group">
                  <input type="text" class="form-control" placeholder="Record No" id="exampleInputPassword1" placeholder="Password" style="width: 182%">
          </div>
        </li>
        
      </ol>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="ID" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
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
                  <form action="/action_page.php" method="get">
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
                  <input type="text" class="form-control" placeholder="Account title" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="VAT No" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
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
                  <form action="/action_page.php" method="get">
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

                  <p style="position: relative;top: 10px;">
                    <input type="checkbox" name="checkbox1" class="checkbox1">
                    NO VAT
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
                  <input type="text" class="form-control" placeholder="Confirm Credit Limit" id="exampleInputEmail1">
                </div>
                <div class="form-group">

    <table>
       <tr>
         <div class="field_wrapper">
           <div>
             <input type="text" class="form-control" placeholder="Number" style="width: 55%" name="field_name[]" value=""/>
             <a href="javascript:void(0);" class="add_button " title="Add field" style="position: relative;bottom: 31px;left: 220px;"><img src="<?php echo base_url('assets/images/add-icon.png') ?>"/></a>
           </div>
         </div>
       </tr>
    </table>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>






                  <script type="text/javascript">
                      $(document).ready(function(){
                          var maxField = 10; //Input fields increment limitation
                          var addButton = $('.add_button'); //Add button selector
                          var wrapper = $('.field_wrapper'); //Input field wrapper
                          var fieldHTML = '<div><input type="text" class="form-control" placeholder="Number" style="width: 55%" name="field_name[]" value=""/><a href="javascript:void(0);"  style="position: relative;bottom: 31px;left: 220px;" class="remove_button"><img src="<?php echo base_url('assets/images/remove-icon.png') ?>"/></a></div>'; //New input field html
                          var x = 1; //Initial field counter is 1

                          //Once add button is clicked
                          $(addButton).click(function(){
                              //Check maximum number of input fields
                              if(x < maxField){
                                  x++; //Increment field counter
                                  $(wrapper).append(fieldHTML); //Add field html
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
                  <script></script>
                </div>

                <div class="form-group" style="margin-top: -8%">
                  <input type="text" class="form-control" placeholder="Short Name" id="exampleInputEmail1">
                </div>

                <div class="form-group" style="">
                  <input type="text" class="form-control" placeholder="Commission">
                </div>
                
                <div class="form-group">
                  <form action="/action_page.php" method="get">
                    <input list="browsers" placeholder="Select Payment Term" name="browser" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
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
                  <form action="/action_page.php" method="get">
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
                  <input type="number" class="form-control" placeholder="Account Number" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Insturtions" id="exampleInputEmail1">
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
          <td>
             <input type="text" class="form-control" placeholder="Fax"style="width: 90%">
          </td>
          <td>
            <button class="btn btn-primary btn-sm" style="position: relative; left: 20px">Add</button>
          </td>
       </tr>
    </table>
                  
                </div>
                <div class="form-group">
                  <form action="/action_page.php" method="get">
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
                  <input type="text" class="form-control" placeholder="Address" id="exampleInputEmail1">
                </div>
                <div class="form-group" style="">
                  <input type="text" class="form-control" placeholder="Website">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="VAT No" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Instructions" id="exampleInputEmail1">
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
        </div>
      </div>
      <div class="row" style="margin-bottom: 3%">
        <h4 style="margin-bottom: 3%;margin-left: 2%;">
        Travel Information
        <!-- <small>Add Client</small> -->
      </h4>
        <div class="col-md-4">
          <div class="form-group">
                  <input type="number" class="form-control" placeholder="Travel No" id="exampleInputEmail1" style="    width: 95%;margin-left: 2%;">
                </div>
        </div>
        <div class="col-md-4">
           <div class="form-group">
             <form action="/action_page.php" method="get">
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
        <div class="col-md-4">
          <div class="form-group">

            <label class="" style="    font-weight: 400;margin-left: 6%;">
              <input type="checkbox" name="checkbox1" class="checkbox1">
              Suspended
            </label>
            <label style="    font-weight: 400;    margin-left: 10%;">
              <input type="checkbox" name="checkbox1" class="checkbox1">
              Block List
            </label>
          </div>
        </div>

      </div>

      <div class="row"  style="margin-bottom: 3%">

        <div class="col-md-4"></div>

      </div>

      <div class="row" style="margin-top: -2%">
        <div class="box-body" >
         <div class="col-md-3">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="ID">
           </div>
         </div>
         <div class="col-md-3">
           <input type="text" class="form-control" placeholder="Description">
         </div>
          <div class="col-md-3">
            <input type="file" id="exampleInputFile">
          </div>
          <div class="col-md-3">
            <button class="btn btn-primary btn-sm" style="width: 30%;">Add</button>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="box-body" style="background-color: whitesmoke">
          <table id="example1" class="table table-responsive table-bordered "  style="width:100%;">
            <thead>
            <tr>
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

<div class="row" style="margin-top:3% ">
        <h4 style="margin-bottom: 1%;margin-left: 2%;">
        Contact Person
        <!-- <small>Add Client</small> -->
      </h4>
  <div class="col-md-3">
    <div class="form-group">

      <label class="" style="    font-weight: 400;margin-left: 2%;">
        <input type="checkbox" name="checkbox1" class="checkbox1">
        Active
      </label>
      <label style="    font-weight: 400;margin-left: 2%;">
        <input type="checkbox" name="checkbox1" class="checkbox1">
        Inactive
      </label>
    </div>
  </div>
</div>
  <div class="row" style="margin-bottom: 3%">
        <form action="post">
          <div class="col-md-4">
          <div class="form-group">
                  <input type="number" class="form-control" placeholder="S.No" style="    width: 100%;margin-left: 2%;" required>
                </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" style="width: 100%;margin-left: 2%;" required>
                </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
                  <input type="text" class="form-control" placeholder="Title" style="    width: 100%;margin-left: 2%;" required>
                </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
                  <input type="number" class="form-control" placeholder="Phone" style="    width: 100%;margin-left: 2%;" required>
                </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
                  <input type="number" class="form-control" placeholder="Mobile" style="    width: 100%;margin-left: 2%;" required>
                </div>
        </div>
        <div class="col-md-3">
          <div class="form-group ">
                  <input type="email" class="form-control" placeholder="Email" style="    width: 100%;margin-left: 2%;">
                </div>
        </div>

        <div class="col-md-3">
          <button class="btn btn-primary btn-sm" style="    width: 30%;">Add</button>
        </div>

        
        



      </div>

      <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block">Submit</button> </div>
        <div class="col-md-4"></div>
      </div>

</form>

    </section>
  </div>

 
 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="<?php echo base_url('home') ?>">Holy Land</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
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
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
</body>
</html>
