@extends('project.dashboard.master')

@section('16', 'active')
@section('route', 'event')


@section('content')
<a href="/@yield('route')" id="back-button">back</a>
<form action="/event" method="post" id="form" enctype="multipart/form-data" class="form">
    @csrf


    @if(session('success'))
        <div class="alert">
            {{session('success')}}

        </div>
    @endif


    <div class="inputs-labels">
        <label for="">Title</label>
        <input type="text" name="title" placeholder="Title">
    </div>
    <span class="error">@error('title') {{ $message }} @enderror</span>

    <div class="inputs-labels">
        <label for="">Description</label>
        <textarea name="desc" id="" cols="30" rows="5"></textarea>
    </div>
    <span class="error">@error('desc') {{ $message }} @enderror</span>




    

    <div class="inputs-labels">
        <label for="">image</label>
        <input type="file" name="eventImage" placeholder="image">
    </div>
    <span class="error">@error('image') {{ $message }} @enderror</span>




        <input type="submit" value="create" id="submit">

</form>
@endsection