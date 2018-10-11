<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kickstart</title>
    <link href="css/table.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  
    <link href="{{asset('home/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('home/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">


    <style type="text/css">
      #custom-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }

        #custom-search-input input{
            border: 0;
            box-shadow: none;
        }

        #custom-search-input button{
            margin: 2px 0 0 0;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            padding: 0 8px 0 10px;
            border-left: solid 1px #ccc;
        }

        #custom-search-input button:hover{
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;
        }

        #custom-search-input .glyphicon-search{
            font-size: 23px;
        }


    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/datapanel.css')}}">
    <script type="text/javascript" src="{{asset('js/datapanel.js')}}"></script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">KickStart</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Find a Class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('logindemo')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Kickstart Guide <br> enhance your skills</strong>
            </h1>
            <hr>
            <h3>
              The World Largest Learning Community
            </h3>

          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Millions of learners around the world use Kickstart to find the resources they need and connect with educators.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('register') }}" style="margin: 3%">I am Student </a>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('register')}}" style="margin: 3%">I am Teacher</a>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('register')}}" style="margin: 3%">I am Parent</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">KICKSTART is your classroom, centralized.</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Use Kickstart Guide to unite all the tools you already love and ensure your students have access to everything they need for learning.</p>
            
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" >
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Safe space for discussion</h3>
              <p class="text-muted mb-0">Kickstart lets you give a voice to shy or anxious students who would go unheard in traditional classrooms.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Designed by teachers, for teachers</h3>
              <p class="text-muted mb-0">Kickstart was founded by educators looking to bring the classroom into the 21st century.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Best place to find your next lesson</h3>
              <p class="text-muted mb-0">You can find your next lesson plan in minutes. Or, connect with educators and curriculum writers to build your professional learning community.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    

    <section class="bg-light " id="portfolio">
      <div class="container text-center">
        <h2 class="mb-4">Find a Class you wish to join</h2>
        <div class="table-responsive">
                        <table class="table" id="myTable">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Subject</th>
                              <th>No. of students</th>
                              <th>Classcode</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Anna</td>
                              <td>Maths</td>
                              <td>46</td>
                              <td>798294</td>
                              
                            </tr>
                            <tr>
                              <td>Anil</td>
                              <td>Science</td>
                              <td>89</td>
                              <td>788867</td>
                              
                            </tr>
                          </tbody>
                        </table>
                        
                      </div>
            

      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>+91 9737191098</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">kickstartguide@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>








    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('home/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('home/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('home/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('home/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('home/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/creative.min.js')}}"></script>
    <script src="{{asset('js/table.js')}}"></script>
    <script type="text/javascript">$(document).ready( function () {
                $('#myTable').DataTable();
                  } );
            </script>

  </body>

</html>
