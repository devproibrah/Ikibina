<!DOCTYPE html>
<html lang="en">

<head>
    <title>imbonera hamwe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
</head>

<body>

    @extends('header')
    @section('content')
    <div class="container mt-3">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ikibinaname</th>
                    <th>Telephone</th>
                    <th>intara</th>
                    <th>akarere</th>
                    <th>umurenge</th>
                    <th>akagari</th>
                    <th>umudugudu</th>
                    <th>adminpassword</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($data as $item)
                        
                    
                    <td>{{$item->ikibinaname}}</td>
                    <td>{{$item->telefone}}</td>
                    <td>{{$item->intara}}</td>
                    <td>{{$item->akarere}}</td>
                    <td>{{$item->umurenge}}</td>
                    <td>{{$item->akagari}}</td>
                    <td>{{$item->umudugudu}}</td>
                    <td>{{$item->adminpassword}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>

</html>