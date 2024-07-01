@extends('project.dashboard.master')
@section('third','active')
@section('route','teacher')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/SK" method="post" enctype="multipart/form-data" class="form" style="margin-top:20px;">
        @csrf
        @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
        <div class="inputs-labels">
        <label for="">Title</label>
        <input type="text" name="title" placeholder="skill title" value="{{old('title')}}">
        </div>
        <span class="error">@error('title') {{ $message }} @enderror</span>
        
        <div class="inputs-labels">
            <label for="">details</label>
            <textarea name="details" id="" rows="5" placeholder="Details"></textarea>
        </div>
        <span class="error">@error('details') {{ $message }} @enderror</span>
        <div class="inputs-labels">
        <label for="">details</label>
        <select name="teacher" id="">
            @foreach ($teachers as $t)
                <option value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
        </div>
    

        <div class="inputs-labels" id="file-container">

            <label for="">image</label>
            <label for="file-upload" class="file-input-container">
                <input type="file" id="file-upload" name="image" value="{{old('image')}}">
            </label>
        </div>
        
    
        <input type="submit" id="submit">
    </form>
@endsection