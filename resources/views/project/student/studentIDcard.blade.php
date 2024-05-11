<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('card.css')}}">
</head>
<body>
    <div id="container">
        <div class="cards">
            <div class="card-header">
                <img src="{{asset('bina.png')}}" alt="logo">
                <div class="company-name">
                    <h1>Ningarhar university</h1>
                    <h3>Faculty of public administration</h3>
                </div>

                <h1>{{$students->id}}</h1>

            </div>
            <hr>
            <div class="card-info">
                <img src="{{asset('students/'.$students->image)}}" alt="student photo">
                <div class="info">
                    <div class="name">
                        <h3>name:</h3>
                        <h4>{{$students->name}}</h4>
                    </div>
                    <div class="name">
                        <h3>Father name:</h3>
                        <h4>{{$students->Father}}</h4>
                    </div>
                   
                    <div class="name">
                        <h3>department:</h3>
                        <h4>{{$students->department->name}}</h4>
                    </div>
                    <div class="name">
                        <h3>Contact:</h3>
                        <h4><a href="mailto:{{$students->email}}">{{$students->email}}</a></h4>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>