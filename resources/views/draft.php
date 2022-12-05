<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #F5F5F5;
        }

        .content {
            padding: 18px;
            margin: 4px;
            top: 100px;
            left: 440px;
            width: 450px;
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

<body>
    <div class="content">
        <font><b>Registration form</b></font><br><br>
        <form action="https://www.google.com" method="GET">
            <b>Student name</b><br> <input type="text" name="uname" placeholder="Student name" required><br><br>
            <b>Student name</b><br> <input type="text" name="uname" placeholder="Student name" required><br><br>
            <b>Student name</b><br> <input type="text" name="uname" placeholder="Student name" required><br><br>
            <b>Student name</b><br> <input type="text" name="uname" placeholder="Student name" required><br><br>
            <b>Student name</b><br> <input type="text" name="uname" placeholder="Student name" required><br><br>
            <b>Address</b> <br><textarea name="addresss" placeholder="Enter address here"></textarea><br><br>
            <b>Gender :</b> <input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Male">Female<br>
            <br>
            <b>Department</b>
            <select name="dept">
                <option value="Select" selected>Select Department</option>
                <option value="First Year">First Year</option>
                <option value="Computer">Computer</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Electronics">Electronics</option>
                <option value="Instrumentation">Instrumentation</option>
                <option value="Information Technology">Information Technology</option>
            </select>
            <b>Year</b>
            <select name="yr">
                <option value="Select" selected>Select year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br><br>
            <b>Interested Post:</b><br> <input type="checkbox" name="Event managemenr">Event manager
            <input type="checkbox" name="Event managemenr">Joint event manager
            <input type="checkbox" name="Event managemenr">Sports secretary
            <input type="checkbox" name="Event managemenr">Discpline Committee<br><br>
            <input type="submit" name="submit" value="Register">
            <input type="reset" name="reset" value="Cancel" onclick="myFunction()">
        </form>
    </div>
    <script type="text/javascript">
        function myFunction() {
            alert("Registration Cancelled!");
        }
    </script>

</body>

</html>