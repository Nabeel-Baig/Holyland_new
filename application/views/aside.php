 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li class="active"><a href="<?php echo base_url('home'); ?>" style="background-color: #1e282c;"><i class="fa fa-circle-o"></i>Quick Analytics</a></li>
            
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Client
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('client'); ?>"><i class="fa fa-circle-o"></i>Add Client</a></li>
                <li><a href="<?php echo base_url('client/get_clients'); ?>"><i class="fa fa-circle-o"></i>Client List</a></li>
              </ul>
            </li>
         


<li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('supplier'); ?>"><i class="fa fa-circle-o">
            </i> Add Supplier</a>
            </li>
            <li>
              <a href="<?php echo base_url('supplier/supplier_list'); ?>"><i class="fa fa-circle-o">
            </i>Supplier List</a>
            </li>
          </ul>
        </li>

              <li class="treeview">
          <a href="#">
            <i class="fa fa-hotel"></i> <span>Hotels</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('hotel'); ?>"><i class="fa fa-circle-o">
            </i> Add Hotel</a></li>
            <li><a href="<?php echo base_url('hotel/hotel_list'); ?>"><i class="fa fa-circle-o">              
            </i>Hotel List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Room Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('room'); ?>"><i class="fa fa-circle-o">
            </i> Add Rooms</a></li>
            <li><a href="<?php echo base_url('room/room_list'); ?>"><i class="fa fa-circle-o">
            </i>Rooms List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cloud"></i> <span>Seasons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('season'); ?>"><i class="fa fa-circle-o">
            </i> Add Seasons</a></li>
            <li><a href="<?php echo base_url('season/season_list'); ?>"><i class="fa fa-circle-o">
            </i>Seasons List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i> <span>Terms And Conditions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('term'); ?>"><i class="fa fa-circle-o">
            </i> Add Terms</a></li>
            <li><a href="<?php echo base_url('term/add_term_det'); ?>"><i class="fa fa-circle-o">
            </i> Add Terms Detail</a></li>
            <li><a href="<?php echo base_url('term/term_list'); ?>"><i class="fa fa-circle-o">
            </i>List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-stop"></i> <span>Cancellation Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('cancel'); ?>"><i class="fa fa-circle-o">
            </i> Add Cancellation</a></li>
            <li><a href="<?php echo base_url('cancel/cancel_list'); ?>"><i class="fa fa-circle-o">
            </i>List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-flag"></i> <span>Country</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('country'); ?>"><i class="fa fa-circle-o">
            </i> Add Country</a></li>
            <li><a href="<?php echo base_url('country/country_list'); ?>"><i class="fa fa-circle-o">
            </i>Country List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-flag-o"></i> <span>State</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('state'); ?>"><i class="fa fa-circle-o">
            </i> Add State</a></li>
            <li><a href="<?php echo base_url('state/state_list'); ?>"><i class="fa fa-circle-o">
            </i>State List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-flag-o"></i> <span>City</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('city'); ?>"><i class="fa fa-circle-o">
            </i> Add City</a></li>
            <li><a href="<?php echo base_url('city/city_list'); ?>"><i class="fa fa-circle-o">
            </i>City List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i> <span>Salesman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('saleman'); ?>"><i class="fa fa-circle-o">
            </i> Add Salesman</a></li>
            <li><a href="<?php echo base_url('saleman/saleman_list'); ?>"><i class="fa fa-circle-o">
            </i>Salesman List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Payment Method</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('payment'); ?>"><i class="fa fa-circle-o">
            </i> Add Payment Method</a></li>
            <li><a href="<?php echo base_url('payment/payment_list'); ?>"><i class="fa fa-circle-o">
            </i>List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Credit Terms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('credit'); ?>"><i class="fa fa-circle-o">
            </i> Add Credit Terms</a></li>
            <li><a href="<?php echo base_url('credit/credit_list'); ?>"><i class="fa fa-circle-o">
            </i>List</a></li>
          </ul>
        </li>


          <li class="treeview">
              <a href="#">
                  <i class="fa fa-plane"></i> <span>Travel Type</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('travel'); ?>"><i class="fa fa-circle-o">
                  </i> Add Travel Type</a></li>
                  <li><a href="<?php echo base_url('travel/travel_list'); ?>"><i class="fa fa-circle-o">
                  </i>Travel Type List</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-tree"></i> <span>Branch</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('branch'); ?>"><i class="fa fa-circle-o">
                  </i> Add Branch</a></li>
                  <li><a href="<?php echo base_url('branch/branch_list'); ?>"><i class="fa fa-circle-o">
                  </i>Branch List</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-list"></i> <span>Category</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('category'); ?>"><i class="fa fa-circle-o">
                  </i> Add Category</a></li>
                  <li><a href="<?php echo base_url('category/category_list'); ?>"><i class="fa fa-circle-o">
                  </i>Category List</a></li>
              </ul>
          </li>


           </ul>
        </li>



        

  

        <!-- <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li> -->
        <!-- <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              
              </ul>
            </li>
          </ul>
        </li> -->
        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
        <!-- <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
