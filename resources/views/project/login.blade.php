<x-guest-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>third</title>
        <link rel="stylesheet" href="{{asset('asset/CSS/sign in and sign up 1.css')}}">
        <link rel="stylesheet" href="{{asset('/asset/CSS/all.css')}}">
    </head>

    <body>
        <div id="page" class="site login-show">
            <div class="container">
                <div class="wrapper">
                    <div class="login">

                        <div class="content-form">
                            <div class="y-style">
                                <form action="{{ route('panel') }}" method="post">
                                @csrf
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
                                    <div class="flex items-center justify-end mt-4">

                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot password?') }}
                                            </a>
                                        @endif

                                        <x-primary-button class="ml-3" style="display:flex;">
                                            {{ __('Log in') }}

                                        </x-primary-button>


                                    </div>
                                </form>
                                <div class="afterform">
                                    <p>Don't have an account?</p>
                                    <a href="#" class="t-signup">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Login form--->
                    <div class="signup">
                        <div class="content-heading">
                            <div class="y-style">
                                <!-- <div class="logo"><a href="#">.web<span>design</span></a></div> -->
                                <div class="logo"><img src="Img/logo.JPG" alt=""></div>
                                <div class="welcome">
                                    <h2>Sign Up<br>Now!</h2>
                                    <p>Ready to be creative?<br>We can help you grow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-form">
                            <div class="y-style">
                                <form action="#">
                                    <p>
                                        <label for="">Username</label>
                                        <input type="text" placeholder="Enter your name">
                                    </p>
                                    <p>
                                        <label for="">email</label>
                                        <input type="email" placeholder="Enter your email">
                                    </p>
                                    <p>
                                        <label for="">Password</label>
                                        <input type="password" placeholder="Enter your Password">
                                    </p>
                                    <p>
                                        <label for="">Confirm password</label>
                                        <input type="password" placeholder="Enter your Password">
                                    </p>
                                    <p class="check">

                                        <input type="checkbox" id="terms">
                                        <label for="terms">I agree to all Statements Included in <a href="#">Terms of
                                                use.</a></label>
                                    </p>
                                    <p class="forgot"><a href="#">Forgot Password</a></p>
                                    <button type="submit" id="">Sign up</button>
                                </form>
                                <div class="social">
                                    <p><span>Our sign up with</span></p>
                                    <ul>
                                        <li><a href="#" class="google"><i class="fa-brands fa-google"></i></a></li>
                                        <li><a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="afterform">
                                    <p>Already have an account?</p>
                                    <a href="#" class="t-login">Login here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="JS/sign in and sign up 1.js"></script>
    </body>

    </html>
</x-guest-layout>