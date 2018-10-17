
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
    <section class="content-header">
      <h1>
        Setup Data
        <small>Season List</small>
      </h1>
      <ol class="breadcrumb">
        <li><button class="btn btn-dropbox btn-sm"><a href="<?php echo base_url('season'); ?>" style="color: whitesmoke">Add</a></button></li>

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
                  <th>Name</th>
                  <th>Gre From</th>
                  <th>Gre To</th>
                  <th>Hijri From</th>
                  <th>Hijri To</th>
                  <th>Term & Condition</th>
                  <th>Term Detail</th>
                  <th style="text-align: center;">Action</th>
                </tr>

                </thead>
                <tbody id="showdata">
                <!-- <tr>
                  <?php //foreach ($cities as $country) { ?>
                  
                  <td><?php// echo $country->season_id; ?></td>
                  <td><?php //echo $country->term_cond_desc;?></td>
                  <td><?php// echo $country->term_cond_det_desc; ?></td>
                  <td><?php //echo $country->seeson_name; ?></td>
                  <td><?php  $country->inactive_flag; //if($country->inactive_flag==0){echo "Active";} else {//echo "InActive";} ?></td>

                  <td style="    width: 15%;">
                    <a class="fa fa-check fa-lg" style="color: dodgerblue;padding-left: 20%;position: relative;left: 10px;" data-toggle="modal" data-target="#modal-default"></a>
                    
<a href="<?php //echo base_url() . "season/delete_season_id/" . $country->season_id; ?>" onclick="myFunction()" class="fa fa-times fa-lg" style="color: red;position: relative;left: 15px;">

                    </a>
                    <script>
function myFunction() {
    alert("Selected Country Deleted successfully");
}
</script>
                  </td>
                </tr>
                

