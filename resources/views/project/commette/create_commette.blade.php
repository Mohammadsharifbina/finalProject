@extends('project.dashboard.master')
@section('eighth','active')
@section('route','commettee')
       
    
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/commettee" method="post" class="form">
        @csrf
        @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
  @csrf
        <div class="inputs-labels">

            <label for="">name</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>
        <div class="inputs-labels">
        <label for="">team</label>
        <textarea name="team" id="" cols="10" rows="5">{{old('name')}}</textarea>
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

     
      
    
        <input type="submit" value="create" id="submit">

    </form>
@endsection