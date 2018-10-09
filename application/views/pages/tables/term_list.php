<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setup Data
        <small>Term List</small>
      </h1>
      <ol class="breadcrumb">
        <li><button class="btn btn-dropbox btn-sm"><a href="<?php echo base_url('term'); ?>" style="color: whitesmoke">Add</a></button></li>

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
                  <th>Term Name</th>
                  <th>Detail Name</th>
                  <th>Status</th>
                  <th style="text-align: center;">Action</th>
                </tr>

                </thead>
                <tbody id="showdata">
     <!--            <tr>
                  <?php //foreach ($countries as $country) { ?>
                  
                  <td><?php //echo $country->term_cond_det_id; ?></td>
                  <td><?php //echo $country->country_name;?></td>
                  <td><?php //echo $country->term_cond_det_desc; ?></td>
                  <td><?php //echo $country->term_sht_name; ?></td>
                  <td><?php  $country->inactive_flag;// if($country->inactive_flag==0){echo "Active";} else {//echo "InActive";} ?></td>

                  <td style="    width: 15%;">
                    <a class="fa fa-check fa-lg" style="color: dodgerblue;padding-left: 20%;position: relative;left: 10px;" data-toggle="modal" data-target="#modal-default"></a>
                    
 <a href="<?php //echo base_url() . "term/delete_term_cond_det_id/" . $country->term_cond_det_id; ?>" onclick="myFunction()" class="fa fa-times fa-lg" style="color: red;position: relative;left: 15px;">

                    </a>
                    <script>
function myFunction() {
    alert("Selected Country Deleted successfully");
}
</script>
                  </td>
                </tr>
                

<?php// } ?>
</ol>
  -->               </tbody>

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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Term</h4>
      </div>
      <div class="modal-body">
          <form id="myForm" action="" method="post" class="form-horizontal">
            <input type="hidden" name="term_cond_det_id" value="0">
            <div class="form-group">
              <label for="name" class="label-control col-md-4">Term Name</label>
              <div class="col-md-8">
                <select list="hosting-plan" id="term_cond_id" name="term_cond_id" style="width: 100%;padding: 5px;border: #cecece solid 1px;">
                  <option>Select Term</option>
                  <?php  foreach ($terms as $term) { ?>
                    <option value="<?= $term->term_cond_id ?>"><?= $term->term_cond_desc ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="label-control col-md-4">Detail Name</label>
              <div class="col-md-8">
                <input type="text" name="term_cond_det_desc" class="form-control">
              </div>
            </div>

      
           <div class="form-group">
                  <div class="col-md-8">
                  <label for="inactive_flag" class="label-control col-md-4">Active
                    <input type="radio" name="inactive_flag" value="0" class="checkbox1 active">
                      </label>
                  <label for="inactive_flag" class="label-control col-md-4">Inactive
                    <input type="radio" name="inactive_flag" value="1" class="checkbox1 inactive">
                       </label>
                  </div>
                   </div>
           
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
  $(document).ready(function() {

  $(function(){
    showAllterm();

    //Add New
    $('#btnAdd').click(function(){
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New term Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>term/addterm');
    });


    $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      var term_cond_id = $('input[name=term_cond_id]');
      var term_cond_det_desc = $('input[name=term_cond_det_desc]');
      var status = $('input[name=inactive_flag]');
      var validate = true;
       if(term_cond_id.val()==''){
        term_cond_id.parent().parent().addClass('has-error');
        validate = false;
      }else{
        term_cond_id.parent().parent().removeClass('has-error');
      }
      if(term_cond_det_desc.val()==''){
        term_cond_det_desc.parent().parent().addClass('has-error');
        validate = false;
      }else{
        term_cond_det_desc.parent().parent().removeClass('has-error');
      }
      
      if(status.val()==''){
        status.parent().parent().addClass('has-error');
        validate = false;
      }else{
        status.parent().parent().removeClass('has-error');
      }

      if(validate){
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
              $('.alert-success').html('term '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllterm();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not add data');
          }
        });
      }
    });

    //edit
    $('#showdata').on('click', '.item-edit', function(){
      var term_cond_det_id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit term Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>term/updateterm');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>term/editterm',
        data: {term_cond_det_id: term_cond_det_id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('select[name="term_cond_id"]').find('option[value='+data.term_cond_id+']').attr('Selected', 'Selected');
          $('input[name=term_cond_det_desc]').val(data.term_cond_det_desc);
          $('input[name=term_cond_det_id]').val(data.term_cond_det_id);
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
      var term_cond_det_id = $(this).attr('data');
      $('#deleteModal').modal('show');
      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>term/deleteterm',
          data:{term_cond_det_id:term_cond_det_id},
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('term Type Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllterm();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('term has not been deleted. This Country ID and term ID is using in another table.');
          }
        });
      });
    });



    //function
    function showAllterm(){
       var tableSrc = '<?php echo base_url() ?>term/showAllterm';
       //remove present table data
      $('#example1').dataTable().fnDestroy();
      $('#example1').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": tableSrc,
          "aoColumns": [
              { "sTitle": "ID", "sType": "numeric" },
              { "sTitle": "Term Name", "sType": "string" },
              { "sTitle": "Detail Name", "sType": "string" },
              { "sTitle": "Status", "sType": "string" },
              { "sTitle": "Action", "sType": "html" }
          ]
      }).css("width","100%");
    }
  });
});
</script>
