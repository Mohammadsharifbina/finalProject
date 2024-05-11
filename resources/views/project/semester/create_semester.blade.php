
@extends('project.dashboard.master')
@section('fifth','active')
@section('route','semester')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/semester" method='post' class="form">
        @csrf
        @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name='name'>
        </div>
  <span class="error">@error('name') {{ $message }} @enderror</span>

        <div class="inputs-labels">
        <label for="">class</label>
        <select name="class" id="">
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->name}}</option>
            <h1>sadksd</h1>
            @endforeach
        </select>
        </div>

        <div class="inputs-labels">
        <label for="">curriculum</label>
        <select name="curriculum" id="">
            @foreach($curriculums as $curriculum)
            <option value="{{$curriculum->id}}">{{$curriculum->description}}</option>
            @endforeach
        </select>
        </div>
       
      
        
      
        <input type="submit" value='create' id="submit">
    </form>
@endsection