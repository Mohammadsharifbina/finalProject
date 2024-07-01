@extends('project.layout.master')
<link rel="stylesheet" href="{{asset('/asset/./assets/css/about.css')}}">
<link rel="stylesheet" href="{{asset('/asset/./assets/CSS/all.css')}}">
@section('contents')


<div class="wrapper">
    <h1 id="heading">Our Team</h1>
    <div class="image-container">
        <div class="img"><img src="picture/پوهندوی دوکتور جهان مخلص.jpg" onclick="info(0)" alt=""></div>
        <div class="img"><img src="picture/پوهندوی ریحان الله رحیمي.jpeg" onclick="info(1)" alt=""></div>
        <div class="img"><img src="picture/پوهنیار دوکتور نیاز محمد همدرد.jpg" onclick="info(2)" alt=""></div>
        <div class="img"><img src="/picture/پوهنیار محمد نظیر ناصري (2).JPG" onclick="info(3)" alt=""></div>
        <div class="img"><img src="picture/پوهنیار محمد نظیر ناصري.jpg" onclick="info(4)" alt=""></div>
    </div>
    <div class="content-info">
        <img src="picture/پوهنیار محمد نظیر ناصري.jpg" alt="" id="pic">
        <div class="content">
            <h1 id="name">Sanaullah Hussam</h1>
            <h3 id="skill">Front-End Development</h3>
            <p id="info">Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
            <div class="social-media">
                <a href="https://www.facebook.com/Sanaullah.Hossam"><i class="fab fa-facebook-f"></i> <i
                        class='bx bxl-facebook-circle'></i></a>
                <a href="https://twitter.com/sanaullah.hussam"><i class="fab fa-twitter"></i> <i
                        class='bx bxl-twitter'></i></a>
                <a href="https://instagram.com/sanaullahhussam932?igshid=YTQwZjQ0NmI0OA=="><i
                        class="fab fa-instagram"></i> <i class='bx bxl-instagram'></i></a>
                <a href="https://whatsapp.com/dl/"><i class="fab fa-whatsapp"></i> <i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>
    </div>
</div>

<!-- another one.......... -->

<script src="{{asset('/asset/./assets/js/about.js ')}}" defer></script>
@endsection