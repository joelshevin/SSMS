<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Management | Register Customer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="welcome" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AGM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

        <ul class="sidebar-menu">
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
            <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
            <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
            <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
            <li><a href="#"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i>Customer Reservations</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
           <i class="fa fa-car"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="ReservationsService"><i class="fa fa-calendar"></i>Reservations</a></li>
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</i></a></li>
            <li><a href="ServicePlans"><i class="fa fa-map-o"></i>Service Plans</a></li>
            <li><a href="ServiceLogs"><i class="fa fa-clone"></i>Service Logs</a></li>
            <li><a href="ReportsServices"><i class="fa fa-file-text-o"></i>Service Reports</a></li>
          </ul>
       </li>


       <li class="treeview">
         <a href="#">
          <i class="fa fa-users"></i><span>Employee Management</span>
          
            <i class="fa fa-angle-left pull-right"></i>
           </span>
           </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-user-plus"></i>Recruitment</a></li>
              <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
              <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
              <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
              <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
            </ul>
       </li>

       <li class="treeview">
         <a href="Janitorial">
          <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
            <i class="fa fa-angle-left pull-right"></i>
           </a>
           
       </li>

       <li class="treeview">
         <a href="#">
          <i class="fa fa-money"></i><span>Finance Management</span>
            <i class="fa fa-angle-left pull-right"></i>
           </a>
            <ul class="treeview-menu">
              <li><a href="Assets"><i class="fa fa-building"></i>Asset Management</a></li>
              <li><a href="Liability"><i class="fa fa-plus-circle"></i>Liability Management</a></li>
              <li><a href="Income&Expenditure"><i class="fa fa-files-o"></i>Income & Exp. Management</a></li>
              <li><a href="TransactionManagement"><i class="fa fa-credit-card"></i>Transaction Management</a></li>
            </ul>
       </li>

        <li class="treeview">
         <a href="#">
          <i class="fa fa-cube"></i><span>Inventory Management</span>        
            <i class="fa fa-angle-left pull-right"></i>
           </a>
            <ul class="treeview-menu">
              <li><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a></li>
              <li><a href="inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
              <li><a href="Purchases"><i class="fa fa-shopping-cart"></i>Purchases</a></li>
              <li><a href="PurchaseReturns"><i class="fa fa-refresh"></i>Purchase Return</a></li>
              <li><a href="Sales"><i class="fa fa-money"></i>Sales</a></li>
              <li><a href="PurchaseOrder"><i class="fa fa-mail-forward "></i>Send PO</a></li>
              <li><a href="Supplier"><i class="fa fa-truck"></i>Suppliers</a></li>
            </ul>
       </li>

       <li class="treeview active">
         <a href="#">
          <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
            <i class="fa fa-angle-left pull-right"></i>
           </a>
            <ul class="treeview-menu">
              <li class="active"><a href="AssignEmployees"><i class="fa fa-male"></i>Assign Employees</a></li>
              <li><a href="CreateShifts"><i class="fa fa-plus-circle"></i>Create Shifts</a></li>
              <li><a href="ReplaceEmployee"><i class="fa fa-exchange"></i>Replace Employee</a></li>
              <li><a href="OverWorkedEmployees"><i class="fa fa-plus-circle"></i>Over Worked Employees</a></li>
              <li><a href="RequestEmployee"><i class="fa fa-plus-circle"></i>Request Employee</a></li>
              <li><a href="EfficiencyAnalysis"><i class="fa fa-plus-circle"></i>Efficiency Analysis</a></li>
            </ul>
       </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
   <section class="content-header">
      <h1>
        Create Shifts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="main">

      

        <div class="row">

          <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->
              <div class="small-box bg-green">

                <div class="inner">

                  <h3>94<sup style="font-size: 20px">%</sup></h3>

                  <p>Shift Plan 4</p>
                </div>


                <div class="icon">

                  <i class="ion ion-stats-bars"></i>

                </div>

               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

             </div>

          </div>

          <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->
            <div class="small-box bg-yellow">

              <div class="inner">

                <h3>86<sup style="font-size: 20px">%</sup></h3>

                <p>Shift Plan 2</p>

              </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

         <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->

        <div class="small-box bg-red">

          <div class="inner">

            <h3>82<sup style="font-size: 20px">%</sup></h3>

            <p>Shift Plan 6</p>

          </div>

          <div class="icon">

              <i class="ion ion-stats-bars"></i>

          </div>

            <a href="#" class="small-box-footer">

              More info <i class="fa fa-arrow-circle-right"></i>

            </a>
        </div>

      </div>      


        </div>

        <div class="row">

          <div class="col-md-6">
            <div class="box box-warning">

        <div class="box-header with-border">

          <h3 class="box-title">Select Shift</h3>

        </div>

        <div class="box-body">
              

          <div class="form-group">

            <span class="form-group-addon"><i class="fa fa-fw fa-building"></i></span>
            <label for="Branch">Branch</label>
                
              <select class="form-control">

                <option>Branch 1</option>
                <option>Branch 2</option>
                <option>Branch 3</option>
                    
              </select>

          </div>
                 

          <div class="col-md-6">

            <div class="form-group">

              <span class="form-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
              <label for="Day">Day</label>
                
                <div class="radio">

                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Week-day
                  </label>

                </div>

                <div class="radio">

                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Week-end
                   </label>

                </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="form-group">

              <span class="form-group-addon"><i class="fa fa fa-fw fa-calendar-times-o"></i></span>
              <label for="Time">Time</label>
                
                <div class="radio">

                  <label>
                    <input type="radio" name="optionsRadios1" id="optionsRadios11" value="option1" checked="">
                    Peak
                  </label>
                      
                </div>

                <div class="radio">

                  <label>
                    <input type="radio" name="optionsRadios1" id="optionsRadios12" value="option2">
                    Non-peak
                  </label>

                </div>

            </div>

          </div>  

                

        </div>

        <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:450px">OK</button>
        </div>
                
      </div>
          </div>

          <div class="col-md-6">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Employees by Services Chart</h3>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height: 164px; width: 329px;" height="164" width="329"></canvas>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        </div>

        <div class="row">

          <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Assignable Employees</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Employee Name</th>
                  <th>Providing Services</th>
                  <th>Efficiency</th>
                  <th>Over-worked percentage</th>
                </tr>

                <tr>
                  <td>Joel Shevin</td>
                  <td><span class="badge bg-blue">Full Exterior Grooming</span></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%">
                      </div>
                    </div>
                  </td>
                  <td align="center"><span class="badge bg-red">55%</span></td>
                </tr>

                    <tr>
                  <td>Yusra Frouz</td>
                  <td><span class="badge bg-red">Full Interior Grooming</span></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-warning" style="width: 65%">
                      </div>
                    </div>
                  </td>
                  <td align="center"><span class="badge bg-yellow">45%</span></td>
                </tr>



              </tbody></table>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:450px">Assign</button>
        </div>
            <!-- /.box-body -->
          </div>
          </div>

          <div class="col-md-6">
            <div class="box box-warning">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div></div><div class="fc-right"></div><div class="fc-center"><h2>Aug 14 — 20, 2016</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-agendaWeek-view fc-agenda-view"><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table><thead><tr><th class="fc-axis fc-widget-header" style="width: 41px;"></th><th class="fc-day-header fc-widget-header fc-sun">Sun 8/14</th><th class="fc-day-header fc-widget-header fc-mon">Mon 8/15</th><th class="fc-day-header fc-widget-header fc-tue">Tue 8/16</th><th class="fc-day-header fc-widget-header fc-wed">Wed 8/17</th><th class="fc-day-header fc-widget-header fc-thu">Thu 8/18</th><th class="fc-day-header fc-widget-header fc-fri">Fri 8/19</th><th class="fc-day-header fc-widget-header fc-sat">Sat 8/20</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="border-right-width: 1px; margin-right: 16px;"><div class="fc-bg"><table><tbody><tr><td class="fc-axis fc-widget-content" style="width: 41px;"><span>all-day</span></td><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2016-08-14"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2016-08-15"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2016-08-16"></td><td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight" data-date="2016-08-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-08-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-08-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-08-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><tbody><tr><td class="fc-axis" style="width:41px"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div><hr class="fc-widget-header"><div class="fc-time-grid-container fc-scroller" style="height: 288px;"><div class="fc-time-grid"><div class="fc-bg"><table><tbody><tr><td class="fc-axis fc-widget-content" style="width: 41px;"></td><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2016-08-14"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2016-08-15"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2016-08-16"></td><td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight" data-date="2016-08-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-08-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-08-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-08-20"></td></tr></tbody></table></div><div class="fc-slats"><table><tbody><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>12am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>1am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>2am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>3am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>4am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>5am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>6am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>7am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>8am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>9am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>10am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>11am</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>12pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>1pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>2pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>3pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>4pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>5pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>6pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>7pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>8pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>9pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>10pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr><tr><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"><span>11pm</span></td><td class="fc-widget-content"></td></tr><tr class="fc-minor"><td class="fc-axis fc-time fc-widget-content" style="width: 41px;"></td><td class="fc-widget-content"></td></tr></tbody></table></div><hr class="fc-widget-header" style="display: none;"><div class="fc-content-skeleton"><table><tbody><tr><td class="fc-axis" style="width:41px"></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="border-color: rgb(243, 156, 18); top: 0px; bottom: -1055px; z-index: 1; left: 0%; right: 0%; background-color: rgb(243, 156, 18);"><div class="fc-content"><div class="fc-time" data-start="12:00" data-full="12:00 AM - 12:00 AM"><span>12:00 - 12:00</span></div><div class="fc-title">Long Event</div></div><div class="fc-bg"></div><div class="fc-resizer"></div></a></div></td><td><div class="fc-event-container"></div></td><td><div class="fc-event-container"></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(0, 115, 183); top: 461px; bottom: -549px; z-index: 1; left: 0%; right: 0%; margin-right: 20px; background-color: rgb(0, 115, 183);"><div class="fc-content"><div class="fc-time" data-start="10:30" data-full="10:30 AM"><span>10:30</span></div><div class="fc-title">Meeting</div></div><div class="fc-bg"></div><div class="fc-resizer"></div></a><a class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(0, 192, 239); top: 527px; bottom: -615px; z-index: 2; left: 50%; right: 0%; background-color: rgb(0, 192, 239);"><div class="fc-content"><div class="fc-time" data-start="12:00" data-full="12:00 PM - 2:00 PM"><span>12:00 - 2:00</span></div><div class="fc-title">Lunch</div></div><div class="fc-bg"></div><div class="fc-resizer"></div></a></div></td><td><div class="fc-event-container"><a class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable" style="border-color: rgb(0, 166, 90); top: 835px; bottom: -989px; z-index: 1; left: 0%; right: 0%; background-color: rgb(0, 166, 90);"><div class="fc-content"><div class="fc-time" data-start="7:00" data-full="7:00 PM - 10:30 PM"><span>7:00 - 10:30</span></div><div class="fc-title">Birthday Party</div></div><div class="fc-bg"></div><div class="fc-resizer"></div></a></div></td><td><div class="fc-event-container"></div></td><td><div class="fc-event-container"></div></td></tr></tbody></table></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        

        </div>      

    </section>
 
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Electronics",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Digital Goods",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: 700,
        color: "#f56954",
        highlight: "#f56954",
        label: "Chrome"
      },
      {
        value: 500,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "IE"
      },
      {
        value: 400,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "FireFox"
      },
      {
        value: 600,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "Safari"
      },
      {
        value: 300,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "Opera"
      },
      {
        value: 100,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "Navigator"
      }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<script src="../../plugins/flot/jquery.flot.pie.js"></script>
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100;

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1);

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5;

        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }

        data.push(y);
      }

      // Zip the generated y values with the x values
      var res = [];
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]]);
      }

      return res;
    }

    var interactive_plot = $.plot("#interactive", [getRandomData()], {
      grid: {
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#3c8dbc"
      },
      lines: {
        fill: true, //Converts the line chart to area chart
        color: "#3c8dbc"
      },
      yaxis: {
        min: 0,
        max: 100,
        show: true
      },
      xaxis: {
        show: true
      }
    });

    var updateInterval = 500; //Fetch data ever x milliseconds
    var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()]);

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw();
      if (realtime === "on")
        setTimeout(update, updateInterval);
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === "on") {
      update();
    }
    //REALTIME TOGGLE
    $("#realtime .btn").click(function () {
      if ($(this).data("toggle") === "on") {
        realtime = "on";
      }
      else {
        realtime = "off";
      }
      update();
    });
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)]);
      cos.push([i, Math.cos(i)]);
    }
    var line_data1 = {
      data: sin,
      color: "#3c8dbc"
    };
    var line_data2 = {
      data: cos,
      color: "#00c0ef"
    };
    $.plot("#line-chart", [line_data1, line_data2], {
      grid: {
        hoverable: true,
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0,
        lines: {
          show: true
        },
        points: {
          show: true
        }
      },
      lines: {
        fill: false,
        color: ["#3c8dbc", "#f56954"]
      },
      yaxis: {
        show: true,
      },
      xaxis: {
        show: true
      }
    });
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: "absolute",
      display: "none",
      opacity: 0.8
    }).appendTo("body");
    $("#line-chart").bind("plothover", function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);

        $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
            .css({top: item.pageY + 5, left: item.pageX + 5})
            .fadeIn(200);
      } else {
        $("#line-chart-tooltip").hide();
      }

    });
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]];
    $.plot("#area-chart", [areaData], {
      grid: {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#00c0ef"
      },
      lines: {
        fill: true //Converts the line chart to area chart
      },
      yaxis: {
        show: false
      },
      xaxis: {
        show: false
      }
    });

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {label: "Series2", data: 30, color: "#3c8dbc"},
      {label: "Series3", data: 20, color: "#0073b7"},
      {label: "Series4", data: 50, color: "#00c0ef"}
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */

  });

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>
</body>
</html>
