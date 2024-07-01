<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/asset/./assets/css/style.css')}}">
   
    <link rel="stylesheet" href="{{asset('/asset/./assets/css/swiper-bundle.min.css')}}">
    @if(  LaravelLocalization::getCurrentLocaleDirection() =="rtl")
  <style>
    header{
     direction: ltr;
    }
  </style>
@endif
   
</head>