<!DOCTYPE html>
<html lang="en">

<head>
    <title>barura umunyamuryango wikibina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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

@extends('header')
@section('content')
<body>
    <font><b></b></font><br><br>
    <font><b></b></font><br><br>
    <div class="container screenscreen__background screen__content ">
        <div class="content">
            <font><b>BARURA UMUNYAMURYANGO</b></font><br><br>
            <form action="{{url('/register/two')}}" method="POST">
                {{ csrf_field() }}
                <b>member_fname</b><br> <input type="text" name="member_fname" placeholder="member_fname" required><br><br>
                <b>member_lname</b><br> <input type="text" name="member_lname" placeholder="member_lname" required><br><br>
                <b>member_telephone</b><br> <input type="text" name="telefone" placeholder="member_telephone" required><br><br>
                <b>member_national_id</b><br> <input type="text" name="member_national_id" placeholder="member_national_id" required><br><br>
                <b>userspassword</b><br> <input type="text" name="password" placeholder="userspassword" required><br><br>
                <b>ikibina_id</b><br> <input type="text" name="ikibina_id" placeholder="Akaikibina_idrere" value="{{auth()->user()->id }}" required><br><br>
                <b>ikibinaname</b><br> <input type="text" name="ikibinaname" placeholder="ikibinaname" value="{{auth()->user()->ikibinaname}}" required><br><br>
                <input type="submit" name="Register" value="Register">
                <input type="reset" name="reset" value="Cancel" onclick="myFunction()">
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
            var CAdminpassword = document.getElementById("CAdminpassword");
            var Adminpassword = document.getElementById("Adminpassword");
            if (ikibinaname == "" || Telephone == "" || Intara == "" || Akarere == "" || Umurenge == "" || Akagari == "" || Umudugudu == "" || CAdminpassword == "" || Adminpassword == "") {
                alert("Uzuza hose");
            } else {}
        }
    </script>
</body>

</html>