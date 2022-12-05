<!DOCTYPE html>
<html lang="en">

<head>
    <title>Imbonerahamwe ya serevise</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
    <style>
        body {
      background: linear-gradient(90deg, #454545, #776BCC);
        }
    </style>
</head>

<body>

    @extends('header')
    @section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/registermember')}}" class="btn btn-success">Hitamo service mugira</a>
                    <a href="{{url('/AdminDashboard')}}" class="btn btn-success">Ahabanza</a>
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Abajyize bikibina</h4>
                        </div>
                        <div class="card-content table-responsive">
                            
                        <div class="card-header" data-background-color="blue">
                            <a href="{{url('/registermember')}}" class="btn btn-success">Hitamo ibikorwa mugira</a>
                            <a href="{{url('/AdminDashboard')}}" class="btn btn-success">Ahabanza</a>
                            <h4 class="title">Emeza ibigomba gukorwa nabanyamuryangoa</h4>
                        </div>
                            <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                               
                                <thead class="text-primary">
                                
                    <th>service_name</th>
                    <th>Amahitano</th>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            @foreach($data as $key=>$item)   
                    <td>{{$item->service_name}}</td>
                                            <td><a href="" class="btn btn-info btn-sm">
                                             <i class="material-icons">EMEZA</i></a>
                                            
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
                                                    <i class="material-icons">HAGARIKA</i>
                                                </button>
                                            </td>
                                   
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

@endsection
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
</body>

</html>