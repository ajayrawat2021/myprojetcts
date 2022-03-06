<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <link
      href="{!! asset('../newdash/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css ') !!}"
      rel="stylesheet"
    />
    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"/>
    <!-- Custom CSS -->
    <link href="{!! asset('../newdash/assets/libs/fullcalendar/dist/fullcalendar.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('../newdash/assets/extra-libs/calendar/calendar.css') !!}" rel="stylesheet" />
    <link href="{!! asset('../newdash/dist/css/style.min.css" rel="stylesheet ') !!}" />
    
  </head>
  <body>
   
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      @yield('header')
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      @yield('sidenav')
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        @yield('home')

        <!-- <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer> -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{!! asset('../newdash/assets/libs/jquery/dist/jquery.min.js ') !!}"></script>
    <script src="{!! asset('../newdash/dist/js/jquery.ui.touch-punch-improved.js ') !!}"></script>
    <script src="{!! asset('../newdash/dist/js/jquery-ui.min.js ') !!}" ></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{!! asset('../newdash/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js ') !!}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{!! asset('../newdash/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js ') !!}"></script>
    <script src="{!! asset('../newdash/assets/extra-libs/sparkline/sparkline.js') !!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('../newdash/dist/js/waves.js') !!}"></script>
    <!--Menu sidebar -->
    <script src="{!! asset('../newdash/dist/js/sidebarmenu.js') !!}"></script>
    <!--Custom JavaScript -->
    <script src="{!! asset('../newdash/dist/js/custom.min.js') !!}"></script>
    <!-- this page js -->
    <script src="{!! asset('../newdash/assets/libs/moment/min/moment.min.js') !!}"></script>
    <script src="{!! asset('../newdash/assets/libs/fullcalendar/dist/fullcalendar.min.js') !!}"></script>
    <script src="{!! asset('../newdash/dist/js/pages/calendar/cal-init.js') !!}"></script>
    <script src="{!! asset('../newdash/assets/extra-libs/DataTables/datatables.min.js') !!}"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
