@extends('project.dashboard.master')
@section('third','active')
@section('route','teacher')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/project" method="post" enctype="multipart/form-data" class="form" style="margin-top:20px;">
        @csrf
        @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name="name" placeholder="Name">
        </div>
            
        <div class="inputs-labels">
            
        <label for="">description</label>
       <textarea name="desc" id="" rows="6"></textarea>

        </div>
        <div class="inputs-labels">
             
        <label for="">teacher</label>
       <select name="teacher" id="">
        @foreach($teachers as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
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