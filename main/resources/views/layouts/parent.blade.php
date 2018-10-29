<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>KickStart Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.css')}}">
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
  <style type="text/css">
    .nav-link.active{
      color: #308ee0!important;
    }
  </style>
  @yield('css')
 
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('welcome')}}">
          <img src="{{asset('images/logo.png')}}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#progress" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Progress</a>
          </li>
          <li class="nav-item">
            <a href="#score" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown" >
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count countnotification">{{auth()->user()->unreadNotifications->count()}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown" style="overflow-y: scroll; max-height: 500px;">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have {{auth()->user()->unreadNotifications->count()}} new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              @if(auth()->user()->notifications)

              @foreach(auth()->user()->unreadNotifications as $notification)
                  <a class="dropdown-item preview-item" style="background: lightgray;">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-alert-circle-outline mx-0"></i>
                    </div>
                  </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-medium text-dark">Your Class Assignment</h6>

                      <p class="font-weight-light small-text">
                        {{$notification->data['data']}}
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  
              @endforeach

              @foreach(auth()->user()->readNotifications as $notification)
                  <a class="dropdown-item preview-item" >
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-alert-circle-outline mx-0"></i>
                    </div>
                  </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-medium text-dark">Your Class Assignment</h6>

                      <p class="font-weight-light small-text">
                        {{$notification->data['data']}}
                      </p>
                    </div>
                  </a>
                <div class="dropdown-divider"></div>
                  
              @endforeach
                
              @endif
             
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{$parent->user->name}} !</span>
              <img class="img-xs rounded-circle" src="{{asset('images/prahar.jpg')}}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a class="dropdown-item mt-2 btn btn-default">
                Manage Profile
              </a>
              <a class="dropdown-item btn btn-default">
                Change Password
              </a>
              <a class="dropdown-item btn btn-default" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{asset('images/prahar.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{$parent->user->name}}</p>
                  <div>
                    <small class="designation text-muted">Parent</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
               @if(count($child)==0)  
               <a class="btn btn-default" data-toggle="modal" data-target="#addchild"><button class="btn btn-success btn-block">Add Child
                <i class="mdi mdi-plus"></i>
              </button></a>
                @endif
            </div>
          </li>
          <li class="nav-item">
            @if (\Request::is('*/parent'))  
              <a class="nav-link active" href="{{route('parent')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            @else
              <a class="nav-link" href="{{route('parent')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            @endif
          </li>
           <li class="nav-item">
            @if (\Request::is('*/allclasses'))  
              <a class="nav-link active" href="{{route('parent.allclasses')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Show All Classes</span>
              </a>
            @else
              <a class="nav-link" href="{{route('parent.allclasses')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Show All Classes</span>
              </a>
            @endif
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Children</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                @if(!empty($child))

                @foreach($child as $mychild)
                 <li class="nav-item">
                  <a class="nav-link" href="#progress">{{$mychild->user->name}}'s Progress</a>
                 </li>
                 @endforeach

                 <li class="nav-item">
                  <a class="nav-link btn btn-default" data-toggle="modal" data-target="#addchild">Add New Child
                    <i class="mdi mdi-plus"></i>
                  </a>
                 </li>

                @endif
                <li class="nav-item">
                  <a class="nav-link btn btn-default" data-toggle="modal" data-target="#invitechild"> Invite Child  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#code" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Your Code</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="code">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link" href="#">{{$parent->parent_code}}</a>
                 </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/assignment.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Career Guidance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/assignment.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">KickStart Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/assignment.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">About Us</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/assignment.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Contact Us</span>
            </a>
          </li>
        </ul>
      </nav>

     

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Get Started Now. Manage your child's daily progress now.</p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Verify your mail</a>
                 @if(count($child)==0)
                
                <a class="btn purchase-button mt-4 mt-md-0" data-toggle="modal" data-target="#addchild">Invite your children</a>

                @endif
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
          </div>
          
           @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.github.com/" target="_blank">KickStart</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Specially Made for Students
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<div class="modal fade" id="invitechild" tabindex="-1" role="dialog" aria-labelledby="parentmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="parentModalLongTitle">Invite Child</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('parent.invitechild') }}">
        <div class="modal-body" style="text-align: center;">
          <div class="alert alert-danger">Please ensure that you are entering your child's correct email-id. Your details will be sent with the email to your child,to avoid any violation.</div>
          {{ csrf_field() }}
          <label for="email">Enter Your Child's Email : </label>
          <input type="email" name="childemail">  
          <div class="alert alert-secondary">We will notify you once your child identify you and accept your invitation.<br>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send Mail &nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addchild" tabindex="-1" role="dialog" aria-labelledby="classmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="classModalLongTitle">Add Child</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('parent.addchild') }}">
        <div class="modal-body" >
          
          {{ csrf_field() }}
          <label for="text">Enter Child's Code : </label>
          <input type="text" name="childcode">  <br>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add Child &nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- plugins:js -->
  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript" src="{{asset('js/datatable.js')}}"></script>
  <script type="text/javascript">
    	$(document).ready( function () {
        $('#myTable').DataTable();

        if({{auth()->user()->unreadNotifications->count()}} == 0){
          $(".countnotification").hide();
        }
      });
  </script>
  <script type="text/javascript">
                $("#notificationDropdown").click(function(){
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
                  
                  $.ajax({
                    method:'post',
                    url:"{{route('student.notifications')}}",
                    data: {
                          
                    },
                    
                    success:function(data){
                      $(".countnotification").hide();
                    }
                });
                }); 
                  // Pure JS
                  
            
              </script>
  @yield('js')

  

</body>

</html>