@extends('project.dashboard.master')
@section('eighth','active')
@section('route','commettee')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/commettee/{{$commettees->id}}" method="post" class="form">
        @csrf
        @method('put')
        <div class="inputs-labels">

            <label for="">name</label>
            <input type="text" name="name"  value="{{$commettees->name}}">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>

        <div class="inputs-labels">
        <label for="">team</label>
        <textarea name="team" id="" cols="10" rows="5">{{$commettees->team}}</textarea>
        </div>
        <span class="error">@error('team') {{ $message }} @enderror</span>

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