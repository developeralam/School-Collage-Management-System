<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Management System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
         <h3 class="mt-2 text-white font-italic">AMC</h3>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h3 class="m-auto">Amzadia Muktijoddha Academy</h3>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-student" aria-expanded="false" aria-controls="ui-student">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Student</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-student">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.student.create')}}">Add Student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.student')}}">Student List</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-teacher" aria-expanded="false" aria-controls="ui-teacher">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Teacher</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-teacher">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.teacher')}}">Teacher List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.teacher.create')}}">Add Teacher</a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- Other's Section -->
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.others')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Other's</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-class" aria-expanded="false" aria-controls="ui-class">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Class</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-class">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.class')}}">Class List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.class.create')}}">Add Class</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-subject" aria-expanded="false" aria-controls="ui-subject">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Subject</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-subject">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.subject')}}">Subject List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.subject.create')}}">Add Subject</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-exam" aria-expanded="false" aria-controls="ui-exam">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Exam</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-exam">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.exam')}}">Exam List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.exam.create')}}">Add Exam</a>
                  </li>
                </ul>
              </div>
            </li>

    
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.sms')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Sms System</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-mark" aria-expanded="false" aria-controls="ui-mark">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Result</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-mark">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.marks.create')}}">Add Result</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.marks')}}">Result list</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-accounting" aria-expanded="false" aria-controls="ui-accounting">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Accounting</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-accounting">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.balance')}}">Balance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.income')}}">Dipogit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.expence')}}">Expence</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.income.category')}}" class="nav-link">Dipogit Category</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.expence.category')}}" class="nav-link">Expence Category</a>
                  </li>
                </ul>
              </div>
            </li>

            <!--Director's-->

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.director')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Admin Panel</span>
              </a>
            </li>



<!--           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
               <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Manage Products</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Create</a>
                  </li>
                </ul>
              </div>
            </li> -->

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Ends-->
            
           @yield('content')



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <p>&copy;All Rights Resurved Student Management System</p>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>
    
    @yield('ajax')
    <!-- End custom js for this page-->
  </body>
</html>