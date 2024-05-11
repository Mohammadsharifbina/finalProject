@section('fifth','active')
@section('route','semester')

@extends('project.dashboard.master')
@section('content')

<a href="/@yield('route')" id="back-button" >back</a>
<form action="/semester/{{$semester->id}}" method='post' class="form">
        @csrf
        @method('PUT')
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name='name' value="{{$semester->name}}">
        </div>

        <span class="error">@error('name') {{ $message }} @enderror</span>

        <div class="inputs-labels">
        <label for="">class</label>
        <select name="class" id="">
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->name}}</option>
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