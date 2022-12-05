<!DOCTYPE html>
<html lang="en">

<head>
    <title>Barura ikibina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/headercss.css')}}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .content {
            padding: 18px;
            margin: 4px;
            top: 100px;
            left: 440px;
            width: 490px;
            border: 2px solid #2E37FE;
            border-radius: 25px;
            box-shadow: 3px 5px blue;
            background-color: white;
        }

        font {
            font-size: 24px;
            color: #2E37FE;
        }

        form {
            font-size: 18px;
        }

        .content input[type="text"] {
            height: 30px;
            width: 450px;
            box-sizing: border-box;
            border: 1px solid #2E37FE;
            border-radius: 25px;
            text-align: center;
            font-size: 16px;
        }

        .content input::placeholder {
            color: #CCC;
            font-size: 18px;
        }

        textarea {
            font-size: 16px;
            width: 440px;
        }

        select {
            width: 140px;
            height: 25px;
        }

        .content input[type="submit"] {
            font-size: 20px;
            text-align: center;
            float: center;
            padding: 8px;
            width: 120px;
            border: 1px solid blue;
            border-radius: 20px;
            background-color: white;
            color: #2E37FE;
            cursor: pointer;
        }

        .content input[type="reset"] {
            font-size: 20px;
            text-align: center;
            float: center;
            padding: 8px;
            border: 8px;
            width: 120px;
            border: 1px solid blue;
            border-radius: 20px;
            background-color: white;
            color: #2E37FE;
            cursor: pointer;
        }

        .content input[type="submit"]:hover {
            color: white;
            background-color: #2E37FE;
        }

        .content input[type="reset"]:hover {
            color: white;
            background-color: #2E37FE;
        }
    </style>

</head>

@extends('headertwo')
@section('content')
<body>
    <font><b></b></font><br><br>
    <font><b></b></font><br><br>
    <div class="container screenscreen__background screen__content ">
        <div class="content">
            <font><b>Baruza ikibina hano</b></font><br><br>
            <form action="{{url('/register/one')}}" method="POST">
                {{ csrf_field() }}
                <b>Izina ry'ikibina</b><br> <input type="text" name="ikibinaname" placeholder="Izina ry'ikibina" required><br><br>
                <b>Telephone</b><br> <input type="text" name="telefone" placeholder="Telephone" required><br><br>
                <b>Intara</b><br> <input type="text" name="intara" placeholder="Intara" required><br><br>
                <b>Akarere</b><br> <input type="text" name="akarere" placeholder="Akarere" required><br><br>
                <b>Umurenge</b><br> <input type="text" name="umurenge" placeholder="Umurenge" required><br><br>
                <b>Akagari</b><br> <input type="text" name="akagari" placeholder="Akagari" required><br><br>
                <b>Umudugudu</b><br> <input type="text" name="umudugudu" placeholder="Umudugudu" required><br><br>
                <b>Admin password</b><br> <input type="text" name="password" placeholder="Admin password" required><br><br>
                <b> confirm Admin password</b><br> <input type="text" name="Cpassword" placeholder=" confirm Admin password" required><br><br>
                <input type="submit" name="Register" value="Ohereza">
                <input type="reset" name="reset" value="Siba" onclick="myFunction()">
            </form>
        </div>
    </div>
@endsection
    <script type="text/javascript">
        function myFunction() {
            alert("Registration Cancelled!");
        }

        function submit() {
            var ikibinaname = document.getElementById("ikibinaname");
            var Telephone = document.getElementById("Telephone");
            var Intara = document.getElementById("Intara");
            var Akarere = document.getElementById("Akarere");
            var Umurenge = document.getElementById("Umurenge");
            var Akagari = document.getElementById("Akagari");
            var Umudugudu = document.getElementById("Umudugudu");
            var Cpassword = document.getElementById("Cpassword");
            var password = document.getElementById("password");
            if (ikibinaname == "" || Telephone == "" || Intara == "" || Akarere == "" || Umurenge == "" || Akagari == "" || Umudugudu == "" || Cpassword == "" || password == "") {
                alert("Uzuza hose");
            } else {}
        }
    </script>
</body>

</html>