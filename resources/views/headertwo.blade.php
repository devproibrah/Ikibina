<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ahobibera</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
</head>

<body>

    <!-- Navigation -->
    <div class="fixed-top">
        <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-12">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
            <div class="container">
                <a class="navbar-brand" href="index.html" style="text-transform: uppercase;"> IKIBINA.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}">Injira</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}">Barura</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Sobanukirwa</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
    
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div>

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #6351ce"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Guhitamo gukoresha Ikibina ni amahitamo meza:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
       
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">IKIBINA</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Twiyemeje kubaha serevise inoze.dushishikariza abantu
                kwizigama bitegurira ejo hazaza heza.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Serevise</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Kuguza</a>
              </p>
              <p>
                <a href="#!" class="text-white">kwishura</a>
              </p>
              <p>
                <a href="#!" class="text-white">Gutura</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Izingirakamaro</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Ahabanza</a>
              </p>
              <p>
                <a href="#!" class="text-white">Andikisha ikibina</a>
              </p>
              <p>
                <a href="#!" class="text-white">Sobanukirwa</a>
              </p>
              <p>
                <a href="#!" class="text-white">Ubufasha</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">WADUSANGA</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>Kigali, Rwanda</p>
              <p> email: ikibina@gmail.com</p>
              <p> tel: + 250 782519290</p>
              <p> tel: + 250 737445203</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
           >| IKIbina Ltd | All Rights Reserved/a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
  </div>
  <!-- End of .container -->
</body>

</html>