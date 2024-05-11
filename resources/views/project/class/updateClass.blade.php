@extends('project.dashboard.master')
 
@section('fourth','active')
@section('route','class')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/class/{{$class->id}}" method="post" class="form">
        @csrf
        @method("put")
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name="name" value="{{$class->name}}">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>

        <div class="inputs-labels">

        <label for="">no_term</label>
       <input type="text" name="no_term" value="{{$class->No_term}}">
        </div>
        <span class="error">@error('no_term') {{ $message }} @enderror</span>

        <div class="inputs-labels">
        <label for="">department</label>
        <select name="department" id="">
            @foreach($departments as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
        </div>
       
      
      
        <input type="submit" value="update" id="submit">

    </form>
@endsection