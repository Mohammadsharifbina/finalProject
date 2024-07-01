<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('portal/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('portal/asset/css/pages.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Student Portal</title>
    <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portal/index.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('portal/pages.css')}}">

    <style>
       
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;

        }

    }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;

        }

        .charts-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            /* width: 80%;
            border:2px solid black; */
        }

        .chart-container {
            width: 150px;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            text-align: center;
            font-size: 1.2em;
            margin: 10px 0;
        }

        canvas {
            width: 100%;
            height: 150px;
        }
        th{
            background-color:hsl(171, 32%, 46%);;
            color: white;
        }
        td{
            font-size: 1em !important;
        }
    .container {
        width: 80%;
        height: auto;
        /* background-color: green; */
        margin-bottom: 1em;
        border: 1px solid gray;
        margin: 0 auto;
        margin-bottom: 1em;
    }

    .container .first {
        width: 100%;
        /* display: flex; */
        flex-wrap: wrap;
        justify-content: space-between;
        border: 1px solid gray;
        padding-top: 2em;
        position: relative;

    }


    table,
    td,
    tr {
        border: 1px solid blue;
    }

    tr {
        margin-bottom: 1em;

    }

    h2 {
        text-align: center;
        text-transform: capitalize;
        /* color: #723424; */

    }

    .left {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        padding: 0 1em;

    }

    .left>div {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border: 1px solid red;
        margin-bottom: 0.2em;
        padding: 0 0.2em;
    }
 
    nav {
        background-color:beige;
    }
    .top{
        background-color:beige !important;
    }
 
    /* log-name */
    .marks {
        display: flex;
        /* justify-content: space-between; */
    }

    #parentage {

        /* width: 100%; */
        text-align: center;
        font-size: 1em;
        margin-bottom: 1em;

    }

    #parentage span {
        background-color: lightblue;
        padding: 1em;
        border-radius: 25%;

    }

    table {
        /* width: 60%; */
        table-layout: fixed;
        border: 2px solid gray;


    }

    #student-info {
        width: 100%;
        height: 23vh;
        
        margin-bottom: 1em;
        display: flex;
        justify-content: space-evenly;
        align-items: flex-end;
        /* background-color: rebeccapurple; */
    }

    #student-info #table {
        border: none
        width: 10em;
        margin-right: 1em;
    }

    #table tr:first-child {

        border-radius: 30px;
    }

    table,
    td,
    th {
        border: none;
    }

    #student-info table tr td img {
        width: 100%;
      
    }

    .db {
        border: none;
        text-align: center;
        padding-top: 1em;
    }

    #br {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1em;

    }
    .per{
       height: 100%;
       display: flex;
       align-items: flex-end;
        /* background-color: red; */
    }
    .per .general{
        height: 100%;
        /* background-color: brown; */
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        width: 3em;
        margin-right: 1em;
        
    }

    th{
        background:#02335D;
    }

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
        }

        .flex-item {
            flex: 1 1 45%;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .flex-item.title {
            font-weight: bold;
            background-color: #083481;
            color: white;
            border-bottom: 2px solid #ddd;
        }

        .flex-item img {
            border-radius: 50%;
        }

        @media (max-width: 600px) {
            .flex-item {
                flex: 1 1 100%;
            }

            .flex-item.title {
                display: none;
            }

            .flex-item::before {
                content: attr(data-title);
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }
        }


        .dashboard{
            margin:5em 0;
        }
        .container {
            width:65%;
            max-width:400px;
            background: white;
            padding: 22px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 1em auto;

        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;

        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="Issue"],
        textarea {
            /* padding: 10px; */
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #083481;
            color: white;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        span {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 15px;
            }
        }
 
   
</style>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!-- <img src="asset/images/sim-logo.png" alt=""> -->
            </div>

            <span class="logo_name">
                <h1>عامه اداره</h1>
                <p>Student Interface</p>
            </span>
        </div>

        <div class="menu-items">
          
            <ul class="nav-links">
                <li><a href="/registered/{{$students->id}}">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>

                <li><a href="/studentInfo/{{$students->id}}">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Student Info</span>
                    </a></li>
                    <li><a href="/student/{{$students->id}}">
                <i class="uil uil-credit-card"></i>
                        <span class="link-name">card</span>
                    </a></li>
                <li><a href="/feedback/{{$students->id}}">
                <i class="uil uil-feedback"></i> 
                        <span class="link-name">feedback</span>
                    </a></li>
            </ul>


            <ul class="logout-mode">
                <li><a href="login.html">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <div class="mode-toggle">
                        <!-- <span class="switch"></span> -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <div class="abesit">
                <i class="uil uil-bars sidebar-toggle"></i>
            </div>

            <div class="logo-image">
                <h2>FEEDBACK</h2>
            </div>

            <div class="avatar">
                <img width="50" height="50" src="{{asset('students/' . $students->image)}}" alt="">
            </div>
        </div>
  
        <div class="container">
        <form action="/index" method="post">
            @csrf
            @method('post')
            <label for="username">Name:</label>
            <input type="text" id="username" name="Name">
            <span>@error('Name') {{$message}} @enderror</span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Sender" required>
            <span>@error('email') {{$message}} @enderror</span>

            <label for="issue">Subject:</label>
            <input type="text" id="issue" name="w3lSubject">
            <span>@error('w3lSubject') {{$message}} @enderror</span>

            <label for="message">Message:</label>
            <textarea id="message" name="w3lMessage" rows="5"></textarea>

            <input type="submit" value="Send Feedback">
        </form>
    </div>


    </div>
    </section>
    </div>



    <!-- PAGE Body ends here -->
    <script src="{{asset('portal/asset/js/script.js')}}"></script>
    <script src="{{asset('portaL/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>