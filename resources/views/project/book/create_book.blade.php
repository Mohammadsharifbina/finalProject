@extends('project.dashboard.master')
@section('ninth','active')
@section('route','book')
@section('content')

<a href="/@yield('route')" id="back-button" >back</a>
<form action="/book" method="post" class="form">
        @csrf
        @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
        <div class="inputs-labels">

            <label for="">name</label>
            <input type="text" name="name" placeholder=" Name">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>

        
        <div class="inputs-labels">
        <label for="">author</label>
        <input type="text" name="author" placeholder="Author">
        </div>
        <span class="error">@error('author') {{ $message }} @enderror</span>

        <div class="inputs-labels">   
              <label for="">publisher</label>
        <input type="text" name="publisher" placeholder="Publisher">
    </div>
    <span class="error">@error('publisher') {{ $message }} @enderror</span>

        <div class="inputs-labels">
             <label for="">credits</label>
        <input type="number" name="no_credits" placeholder="number of credits">
    </div>
    <span class="error">@error('no_credits') {{ $message }} @enderror</span>
        <div class="inputs-labels">
 
        <label for="">semester</label>
        <select name="teacher_id" id="">
            @foreach($teachers as $teacher)
            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
            @endforeach
        </select>
        
        </div>
        <span class="error">@error('teacher_id') {{ $message }} @enderror</span>
        <div class="inputs-labels">
        <label for="">curriculum</label>
        <select name="curriculum_id" id="">
            @foreach($curriculums as $c)
            <option value="{{$c->id}}">{{$c->description}}</option>
            @endforeach
        </select>
        </div>
        <span class="error">@error('curriculum_id') {{ $message }} @enderror</span>
     
   
      
       
        <input type="submit" value="create" id="submit">

    </form>
@endsection