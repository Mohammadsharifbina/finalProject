@extends('project.layout.master')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('slider/css/slider.css')}}css/slider.css" defer>
    <link rel="stylesheet" href="{{asset('slider/css/all.css')}}">
    <title>Document</title>
    <style>
        *{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body{
  

  min-height: 100vh;
  background-color: #8853ff;
  /* background:linear-gradient(to left top,#031A9A,#8853FF); */
}
.wrapper{
    padding: 0 35px;
 max-width: 1350px;
 /* max-width: 110px; */
 width: 100%;
position: relative;

}
.wrapper i{
  height: 50px;
  width: 50px;
  background: #fff;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  cursor: pointer;
  border: 0.5px solid blue;
  position: absolute;
  top: 50%;
  font-size: 1.25rem;
  transform: translateY(-50%);
  box-shadow: 0 0.3em 0.6em rgba(0, 0, 0.0.23);
}
.wrapper i:first-child{
  left: 0px;
}
.wrapper i:last-child{
  right: 30px;
}
.wrapper .carousel{
  display: grid;
  /* align-items: center; */
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) 1px);
  gap: 16px;
  /* overflow: hidden; */
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  width: 100%;
  scroll-behavior: smooth;
  scrollbar-width: 0;
}
.carousel::-webkit-scrollbar{
  display: none;
}
.carousel :where(.card, .img){
  display: flex;
  align-items: center;
  justify-content: center;
}
.carousel.no-transition{
  scroll-behavior: auto;
}
.carousel.dragging{
  scroll-behavior: auto;
  scroll-snap-type: none;
}

.carousel.dragging .card{
  cursor: grab;
  user-select: none;

}

.carousel .card{
  scroll-snap-align: start;
  list-style: none;
  height: 30em;
  background:#fff;
  border-radius: 8px;
  /* overflow: hidden; */
  width: 24rem;
  /* width: 15rem; */
 
  cursor: pointer;
  padding-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  box-shadow: 10px 10px solid yellow;
  
}
.card .img {
  background-color: #8853ff;
  width:148px;
  height:148px;
  border-style: dotted;
  border-width: 1em;
  border-radius: 50%;
  animation-name: RotateColor;
  transition: all 4s ease;
  animation-iteration-count: infinite;
  animation-duration: 3s;
  animation-delay: 1s;
  transform: rotate(360deg);
  
}

@keyframes RotateColor {
  30%{
    transform: rotate(360deg);
    background-color: red;
  }
  50%{
    transform: rotate(360deg);
    background-color: green;
  }
  100%{
  
  background-color: black;

    transform: rotate(360deg);
  }

}
.card .img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #fff;
}
.card h2{
  font-weight: 500;
  font-size: 1.56rem;
  margin: 0.5em ;
}
.card p{
  font-size: 1.25rem;
  padding-top: 0.5em;
}
/* @media screen and (max-width:900px) {
  .carousel .card{
    width: 20em;
  }
} */
@media screen and (max-width:880px){
  .wrapper{

    display: flex;
  align-items: center;
  justify-content: center;
  /* padding: 0px 30px; */
  
  
  }
  .wrapper{
    max-width: 630px;
    width: 100%;
    padding: 0;
  }
  .carousel .card{
    width: 19em;
  }
  

}
@media screen and (max-width:700px){
  .wrapper {
    max-width: 310px;
    margin: 0px;
  }
}
@media screen and (max-width:420px){
  
 .carousel .card{
  width: 18em;
  
 }
}
    </style>
</head>
<body>
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
            @foreach ($teachers as $teacher)
            
            <li class="card">
                <div class="img"><img src="{{asset('teachers/'.$teacher->image)}}" alt="img" draggable="false"></div>
                <h2>{{$teacher->name}}</h2>
                <p>Title: Dean of science</p>
                <p>Department: Science</p>
                <p>Office: Room 101</p>
                <p>Email: dean@university.com</p>
                <p>Started Year: 2010</p>
                <a href="/teacherInfo/{{$teacher->id}}" style="color:black">wiev more</a>
            </li>
            
            @endforeach
           
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

<script src="{{asset('slider/slider.js')}}" defer></script>

</body>
</html>
@endsection