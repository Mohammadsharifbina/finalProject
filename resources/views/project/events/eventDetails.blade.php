@extends('project.layout.master')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        background-image: url({{asset('events/'.$event->eventImage)}});
        opacity: 0.8;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        max-width: 100%;
        margin: 0px auto;
        height: 80vh;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: wheat;
    }
    .container h1 {
        text-align: center;
        text-transform: capitalize;

    }
    .event-info {
        margin-bottom: 20px;
    }
    .event-info h2 {
        margin-bottom: 5px;
        text-align: start;
    }
    .event-info p {
        margin: 0;
    }
    .container a{
        background-color: blue;
        color: white;
        padding: 0.3em 1em;
        text-decoration: none;
        border-radius: 0.2em;

    }
</style>
</head>
<body>
<div class="container">
    <h1 style="text-align:center;display:block;">{{$event->title}}</h1>
    <div class="event-info">
        <h2>{{$event->created_at}}</h2>
        <p>July 1, 2024</p>
    </div>
    <div class="event-info">
        <h2>Description:</h2>
        <p>This is a sample event description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et sapien fermentum, blandit dolor a, tincidunt magna.</p>
    </div>
    <div class="event-info">
        <h2>Location:</h2>
        <p>123 Event Avenue, Cityville, State, Country</p>
    </div>
    <a href="/home">back</a>
</div>
</body>
</html>

@endsection