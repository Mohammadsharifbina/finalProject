@extends('project.layout.master')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f0f0f0;
}

.container {
    width: 80%;
    margin: 0 auto;
    max-width: 1200px;
    padding: 20px;
}


main {
    padding: 20px 0;
}

.news-article {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.news-article h2 {
    color: #333;
    margin-bottom: 10px;
}

.news-article .meta {
    color: #666;
    font-size: 0.8em;
    margin-bottom: 10px;
}

.news-article p {
    color: #444;
    margin-bottom: 15px;
}

.news-article .back-button {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.news-article .back-button:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>
    <main>
        <div class="container">
            <article class="news-article">
                <h2>Breaking News: Important Event</h2>
                <p class="meta">{{$new->created_at}}</p>
                <p>{{$new->Description}}</p> 
                <a href="/home" class="back-button">Back to News</a>
            </article>
        </div>
    </main
</body>
</html>
@endsection