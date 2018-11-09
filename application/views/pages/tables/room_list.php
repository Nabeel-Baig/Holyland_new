<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setup Data
        <small>Room Type</small>
      </h1>
      <ol class="breadcrumb">
        <li><button class="btn btn-dropbox btn-sm"><a href="<?php echo base_url('room'); ?>" style="color: whitesmoke">Add</a></button></li>

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
            <!--<div class="box-header">-->
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            <!--</div>-->
            <!-- /.box-header -->
            <div class="box-body"  style="overflow-x: auto">
              <table id="example1" class="table table-bordered table-striped"  style="width:100%">
                <thead>
                  <ol>
                <tr>
                 <th>ID</th>
                  <th>Room Type Name</th>
                  <th>No Of Person</th>
                  <th>Note</th>
                  <th>Status</th>
                  <th style="text-align: center;">Action</th>
                </tr>

                </thead>
                <tbody id="showdata">
   </tbody>

              </table>
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
  </div>
  <!-- /.content-wrapper -->
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Room</h4>
      </div>
       <section class="content">
      <div class="box" style="background: #c1c1c1;">
      <div class="modal-body">
        <form role="form" id="myForm" action="" method="post" class="form-horizontal">
        <section class="content">
          <div class="row">
            
            <div class="col-md-6">

              
                <div class="box-body">
                  <div class="form-group">
                    <input type="hidden" name="room_id" class="form-control" value="0" placeholder="ID Auto Generate">
                  </div>
                  <div class="form-group">
                    <label>Room Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="room_type_name" id="room_type_name" style="width: 100%;padding: 9px;border-radius: 1px;">
                  </div>

                  <div class="form-group">
                    <label>No Of Person</label>
                    <input type="number" class="form-control" placeholder="Number Of Person" name="no_of_persons">
                  </div>

                </div>
            </div>
            <div class="col-md-6">
          
                <div class="form-group" style="margin-top: 10%;">
                  <label>Note</label>
                  <textarea class="form-control" rows="" name="note"></textarea>
                </div>

              <div class="form-group" style="margin-top: 10%">
          <label for="inactive_flag" class="" style="    font-weight: 400;margin-left: 6%;">
            <input type="radio" name="inactive_flag" value="0" class="checkbox1 active">
            Active
          </label>
          <label for="inactive_flag" style="    font-weight: 400;    margin-left: 10%;">
            <input type="radio" name="inactive_flag" value="1" class="checkbox1 inactive">
            Inactive
          </label>
        </div>


              </form>

              <!-- /.box -->
            </div>

          </div>

       </section>
   
 </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>












 
<!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit room</h4>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="row">
            <br>
            <br>
            <br>
         




            <div class="col-md-6">
          <form id="myForm" action="" method="post" class="form-horizontal">
            <input type="hidden" name="room_id" value="0">
            <div class="form-group">
              <label for="name" class="label-control col-md-4">room Name</label>
              <div class="col-md-8">
                <input type="text" name="room_type_name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="label-control col-md-4">No Of Person</label>
              <div class="col-md-8">
                <input type="text" name="no_of_persons" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="label-control col-md-4">Note</label>
              <div class="col-md-8">
                <input type="text" name="note" class="form-control">
              </div>
            </div>
              <div class="form-group">
          <label for="inactive_flag" class="" style="    font-weight: 400;margin-left: 6%;">
            <input type="radio" name="inactive_flag" value="0" class="checkbox1 active">
            Active
          </label>
          <label for="inactive_flag" style="    font-weight: 400;    margin-left: 10%;">
            <input type="radio" name="inactive_flag" value="1" class="checkbox1 Inactive">
            Inactive
          </label>
        </div>

           
          </form>
           </div>
            </div>

        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div> 
  </div> 
</div> 
 --> 
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
    </div><!-- /.modal-content
  </div>
</div> --><!-- /.modal -->

<script>
  $(function(){
    showAllroom();

    //Add New
    $('#btnAdd').click(function(){
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New room Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>room/addroom');
    });


    $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      /*var room_type_name = $('input[name=room_type_name]');
      //var arabic_name = $('input[name=arabic_name]');
      var no_of_persons = $('input[name=no_of_persons]');
      var note = $('textarea[name=note]');
      var result = '';
      if(room_type_name.val()==''){
        room_type_name.parent().parent().addClass('has-error');
      }else{
        room_type_name.parent().parent().removeClass('has-error');
        result +='1';
      }
      if(no_of_persons.val()==''){
        no_of_persons.parent().parent().addClass('has-error');
      }else{
        no_of_persons.parent().parent().removeClass('has-error');
        result +='2';
      }
      if(note.val()==''){
        note.parent().parent().addClass('has-error');
      }else{
        note.parent().parent().removeClass('has-error');
        result +='3';
      }*/
      
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#myModal').modal('hide');
              $('#myForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              $('.alert-success').html('Room '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllroom();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not add data');
          }
        });
      
    });

    //edit
    $('#showdata').on('click', '.item-edit', function(){
      var room_id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit Room Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>room/updateroom');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>room/editroom',
        data: {room_id: room_id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=room_type_name]').val(data.room_type_name);
          //$('input[name=arabic_name]').val(data.arabic_name);
          $('input[name=no_of_persons]').val(data.no_of_persons);
          $('textarea[name=note]').val(data.note);
          $('input[name=room_id]').val(data.room_id);
          if(data.inactive_flag == 1){
            $('.inactive').prop('checked', true);
            $('.active').prop('checked', false);
          }else if(data.inactive_flag == 0){
            $('.active').prop('checked', true);
            $('.inactive').prop('checked', false);
          }
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    });

    //delete- 
    $('#showdata').on('click', '.item-delete', function(){
      var room_id = $(this).attr('data');
      $('#deleteModal').modal('show');
      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>room/deleteroom',
          data:{room_id:room_id},
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('room Type Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllroom();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Error deleting');
          }
        });
      });
    });



    //function
    function showAllroom(){
    var tableSrc = '<?php echo base_url() ?>room/showAllroom';
       //remove present table data
      $('#example1').dataTable().fnDestroy();
      $('#example1').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": tableSrc,
          "aoColumns": [
              { "sTitle": "ID", "sType": "numeric" },
              { "sTitle": "Room Type Name", "sType": "string" },
              { "sTitle": "No Of Persons", "sType": "string" },
              { "sTitle": "Note", "sType": "string" },
              { "sTitle": "Status", "sType": "string" },
              { "sTitle": "Action", "sType": "html" }
          ]
      }).css("width","100%");
    }
  });
</script>