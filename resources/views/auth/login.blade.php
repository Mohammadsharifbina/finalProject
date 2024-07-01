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

    <div id="page" class="site login-show">
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

                                <!-- Session Status -->
                                <x-auth-session-status class="mb" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                  

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <x-primary-button class="ml-3">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                            <div class="afterform">
                                <p>Don't have an account?</p>
                                <a href="/singup" class="t-signup">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div> <!--Login form--->
               
            </div>
        </div>
    </div>
    <script src="{{asset('asset/JS/sign in and sign up 1.js')}}"></script>
</body>

</html>