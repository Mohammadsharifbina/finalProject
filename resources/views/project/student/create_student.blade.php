@section('route', 'student')
@section('second', 'active')
@extends('project.dashboard.master')
@section("content")
<a href="/@yield('route')" id="back-button">back</a>
<form action="/student" method="post" enctype="multipart/form-data" class="form">
    @csrf
    @if(session('success'))
        <div class="alert">
            {{session('success')}}

        </div>
    @endif
    <div class="inputs-labels">

        <label for="">name</label>
        <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
    </div>
    <span class="error">@error('name') {{ $message }} @enderror</span>
    <div class="inputs-labels">

        <label for="">father name</label>
        <input type="text" name="Father" placeholder="Enter your father name" value="{{old('Father')}}">
    </div>
    <span class="error">@error('Father') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="">email</label>
        <input type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
    </div>
    <span class="error">@error('email') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="image">age</label>
        <input type="number" name="age" placeholder="Enter your age" value="{{old('age')}}">

    </div>
    <span class="error">@error('age') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="date">str_date</label>
        <input type="date" name="str_date" id="date" max="<?php echo date('Y-m-d');?>" value="{{old('str_date')}}">
    </div>
    <span class="error">@error('str_date') {{ $message }} @enderror</span>

    <div class="inputs-labels">
        <label for="sName">Kankor id:</label>
        <input type="text" placeholder="Enter your kankor id" name="kankor_id" value="{{old('kankor_id')}}">
    </div>
    <span class="error">@error('kankor_id') {{ $message }} @enderror</span>

    <div class="inputs-labels">
        <label>Phone:</label>
        <input type="tel" placeholder="+234xxxxxxxxxx" require name="phone" value="{{old('phone')}}">
    </div>
    <span class="error">@error('phone') {{ $message }} @enderror</span>




    <div class="inputs-labels">

        <label for="">department </label>
        <select name="department" id="">
            @foreach($departments as $d)
                <option value="{{$d->name}}">{{$d->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="inputs-labels " id="gender-container" style="">


        <label for="">gender</label>
        <div id="spans">

            <div class="radio-buttons">

                <span>Male</span>
                <input type="radio" name="gender" checked>
            </div>
            <div class="radio-buttons">
                <span>Female</span>
                <input type="radio" name="gender">
            </div>

        </div>

    </div>
    <div class="inputs-labels" id="file-container">


        <label for="">image</label>
        <label for="file-upload" class="file-input-container">
            <input type="file" id="file-upload" name="image" value="{{old('image')}}">
        </label>
    </div>
    <span class="error">@error('image') {{ $message }} @enderror</span>

    <input type="submit" id="submit">
</form>
@endsection