<?php// } ?>
</ol> -->
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Season</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
          <form id="myForm" action="" method="post" class="form-horizontal">
           <div class="box-body">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" placeholder="ID Auto Generate" disabled>
                    <input type="hidden" name="season_id" value="">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="seeson_name">Season Name</label>
                    <input name="seeson_name" type="text" class="form-control" placeholder="Season Name" style="border-radius: 1px;width: 100%;padding: 9px">
                  </div>
                  <label for="gor_from_date">Gregorian Calendar <br><small>From</small> </label>
                  <div class="form-group">
                    <input id="gor_from_date" name="gor_from_date" type="date" class="form-control" style="border-radius: 1px;width: 100%;padding: 9px;">
                  </div>

                  <label for="hij_from_date">Hijri Calendar <br><small>From</small> </label>
                  <div class="form-group">
                    <!--<input type="date" class="form-control" id="exampleInputEmail1">-->

                    <input type="text" id="hij_from_date" name="hij_from_date" class="calendarsPicker"  style="border-radius: 1px;width: 100%;padding: 9px">
                    <script>
                        $('#hij_from_date').calendarsPicker({
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
                  <label for="term_cond_id">Term & Condition</label>
                    <select list="hosting-plan" id="term_cond_id" name="term_cond_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                  <option>Select Terms & Condition</option>
                  <?php  foreach ($terms as $term){ ?>
                    <option value="<?= $term->term_cond_id ?>"><?= $term->term_cond_desc ?></option>
                  <?php } ?>
                </select>
                </div>
                <br>
                <div class="form-group">
                 <label for="address">Term & Condition Detail</label>
                 <select list="hosting-plan" id="term_cond_det_id" name="term_cond_det_id" style="width: 100%;border: 1px solid #d4d4d4;padding: 5px;">
                  <option>Select Term & Condition Detail</option>
                </select>
                </div>
                <label for="gor_to_date"> <br><small>To</small> </label>
                <div class="form-group">
                  <input type="date" class="form-control" id="gor_to_date" name="gor_to_date">
                </div>

                <label for="hij_to_date"><br><small>To</small> </label>
                <div class="form-group">
                  <input type="text" id="hij_to_date" name="hij_to_date" class="calendarsPicker"  style="border-radius: 1px;width: 100%;padding: 9px">
                  <script>
                      $('#hij_to_date').calendarsPicker({
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
    showAllseason();

    //Add New
    $('#btnAdd').click(function(){
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New season Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>season/addseason');
    });


    $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
     var term_cond_id = $('input[name=term_cond_id]');
      var address = $('input[name=term_cond_det_id]');
      var seeson_name = $('input[name=seeson_name]');
      var gor_from_date = $('input[name=gor_from_date]');
      var gor_to_date = $('input[name=gor_to_date]');
      var hij_from_date = $('input[name=hij_from_date]');
      var hij_to_date = $('input[name=hij_to_date]');
      var status = $('input[name=inactive_flag]');
      var validate = true;
     if(term_cond_id.val()==''){
        term_cond_id.parent().parent().addClass('has-error');
        validate = false;
      }else{
        term_cond_id.parent().parent().removeClass('has-error');
      }
      if(address.val()==''){
        address.parent().parent().addClass('has-error');
        validate = false;
      }else{
        address.parent().parent().removeClass('has-error');
      }
       if(seeson_name.val()==''){
        seeson_name.parent().parent().addClass('has-error');
        validate = false;
      }else{
        seeson_name.parent().parent().removeClass('has-error');
      }
       if(status.val()==''){
        status.parent().parent().addClass('has-error');
        validate = false;
      }else{
        status.parent().parent().removeClass('has-error');
      }
      if(gor_from_date.val()==''){
        gor_from_date.parent().parent().addClass('has-error');
        validate = false;
      }else{
        gor_from_date.parent().parent().removeClass('has-error');
      }
      if(gor_to_date.val()==''){
        gor_to_date.parent().parent().addClass('has-error');
        validate = false;
      }else{
        gor_to_date.parent().parent().removeClass('has-error');
      }
      if(hij_from_date.val()==''){
        hij_from_date.parent().parent().addClass('has-error');
        validate = false;
      }else{
        hij_from_date.parent().parent().removeClass('has-error');
      }
      if(hij_to_date.val()==''){
        hij_to_date.parent().parent().addClass('has-error');
        validate = false;
      }else{
        hij_to_date.parent().parent().removeClass('has-error');
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
              $('.alert-success').html('Season '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllseason();
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
      var season_id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit season Type');
      $('#myForm').attr('action', '<?php echo base_url() ?>season/updateseason');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>season/editseason',
        data: {season_id: season_id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('select[name="term_cond_id"] option:selected').attr('Selected', false);
          $('select[name="term_cond_det_id"] option:selected').attr('Selected', false);
          $('input[name=seeson_name]').val("");
          $('input[name=season_id]').val("");
            getDetailListByTermId(data.term_cond_id, function(){
              setTimeout(function(){ $('select[name="term_cond_det_id"]').find('option[value='+data.term_cond_det_id+']').attr('Selected', 'Selected'); }, 500);
               
            });
          $('select[name="term_cond_id"]').find('option[value='+data.term_cond_id+']').attr('Selected', 'Selected');
          
          $('input[name=seeson_name]').val(data.seeson_name);
          $('input[name=season_id]').val(data.season_id);
          $('input[name=gor_from_date]').val(data.gor_from_date);
          $('input[name=gor_to_date]').val(data.gor_to_date);
          $('input[name=hij_from_date]').val(data.hij_from_date);
          $('input[name=hij_to_date]').val(data.hij_to_date);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    });

    //delete- 
    $('#showdata').on('click', '.item-delete', function(){
      var season_id = $(this).attr('data');
      $('#deleteModal').modal('show');
      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>season/deleteseason',
          data:{season_id:season_id},
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('season Type Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllseason();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('season has not been deleted. This Term id is using in another table.');
          }
        });
      });
    });



    //function
    function showAllseason(){
       var tableSrc = '<?php echo base_url() ?>season/showAllseason';
       //remove present table data
      $('#example1').dataTable().fnDestroy();
      $('#example1').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": tableSrc,
          "aoColumns": [
              { "sTitle": "ID", "sType": "numeric" },
              { "sTitle": "Name", "sType": "string" },
              { "sTitle": "Gre From", "sType": "string" },
              { "sTitle": "Gre To", "sType": "string" },
              { "sTitle": "Hijri From", "sType": "string" },
              { "sTitle": "Hijri To", "sType": "string" },
              { "sTitle": "Term & Condition", "sType": "string" },
              { "sTitle": "Term Detail", "sType": "string" },
              { "sTitle": "Action", "sType": "html" }
          ]
      }).css("width","100%");
    }
  });
});
</script>

<script type="text/javascript">
   function getDetailListByTermId(term_cond_id, callBak = null){
          var term_cond_id = term_cond_id;
          if(term_cond_id == '')
          {
            $('#term_cond_det_id').prop('disabled',true);
          }
          else
          {
            $('#term_cond_det_id').prop('disabled',false);
          
          $.ajax({
              url:"<?php echo base_url() ?>term/get_term",
              type: "POST",
              data: {'term_cond_id' : term_cond_id},
              dataType: 'json',
              success: function(data){
                $('#term_cond_det_id').html(data);
              },
              error: function(){
                alert ('Error occur..!!');
              }
          });
        }
        if(callBak != null){
          callBak();
        }
      }
    $(document).ready(function(){
       $("#term_cond_id").change(function(){
        getDetailListByTermId($(this).val());
      });
    });
 </script>
