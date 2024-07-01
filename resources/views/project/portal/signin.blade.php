<!DOCTYPE html>
<html lang="en">
  <>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
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


    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />

    <style>
      body{
        /* background: url("preview.png"); */
        
      }
      section{
        background-image: url(/asset/images/back.jpg);
        height: 100vh;
        background-repeat: no-repeat;
        object-fit: cover;
        background-size: cover;
        opacity: 0.9;
        /* filter: grayscale(12%); */
        

      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0.9;
      }
      nav{
         /* padding: 10px 0; */
         
      }
      .nav-links{
        
      }
      form{
       
        padding: 10px 0px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* background-color: white; */
        /* justify-content: center; */
        
      }
      form input{
        padding: 5px 3px;
      }
      .wrapper{
        /* background-color: bisque; */
        width: 100%;
        transform: translateY(100px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        
      }
      .wrapper h2{
        text-align: center;
        padding: 5px;
      }
      table{
      border: none;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* justify-content: center; */
      }
      .form-text{
        padding: 4px;
        text-transform: capitalize;
        font-weight: 500;
      }
      table td{
        padding: 10px 5px;
        border: none;
      }
      label {
        font-weight: bold;
        color: #333;
      }

      span {
        color: #ff0000;
        font-weight: 500;
      }

      h2 {
        text-transform: uppercase;
      }

      .btn{
        color:#fff;
        padding: 5px 25px;
        border-radius: 6px;
        background-color:#02335D;
        transition: all 0.2s ease;
        border: none;
        outline: none;
        font-size: 1.2em;
        font-weight: 700;
        background-color: none;
        margin-top: 5px;
        
    }
    .btn:active{
        transform: scale(0.3);
    }
    .btn:hover{
      background-color: lightblue;
      color: black;
    }
   ::placeholder{
      color: rgb(37, 35, 35) !important;
    }
    fieldset{
      background-color: white;
      border: 1px solid gray;
      padding: 10px;
      box-shadow: 5px 5px gray;
    }
    table{
      background-color: white;
      
    }
    </style>

    <script
      src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
   <section>
  
    <nav>
      <div class="logo-name">
          <div class="logo-image">
              <img src="asset/images/sim-logo.png" alt="">
          </div>

          <span class="logo_name">
              <h1>عامه اداره</h1>
              <p>Student Interface</p>
          </span>
      </div>

      <div class="menu-items">
          <ul class="nav-search">
              <li>
                  <a href="#">
                      <i class="uil uil-search"></i>
                      <input type="search" class="link-name" placeholder="Search..." />
                  </a>
              </li>
          </ul>
         @inc
          <ul class="logout-mode">
              <li><a href="login.html">
                      <i class="uil uil-signout"></i>
                      <span class="link-name">Logout</span>
                  </a></li>

              <li class="mode">
                  <a href="#">
                      <div id="moon-sun">
                          <i class='uil uil-brightness'></i>
                      </div>
                      <span class="link-name" id="link-text">Light Mode</span>
                  </a>

                  <div class="mode-toggle">
                      <span class="switch"></span>
                  </div>
              </li>
          </ul>
      </div>
  </nav>

  <section class="dashboard">
      <div class="top">
          <div class="abesit">
              <i class="uil uil-bars sidebar-toggle"></i>
              <span class="logo_name clg-logo">
                  <img src="asset/images/logo.png" alt="">
              </span>
          </div>
          <div class="search-box">
              <i class="uil uil-search"></i>
              <input type="text" placeholder="Search here...">
          </div>

          <div class="avatar">
              <img src="asset/images/avatar.png" alt="">
              
          </div>
      </div>
      <div class="wrapper">
        <!-- onsubmit="return validation()" --> 
        <form action="result.html" id="form" onsubmit="return validation()">   
          <fieldset>
          <!-- full name -->
          <legend>student</legend>
          <table>
            <tr>
              <td><label for="name" class="form-label">Full Name</label></td>
              <td> <input
                type="text"
                class="form-control name-val" id="name" placeholder="Student Name" autocomplete="off" name="student"
              /></td>
              <span id="full-name"></span>
            </tr>
            
          
          <!-- MOBILE NUMBER -->
          <tr>
            <td><label for="mobile-number" class="form-label">Mobile Number</label></td>
            <td><input
              type="number"
              class="form-control overflow-hidden"
              id="mobile-number"
              placeholder="03XXXXXXXXX"
              autocomplete="off"
            /></td>
            <span id="mobile"></span>
          </tr>
           
           
          

          <!-- BOX-2 -->

          <!-- email id -->
         <tr>
          <td><label for="email-address" class="form-label">Email address</label></td>
          <td><input
            type="email"
            class="form-control validate"
            id="email-address"
            aria-describedby="emailHelp"
            placeholder="student@xyz.com"
            autocomplete="off"
          /></td>
          <span id="email"></span>
         </tr>
            

            
            
          
          <!-- STUDENT ID -->
          <tr>
            <td><label for="student-id" class="form-label">STUDENT ID</label></td>
            <td><input
              type="password"
              inputmode="numeric"
              class="form-control validate"
              id="student-id"
              aria-describedby="emailHelp"
              placeholder="0000"
              autocomplete="off"
            /></td>
            <span id="student"></span>
          </tr>
        </table>
      
            <div id="emailHelp" class="form-text">Never share your student ID with anyone.</div>

            <div class="#">
              <input
                type="checkbox"
                class="form-check-input validate success"
                id="checkbox"
              />
              <label class="form-check-label" for="checkbox">Agree to terms and conditions</label
              >
              <br />
              <span id="check"></span>
            </div>
            <button
              class="btn btn-primary button w-100"
              id="button"
              onsubmit="return validation()">Sign in</button>
          </div>
        </fieldset>
        </form>
     
      </div>
   
    </section>
    <style>
      * *,
      *::before,
      *::after {
        animation-play-state: running !important;
      }
    </style>
    <script>
      window.setTimeout = null;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="result.js"></script>
    <script src="asset/js/script.js"></script>
  </body>
</html>