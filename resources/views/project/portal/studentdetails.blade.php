<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
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
   

</head>

<body>
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

       @include('project.portal.aside')
    </nav>

    <section class="dashboard">
      @include('project.portal.navbar')

      <div class="table">
            <header>
                <h1>Student Details</h1>
           </header> 
           <div class="container">
                   
                   <table>
                       <tr>
                           <th>Name</th>
                           <th>F/Name</th>
                           <th>Image</th>
                           <th>Add</th>
                       </tr>
                       <tr>
                           <td><a href="Student Information.html">Tamim</a></td>
                           <td><a href="Student Information.html">Saif</a></td>
                           <td><a href="Student Information.html"><img src="asset/images/sim-logo.png" alt="" class="std_img"></a></td>
                           <td><a href="Student Information.html">Add</a></td>
                       </tr>
                   </table>
               
           </div>
        </div>

        
        
    </section>
    


    <script >
        const body = document.querySelector("body"),
    modeToggle = body.querySelector(".mode-toggle");
sidebar = body.querySelector("nav");
sidebarToggle = body.querySelector(".sidebar-toggle");
modeText = document.getElementById("link-text");
icon = document.getElementById("moon-sun");

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");

}

let getStatus = localStorage.getItem("status");
if (getStatus && getStatus === "close") {
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "Dark Mode";
        icon.innerHTML = "<i class='uil uil-moon'></i>";
        localStorage.setItem("mode", "dark");
    } else {
        modeText.innerText = "Light Mode";
        icon.innerHTML = "<i class='uil uil-brightness'></i>";
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if (sidebar.classList.contains("close")) {
        localStorage.setItem("status", "close");
    } else {
        localStorage.setItem("status", "open");
    }
})



// Define the data for the chart
const data = [
    { value: 30, color: "#ff6347" },
    { value: 70, color: "#87ceeb" }
];

// Get the chart element from the DOM
const chart = document.getElementById("chart");

// Loop through the data and create a slice for each item
let startAngle = 0;
data.forEach(item => {
    // Calculate the end angle based on the value
    const endAngle = startAngle + (item.value / 100) * 360;

    // Create a new slice element
    const slice = document.createElement("div");
    slice.classList.add("slice");
    slice.style.backgroundColor = item.color;
    slice.style.transform = `rotate(${startAngle}deg)`;

    // Create a clip path to mask the slice
    const clipPath = document.createElement("div");
    clipPath.style.clip = `rect(0px, 30px, 60px, 0px)`;
    clipPath.appendChild(slice);
    chart.appendChild(clipPath);

    // Update the start angle for the next slice
    startAngle = endAngle;
});
    </script>
    <link rel="stylesheet" href="{{asset('portal/asset/js/script.js')}}">

</body>

</html>
