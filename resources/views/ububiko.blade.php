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
    background: linear-gradient(to left, #dce35b, #45b649);
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
    <section class="py-5 header">
        <font><b></b></font><br><br>
        <div class="container py-4">
    
    
            <div class="row">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @if(auth()->user()->role=='SystemAdmin')
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IBIBINA</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">ABANYAMURYANGO BIBIBINA </span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IBIKORWA</span></a>
    
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">IBINDI...</span></a>
                            @endif
                       
                       
                        </div>
                </div>
    
    
                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                             <!-- Breadcrumb -->
                             <nav aria-label="breadcrumb" class="main-breadcrumb">
                                <ol class="breadcrumb">
                                    <h4 class="font-italic mb-4">IKIBINA BYABARUWE</h4>
                                </ol>
                              </nav>
                              <!-- /Breadcrumb -->
                        
                              <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    
                                                    <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                                                        <thead class="text-primary">
                                                        
                                            <th>ikibina_id</th>
                                            <th>ikibinaname</th>
                                            <th>telefone</th>
                                            <th>Amahitano</th>
                                                        </thead>
                                                        <tbody>
                                                            
                                                                <tr>
                                                                    @foreach($data as $key=>$item) 
                                                                    @if($item->ikibinaname!="")  
                                            <td>{{$item->id}}</td> 
                                            <td>{{$item->ikibinaname}}</td>   
                                            <td>{{$item->telefone}}</td>  
                                                                    <td><a href="" class="btn btn-info btn-sm">
                                                                     <i class="material-icons">BYOSE</i></a>
                                                                    
                                                                     <form id="delete-form-{{ $item->id }}" method="post" action=""
                                                                           style="display: none;">
                                                                         @csrf
                                                                         @method('DELETE')
                                                                     </form>
                                                                        <button type="button" class="btn btn-danger btn-sm" 
                                                                            onclick="if(confirm('Are you sure? You want to delete this?')){
                                                                            event.preventDefault();
                                                                            document.getElementById('delete-form-{{ $item->id }}').submit();
                                                                        }else {event.preventDefault(); }">
                                                                            <i class="material-icons">SIBA</i>
                                                                        </button>
                                                                    </td>
                                                           @endif
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                          <!-- Breadcrumb -->
                          <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                                <h4 class="font-italic mb-4">ABANYAMURYANGO BIBIBINA </h4>
                            </ol>
                          </nav>
                          <!-- /Breadcrumb -->
                    
                          <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                
                                                <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                                                    <thead class="text-primary">
                                                    
                                        <th>member_fname</th>
                                        <th>member_lname</th>
                                        <th>ikibina_id</th>
                                        <th>ikibinaname</th>
                                        <th>telefone</th>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <tr>
                                                                @foreach($data as $key=>$item) 
                                                                @if($item->member_lname!="")  
                                        <td>{{$item->member_fname}}</td>
                                        <td>{{$item->member_lname}}</td>
                                        <td>{{$item->ikibina_id}}</td>
                                        <td>{{$item->ikibinaname}}</td>
                                        <td>{{$item->telefone}}</td>
                                    <td>
                                                                 <form id="delete-form-{{ $item->id }}" method="post" action=""
                                                                       style="display: none;">
                                                                     @csrf
                                                                     @method('DELETE')
                                                                 </form>
                                                                    <button type="button" class="btn btn-info btn-sm" 
                                                                        onclick="if(confirm('Are you sure? You want to delete this?')){
                                                                        event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $item->id }}').submit();
                                                                    }else {event.preventDefault(); }">
                                                                        <i class="material-icons">BYOSE</i>
                                                                    </button>
                                                                </td>
                                                       @endif
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h4 class="font-italic mb-4">IBIKORWA BITWANGWA NA SYSTEM</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h4 class="font-italic mb-4">IBINDA WAMENYA KUBUBIKO</h4>
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