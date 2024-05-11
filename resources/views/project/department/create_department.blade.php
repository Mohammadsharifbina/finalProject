
@extends('project.dashboard.master')
  
@section('route','department')
@section('first','active')

@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/department" method="post" class="form">
@if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
  @csrf

  <div class="inputs-labels">
  <label for="">name</label>
      <input type="text" name="name" placeholder="name">
  </div>
  <span class="error">@error('name') {{ $message }} @enderror</span>
  
  <div class="inputs-labels">
      <label for="">code</label>
      <input type="text" name="code" placeholder="Code">
    </div>
    <span class="error">@error('code') {{ $message }} @enderror</span>
    <div class="inputs-labels">
        <label for="">email</label>
        <input type="email" name="email" placeholder="email">
        
    </div>
    <span class="error">@error('email') {{ $message }} @enderror</span>
    <div class="inputs-labels">
        <label for="date">start date</label>
        <input type="date" name="STR_date" placeholder="Start date" id="date">
    </div>
    <span class="error">@error('STR_date') {{ $message }} @enderror</span>
     
    


   
      <input type="submit" value="create" id="submit">

</form>


@endsection