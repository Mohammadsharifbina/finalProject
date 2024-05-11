@extends('project.dashboard.master')
  
@section('route','department')
@section('first','active')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/department/{{$departments->id}}" method="post"  class="form">
      @csrf
      @method('put')
      <div class="inputs-labels">
      <label for="">name</label>
          <input type="text" name="name" value="{{$departments->name}}">
      </div>
      <span class="error">@error('name') {{ $message }} @enderror</span>


      <div class="inputs-labels">
      <label for="">code</label>
          <input type="text" name="code"  value="{{$departments->code}}">
      </div>

      <span class="error">@error('code') {{ $message }} @enderror</span>

      <div class="inputs-labels">
      <label for="">email</label>
          <input type="email" name="email"  value="{{$departments->email}}">
      </div>
      <span class="error">@error('email') {{ $message }} @enderror</span>


      <div class="inputs-labels">
      <label for="date">start date</label>
          <input type="date" name="STR_date"  value="{{$departments->STR_date}}" id="date">
      </div>
  <span class="error">@error('STR_date') {{ $message }} @enderror</span>

    

       
          <input type="submit" value="Update" id="submit">
    
    </form>
@endsection
