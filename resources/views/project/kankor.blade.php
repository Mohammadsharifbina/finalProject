<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/checkStudent" method="post">
        @csrf
        <input type="text" name="Cid" placeholder="Enter your Kankor id">
        <input type="submit">
    </form>
</body>
</html>