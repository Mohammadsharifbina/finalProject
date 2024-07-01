<!DOCTYPE html>
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

    <style>
        body{
            background: #f4f4f4 !important;
        }
    </style>
</head>

<body class= "mybody">
    

    <!-- @if(session('success'))
        <div class="alert">
            {{session('success')}}

        </div>
    @endif -->
      
        <section>
           
            <!-- PAGE Body starts here -->

            <div class="body2">
                <div class="body2-nav">
                    <h1>Personal Details</h1>
                </div>
                <div class="body-contents">
                    <p  >Welcome, To Registration</p>
                    <p>Fill in the below details with the right information to update your Profile and continue
                        registration</p>
                    <ul class="profileNav">
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#profile">Bio</a></li>
                        <li><a href="#contactDetails">Contact Details</a></li>
                        <li><a href="#schoolInfo">University info</a></li>

                    </ul>
                    <form action="/SS" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                    
                        <fieldset id="profile">
                            <legend><i class="fa-solid fa-image-portrait"></i>Profile: </legend>
                            <label>Select an image to upload (Passport-like):</label>
                            <input type="file" id="profile_img" name="image" value="{{old('image')}}">
                        </fieldset>
                        <fieldset id="bio">
                            <legend><i class="fa-solid fa-user"></i>Bio: </legend>

                            <label for="fName">First Name:</label>
                            <input type="text" placeholder="Enter your First Name" name="name" value="{{old('name')}}">
                            <span class="error">@error('name') {{ $message }} @enderror</span>

                            <label for="sName">F/Name:</label>
                            <input type="text" placeholder="Enter your father name" name="Father" value="{{old('Father')}}">
                            <span class="error">@error('Father') {{ $message }} @enderror</span>

                            <label for="sName">Age:</label>
                            <input type="number" placeholder="Enter your Age" name="age" value="{{old('age')}}">
                            <span class="error">@error('age') {{ $message }} @enderror</span>

                            <label for="sName">Kankor id:</label>
                            <input type="text" placeholder="Enter your Age" name="kankor_id" value="{{old('kankor_id')}}">
                            <span class="error">@error('kankor_id') {{ $message }} @enderror</span>

                            <label for="mName">Gender:</label>
                            <div class="gender">
                                <div class="male"><input type="radio" value="0" name="gender" checked>Male</div>
                                <div class="famale"><input type="radio" value="1" name="gender">Famale</div>

                            </div>
                            <span class="error">@error('gender') {{ $message }} @enderror</span>


                            <label>Start date:</label>
                            <input type="date" name="str_date" value="{{old('str_date')}}">
                            <span class="error">@error('str_date') {{ $message }} @enderror</span>

                        </fieldset>
                        <fieldset id="contactDetails">
                            <legend><i class="fa-solid fa-address-card"></i>Contact Details: </legend>
                            <label>Email Address:</label>
                            <input type="email" placeholder="student@school.com" name="email" value="{{old('email')}}">
                            <span class="error">@error('email') {{ $message }} @enderror</span>

                            <label>Phone Number:</label>
                            <input type="tel" placeholder="+234xxxxxxxxxx" require name="phone" value="{{old('phone')}}"> 
                            <span class="error">@error('phone') {{ $message }} @enderror</span>


                        </fieldset>
                        <fieldset id="schoolInfo">
                            <legend><i class="fa-solid fa-id-badge"></i>Education Info: </legend>



                            <label>Department </label>
                            <select name="department" id="">
                                <option value="management development">management development</option>
                                <option value="public policy">public policy</option>
                                <option value="public administration">public administration</option>
                            </select>

                        </fieldset>

                        <fieldset>
                            <legend><i class="fa-solid fa-check-double"></i>All fields filled correctly?</legend>

                            <input type="submit"  id="submit">
                        </fieldset>
                    </form>
                </div>

            </div>
    </session>

<!-- </session> -->




    <!-- PAGE Body ends here -->
    

</body>

</html>