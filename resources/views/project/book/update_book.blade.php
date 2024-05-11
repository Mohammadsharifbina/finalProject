@extends('project.dashboard.master')
  
@section('ninth','active')
@section('route','book')

@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/book/{{$books->id}}" method="post" class="form">
        @csrf
        @method('put')

        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name="name" value="{{$books->name}}">
        </div>
        <div class="inputs-labels">
        <label for="">author</label>
        <input type="text" name="author" value="{{$books->auther}}">

        </div>
        <div class="inputs-labels">
        <label for="">publisher</label>
        <input type="text" name="publisher" value="{{$books->publisher}}">

        </div>
        <div class="inputs-labels">
        <label for="">credits</label>
        <input type="number" name="no_credits" value="{{$books->No_credits}}">
        </div>
        <div class="inputs-labels">

        <label for="">teacher</label>
        <select name="teacher" id="">
            @foreach($teachers as $teacher)
            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
            @endforeach
        </select>

        </div>
        <div class="inputs-labels">

        <label for="">curriculum</label>
        <select name="curriculum" id="">
            @foreach($curriculums as $c)
            <option value="{{$c->id}}">{{$c->description}}</option>
            @endforeach
        </select>
        </div>
      

        
       
      

        
        <input type="submit" value="create" id="submit">

    </form>
@endsection