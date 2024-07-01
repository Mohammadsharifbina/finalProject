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
        *{
            --secondary:#02335D;
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

   
    .per .general .fr, .per .general .sc, .per .general .tr, .per .general .frt, .per .general .ff, .per .general .st, .per .general .sn{
        display: inline-block;
        height: {{$results1}}%;
        background-color: blue;
        font-size:0.8em;
        padding-top:.5em;
        text-align:center;
        color:white;
        
    }
    .per .general .sc{
        height: {{$secondSemester}}%;
    }
    .per .general .tr{
        height: {{$thirdSemester}}%;
        
    }
    .per .general .frt{
        height: {{$fourthSemester}}%;

    }
    .per .general .ff{
        height: {{$fifthSemester}}%;

    }
    .per .general .st{
        height: {{$sixthSemester}}%;

    }
    .per .general .sn
    {
        height: {{$seventhSemester}}%;

    }
    .semester{
        height: 110%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
</head>

<body>
    <nav>
        <div class="logo-name">
           

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
                <h2>MARKS TABLE</h2>
            </div>

            <div class="avatar">
                <img width="50" height="50" src="{{asset('students/' . $students->image)}}" alt="">
            </div>
        </div>

        <div class="dash-content">


       
@section('content')
<div id="br">

    <a href="/student" id="back-button">back</a>
    <a href="/domarks/{{$students->id}}" id="create">received marks </a>
</div>
<div class="charts-container" id="chartsContainer"></div>
    <script>
        const subjects = [
            { name: 'Math', mark: 85 },
            { name: 'Science', mark: 90 },
            { name: 'English', mark: 78 },
            { name: 'History', mark: 100 },
            { name: 'Geography', mark: 89 }, 
             { name: 'Math', mark: 85 },
            { name: 'Science', mark: 90 },
            { name: 'English', mark: 78 },
            { name: 'History', mark: 100 },
            { name: 'Geography', mark: 89 },
        ];

        const colors = [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)'
        ];

        const chartsContainer = document.getElementById('chartsContainer');

        subjects.forEach((subject, index) => {
            const container = document.createElement('div');
            container.className = 'chart-container';

            const title = document.createElement('h2');
            title.textContent = subject.name;
            container.appendChild(title);

            const canvas = document.createElement('canvas');
            canvas.id = chart-${index};
            container.appendChild(canvas);

            chartsContainer.appendChild(container);

            const ctx = canvas.getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [${subject.name} Marks, 'Remaining'],
                    datasets: [{
                        data: [subject.mark, 100 - subject.mark],
                        backgroundColor: [colors[index % colors.length], 'rgba(211, 211, 211, 0.6)'],
                        borderColor: [colors[index % colors.length], 'rgba(211, 211, 211, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    },
                    responsive: true,
                    // maintainAspectRatio: false
                }
            });
        });
    </script>
<div class="container">



    <h2>first semester</h2>
        <div class="">
            <table id="myTable">

                <tr>

                    <th>book</th>
                    <th>marks</th>
                    <th>total</th>
                  
                </tr>
                @foreach ($marks1 as $r)
                    <tr >
                        <td>{{$r->book->name}}</td>
                        <td> <span id="credit">{{$r->Marks}}</span> </td>
                        <td> <span id="marks">{{$r->total}}</span></td>
                       
                    </tr>
                    
                @endforeach
                <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$results1}}%</span></td>
                <td></td>

            </tr>
                 
            </table>
        </div>


</div>

<div class="container">

    <h2>Second semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
               
            </tr>
            @foreach ($marks2 as $r2)
                <tr>
                    <td> <span>{{$r2->book->name}}</span></td>
                    <td> <span id="credit">{{$r2->Marks}}</span> </td>
                    <td> <span id="marks">{{$r2->total}}</span></td>
                  
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$secondSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>


</div>

<div class="container">

    <h2>third semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                
            </tr>
            @foreach ($marks3 as $r3)
                <tr>
                    <td> <span>{{$r3->book->name}}</span></td>
                    <td> <span id="credit">{{$r3->Marks}}</span> </td>
                    <td> <span id="marks">{{$r3->total}}</span></td>
                   
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$thirdSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>


</div>

<div class="container">
    <h2>fourth semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
            
            </tr>
            @foreach ($marks4 as $r4)
                <tr>
                    <td> <span>{{$r4->book->name}}</span></td>
                    <td> <span id="credit">{{$r4->Marks}}</span> </td>
                    <td> <span id="marks">{{$r4->total}}</span></td>
                    
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$fourthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>fifth semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                
            </tr>
            @foreach ($marks5 as $r5)
                <tr>
                    <td> <span>{{$r5->book->name}}</span></td>
                    <td> <span id="credit">{{$r5->Marks}}</span> </td>
                    <td> <span id="marks">{{$r5->total}}</span></td>
                

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$fifthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>sixth semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                >
            </tr>
            @foreach ($marks6 as $r6)
                <tr>
                    <td> <span>{{$r6->book->name}}</span></td>
                    <td> <span id="credit">{{$r6->Marks}}</span> </td>
                    <td> <span id="marks">{{$r6->total}}</span></td>
                  

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$sixthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>eighth  semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
               
            </tr>
            @foreach ($marks7 as $r7)
                <tr>
                    <td> <span>{{$r7->book->name}}</span></td>
                    <td> <span id="credit">{{$r7->Marks}}</span> </td>
                    <td> <span id="marks">{{$r7->total}}</span></td>
                    

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$seventhSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>seventh semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
               
            </tr>
            @foreach ($marks8 as $r8)
                <tr>
                    <td> <span>{{$r8->book->name}}</span></td>
                    <td> <span id="credit">{{$r8->Marks}}</span> </td>
                    <td> <span id="marks">{{$r8->total}}</span></td>
                    

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$eighthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>





    </div>
    </section>
        <footer> &copy; 2024 MOLDAY & PUNDIT</footer>
    </div>



    <!-- PAGE Body ends here -->
    <script src="{{asset('portal/asset/js/script.js')}}"></script>
    <script src="{{asset('portaL/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>