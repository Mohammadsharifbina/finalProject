<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Teacher profile</title>
  <link rel="stylesheet" href="{{asset('/asset/./assets/css/teacherProfile.css')}}">
  <link rel="stylesheet" href="{{asset('/asset/./assets/CSS/all.css')}}">
</head>

<body>

  <body>
    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero">
              <h1><span>S</span>Hussam<span></span></h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li><a href="/home" data-after="Home">Home</a></li>
              <li><a href="#services" data-after="Skills">Skills</a></li>
              <li><a href="#projects" data-after="Projects">Projects</a></li>
              <li><a href="#about" data-after="About">About</a></li>
              <li><a href="#contact" data-after="Contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
      <div class="hero container">
        <div>
          <h1>Hello, <span></span></h1>
          <h1>My Name is <span></span></h1>
          <h1> {{$teacher->name}} <span></span></h1>
          <a href="#about" type="button" class="cta">Portfolio</a>
        </div>
      </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Service Section -->
    <section id="services">
      <div class="services container">
        <div class="service-top">
          <h1 class="section-title">S<span>kill</span>s</h1>

        </div>
        <div class="service-bottom">

          @foreach ($teacher->skills as $t)

      <div class="service-item" style=" background-image: url(./img/img-1.pn);">
        <div class="icon"><img src="{{asset('skills/' . $t->image)}}" /></div>
        <h2>{{$t->title}}</h2>
        <p>{{$t->details}}</p>
      </div>
    @endforeach
        </div>
      </div>
    </section>
    <!-- End Service Section -->


    <!-- Projects Section -->
    <section id="projects">
      <div class="projects container">
        <div class="projects-header">
          <h1 class="section-title">Recent <span>Projects</span></h1>
        </div>
        <div class="all-projects">
          
          
          <div class="project-item">
            @foreach ($teacher->projects as $p)
            
            <div class="project-info">
              <h1>{{$p->name}}</h1>
              <h2>Coding is Love</h2>
              <p>{{$p->description}}</p>
            </div>
            <div class="project-img">
              <img src="{{asset('projects/'.$p->image)}}" alt="img">
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Projects Section -->

    <!-- About Section -->
    <section id="about">
      <div class="about container">
        <div class="col-left">
          <div class="about-img">
            <img src="{{asset('teachers/' . $teacher->image)}}" alt="img">
          </div>
        </div>
        <div class="col-right">
          <h1 class="section-title">About <span>me</span></h1>
          <h2>Front End Developer</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae
            atque
            repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
            exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
            Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
            reprehenderit libero enim!</p>
          <a href="#" class="cta">Download Resume</a>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
      <div class="contact container">
        <div>
          <h1 class="section-title">Contact <span>info</span></h1>
        </div>
        <div class="contact-items">
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
            <div class="contact-info">
              <h1>Phone</h1>
              <h2>+93 794 112 317</h2>
              <h2>+93 778 501 309 </h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
            <div class="contact-info">
              <h1>Email</h1>
              <h2><a href="mailto:{{$teacher->email}}">{{$teacher->email}}</a></h2>
             
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
            <div class="contact-info">
              <h1>Address</h1>
              <h2>Kabul, Kandahar,InoMina</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <section id="footer">
      <div class="footer container">
        <div class="brand">
          <h1><span>H</span>ussam <span>J</span>an</h1>
        </div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
          </div>
        </div>
        <p>Copyright © 2020 Wajahat. All rights reserved</p>
      </div>
    </section>
    <!-- End Footer -->
    <script src="./assets/js/teacherProfile.js"></script>


  </body>

</html>