<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ahabanza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*/
.nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}





/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*/
body {
    min-height: 100vh;
      background: linear-gradient(90deg, #454545, #776BCC);
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>

@extends('header')
@section('content')
<body>
  
  <h4 class="font-italic mb-4"></h4>
    <section class="py-5 header">
        <div class="container py-4">
            <header class="text-center mb-5 pb-5 text-white">
              @if(auth()->user()->role=='Member')
                <h1 class="display-4">Urakaza neza Mukibina</h1>
                <p class="font-italic mb-1">Hano uraza guhabwa uburyo bwo gukurikirana ibibera mukibina cyawe ubifashijwemo numukuri wikibina ubarizwamo.</p>
               <h4>Ikibina kitwa <b> {{auth()->user()->ikibinaname}}</b></h4>
               @elseif(auth()->user()->role=='IkibinaAdmin')
               <h1 class="display-4">Urakaza neza Mukibina</h1>
               <p class="font-italic mb-1"> Niwowe uyoboye ikibi na kitwa <b> {{auth()->user()->ikibinaname}}</b>, ubu wemerewe gutanga uburenganzira kubyo umuryango yemerewe kubona no
                kuyobora amanyamuryaho bakirimo.</p>
              <h4>Ikibina kitwa<b> {{auth()->user()->ikibinaname}}</b></h4>
               @else
               <h1 class="display-4">Urakaza neza System Admin</h1>
               <p class="font-italic mb-1">Ubu niwowe uyoboye Abakuru bibibina and na system muri rusange</p>
               @endif
            </header>
    
    
            <div class="row">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @if(auth()->user()->role=='SystemAdmin')
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-user-circle-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IMYIRONDORO</span></a>
    
                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <i class="fa fa-star mr-2"></i>
                                <span class="font-weight-bold small text-uppercase">UBUTUMWA</span></a>
                            @endif
                            @if(auth()->user()->role=='IkibinaAdmin')
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-user-circle-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IMYIRONDORO</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-calendar-minus-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">WEMEREYE</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">UBUTUMWA</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fa fa-check mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">SOBANUKIRWA</span></a>
                            @endif
                            @if(auth()->user()->role=='Member')
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-user-circle-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IMYIRONDORO</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-calendar-minus-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">WEMEREWE</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">UBUTUMWA</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fa fa-check mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">SOBANUKIRWA</span></a>
                            @endif
                       
                       
                        </div>
                </div>
    
    
                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @if(auth()->user()->role=='Member')
                            <div class="container">
                                <div class="main-body">
                                
                                      <!-- Breadcrumb -->
                                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                                        <ol class="breadcrumb">
                                            <h4 class="font-italic mb-4">IMYIRONDORO Y'UMUNYAMURYANGO</h4>
                                        </ol>
                                      </nav>
                                      <!-- /Breadcrumb -->
                                
                                      <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="card-body">
                                              <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                  <h4> {{auth()->user()->member_fname}} {{auth()->user()->member_lname}}</h4>
                                                  <p class="text-secondary mb-1">Umunyamuryango wikimina kitwa <b>{{auth()->user()->ikibinaname}}</b></p>
                                                  <button class="btn btn-outline-primary">Message</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card mb-3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0"> Amazina</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->member_fname}} {{auth()->user()->member_lname}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Indangamuntu</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->member_national_id}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Telefone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->telefone}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Tariki conte yafunguriwe</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->created_at}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-12">
                                                  <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            
                            
                            
                                        </div>
                                      </div>
                            
                                    </div>
                                </div>
                                @endif

                                @if(auth()->user()->role=='IkibinaAdmin')
                            <div class="container">
                                <div class="main-body">
                                
                                      <!-- Breadcrumb -->
                                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                                        <ol class="breadcrumb">
                                            <h4 class="font-italic mb-4">IMYIRONDORO Y'IKIBINA</h4>
                                        </ol>
                                      </nav>
                                      <!-- /Breadcrumb -->
                                
                                      <div class="row gutters-sm">
                                        <div class="col-md-8">
                                          <div class="card mb-3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0"> Izina ry'ikibina</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->ikibinaname}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Intara</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->intara}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Akarere</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->akarere}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Umurenge</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->umurenge}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Akagari</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->akagari}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Umudugudu</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->umudugudu}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Telefone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->telefone}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">igihere cyatangiriye</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{auth()->user()->created_at}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-12">
                                                  <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            
                            
                            
                                        </div>
                                      </div>
                            
                                    </div>
                                </div>
                                @endif

                                @if(auth()->user()->role=='SystemAdmin')
                            <div class="container">
                                <div class="main-body">
                                
                                      <!-- Breadcrumb -->
                                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                                        <ol class="breadcrumb">
                                            <h4 class="font-italic mb-4">IMYIRONDORO Y'ADMIN</h4>
                                        </ol>
                                      </nav>
                                      <!-- /Breadcrumb -->
                                
                                      <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="card-body">
                                              <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                  <h4> {{auth()->user()->member_fname}} {{auth()->user()->member_lname}}</h4>
                                                  <p class="text-secondary mb-1">Kalisa Ibrahim</p>
                                                  <button class="btn btn-outline-primary">Message</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            
                                    </div>
                                </div>
                                @endif
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h4 class="font-italic mb-4">WEMERE</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h4 class="font-italic mb-4">UBUTUMWA WOHEREJWE</h4>
                            <p class="font-italic text-muted mb-2">Nabutumwe mwari mwoherezwa</p>
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h4 class="font-italic mb-4">SOBANUKIRWA IMIKORERE YIKIMINA CYAWE</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

</body>

</html>