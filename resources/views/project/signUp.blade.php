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

    <div id="page" >
        <div class="container">
            <div class="wrapper">
             
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
                            
                                <form method="POST" action="/signupTo">
                                    @csrf

                                    <!-- Name -->
                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!--  image -->




                                    <!-- Password -->
                                    <div class="">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password" name="password_confirmation" required
                                            autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-primary-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            

                            <div class="afterform">
                                <p>Already have an account?</p>
                                <a href="/loginTo" class="t-login">Login here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>