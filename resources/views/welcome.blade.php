<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ibikorwa</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
    <style>
        body {
            font-family: "Lato", sans-serif;
      background: linear-gradient(90deg, #454545, #776BCC);
        }

        :root {
            --primary: #94618e;
        }

        .justify {
            text-align: justify;
        }

        .text-purple {
            color: var(--primary);
        }

        .bg-purple {
            background-color: var(--primary);
            color: white;
        }
    </style>
</head>

@extends('header')
@section('content')
<body>

    <nav class="nav bg-purple justify-content-center">
        <a class="nav-link text-white" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a class="nav-link text-white" href="#">Services</a>
        <a class="nav-link text-white" href="#">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </nav>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 p-5">
                <h1> <i class="fa fa-tachometer" aria-hidden="true"></i> 
                    @if(auth()->user()->role=='SystemAdmin')Urakaza neza super Admin @endif 
                    @if(auth()->user()->role=='IkibinaAdmin')Urakaza neza kukibina kitwa  {{auth()->user()->ikibinaname}}@endif 
                    @if(auth()->user()->role=='Member'){{auth()->user()->member_fname}} {{auth()->user()->member_lname}} Urakaza neza kukibina kitwa  {{auth()->user()->ikibinaname}}@endif 
                
                </h1>
                <hr />
            </div>
        </div>

        <div class="row">
            

            @if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-edit fa-2x text-dark" aria-hidden="true"></i>
                            <hr />
                            <form action="{{url('/regtableviewTwo')}}" name="selectid">
                                <input id="in" name="ikibina_id" type="hidden" value="{{auth()->user()->id}}">
                            </form>
                            <script type="text/javascript">
                                function submit1() {
          document.selectid.action="{{url('/regtableviewTwo')}}"; 
                      document.forms['selectid'].submit();
                    }
</script>
                            <p  onclick="submit1()" class="card-title lad text-dark lead">Abanyamuryango</p>
                        </div>
                    </div>
                </a>
            </div>
@endif 

@if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-edit fa-2x" aria-hidden="true"></i>
                            <hr />
                            <a href="{{url('/servicestableview')}}"><p class="card-title lead">Ibikorwa</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
                  
@if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Umusanzu</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif

@if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Ingoboka</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
@if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">inguzanyo</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
@if(auth()->user()->role=='IkibinaAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Ibihano</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Amakuru</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Ishyura</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Umusanzu</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 

@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">ingoboka</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 

@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">inguzanyo</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 

@if(auth()->user()->role=='Member')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">ibihano</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 

@if(auth()->user()->role=='SystemAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/regtableviewUbubiko')}}"><p class="card-title lead">Ububiko</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 



 
@if(auth()->user()->role=='SystemAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">ibibazo</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 


 
@if(auth()->user()->role=='SystemAdmin')
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
                <a class="text-decoration-none" href="#">
                    <div class="card p-3 shadow bg-purple text-center border-0">
                        <div class="card-body">
                            <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                            <hr />
                           <a href="{{url('/Home')}}"><p class="card-title lead">Amaposts</p></a>
                        </div>
                    </div>
                </a>
            </div>
@endif 
 

 
        </div>
    </div>

    <footer class="footer fixed-bottom">
        <div class="row text-center p-3">
            <p class="small text-muted">Develop & Design by @Ibrahim and @JUma</p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modelHELP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Technical Support
                        24/7</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <p>
                        <small>(Mon - Sat / 10AM - 6PM)</small>
                    </p>
                    <hr />
                    <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i> </p>
                    <p><i class="fa fa-volume-control-phone mr-3" aria-hidden="true"></i> +91-123654789 </p>

                </div>

            </div>
        </div>
    </div>
    @endsection
</body>

</html>