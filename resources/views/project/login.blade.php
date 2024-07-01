<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>third</title>
    <link rel="stylesheet" href="{{asset('asset/CSS/sign in and sign up 1.css')}}">
    <link rel="stylesheet" href="{{asset('asset/CSS/all.css')}}">
</head>

<body>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div id="page" >
        <div class="container">
            <div class="wrapper">
                <div class="login">
                    <div class="content-heading">
                        <div class="y-style">
                            <!-- <div class="logo"><a href="#">.web<span>design</span></a></div> -->
                            <div class="logo"><img src="bina.png" alt=""></div>
                            <div class="welcome">
                                <h2>Welcome<br>Back!</h2>
                                <p>Go start to be creative.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-form">
                        <div class="y-style">
                            <form action="/loginTo" method="post">
                                @csrf
                                @method('get')
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                              
                                <p class="check">

                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </p>
                                <p class="forgot"><a href="#">Forgot Password</a></p>
                            </form>

                        </div>
                    </div>
                </div> <!--Login form--->
               
            </div>
        </div>
    </div>
</body>

</html>