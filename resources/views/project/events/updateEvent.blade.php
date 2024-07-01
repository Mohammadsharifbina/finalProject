@extends('project.dashboard.master')

@section('16', 'active')
@section('route', 'event')


@section('content')
<a href="/@yield('route')" id="back-button">back</a>
<form action="/event/{{$event->id}}" method="post" id="form" enctype="multipart/form-data" class="form">
    @csrf

    @method('put')
    @if(session('success'))
        <div class="alert">
            {{session('success')}}

        </div>
    @endif


    <div class="inputs-labels">
        <label for="">Title</label>
        <input type="text" name="title" value="{{$event->title}}">
    </div>
    <span class="error">@error('title') {{ $message }} @enderror</span>

    <div class="inputs-labels">
        <label for="">Description</label>
        
        <textarea name="desc" id="" rows="5">{{$event->desc}}</textarea>
    </div>
    <span class="error">@error('desc') {{ $message }} @enderror</span>




    

    <div class="inputs-labels">
        <label for="">image</label>
        <input type="file" name="eventImage" value="{{$event->eventImage}}">
    </div>
    <span class="error">@error('image') {{ $message }} @enderror</span>




        <input type="submit" value="create" id="submit">

</form>
@endsection