

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/js/jquery.calendars.js"></script>
  <script src="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/js/jquery.calendars.plus.min.js"></script>
  <script src="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/js/jquery.plugin.min.js"></script>
  <script src="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/js/jquery.calendars.picker.js"></script>
  <script src="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/js/jquery.calendars.islamic.min.js"></script>
  <link href="https://cdn.rawgit.com/kbwood/calendars/2.1.0/dist/css/jquery.calendars.picker.css" rel="stylesheet">



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 3%">
      <h1>
        Setup Data
        <small>Add Room</small>
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
        <br>
        <br>
        <br>
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="ID Auto Generated" id="exampleInputEmail1">
                </div>
                <br>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="exampleInputPassword1">
                </div>
                <label for="comment">Gregorian Calendar <br><small>From</small> </label>
                <div class="form-group">
                  <input type="date" class="form-control" id="exampleInputEmail1">
                </div>

                <label for="comment">Hijri Calendar <br><small>From</small> </label>
                <div class="form-group">
                  <!--<input type="date" class="form-control" id="exampleInputEmail1">-->

                  <input type="text" id="txtHijriDate" class="calendarsPicker" style="width: 100%">
                  <script>
                      $('#txtHijriDate').calendarsPicker({
                          calendar: $.calendars.instance('islamic')
                      });
                  </script>


                </div>


              </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->

          
          <!-- /.box -->


        </div>

        <div class="col-md-6">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
              <div class="form-group">
                <select class="form-control">
                  <option>Term & Condition</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <br>
              <div class="form-group">
                <select class="form-control">
                  <option>Detail</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <label for="comment">Gregorian Calendar <br><small>To</small> </label>
              <div class="form-group">
                <input type="date" class="form-control" id="exampleInputEmail1">
              </div>

              <label for="comment">Hijri Calendar <br><small>To</small> </label>
              <div class="form-group">
                <input type="text" id="txtHijriDate1" class="calendarsPicker" style="width: 100%">
                <script>
                    $('#txtHijriDate1').calendarsPicker({
                        calendar: $.calendars.instance('islamic')
                    });
                </script>
              </div>

            </div>


          <!-- /.box -->


        </div>


      </div>


      <br>
      <br>
      <br>
      <div class="row">
<div class="col-md-4"></div>
        <div class="col-md-4  center-block"> <button class="btn btn-primary center-block">Submit</button> </div>
        </form>
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
