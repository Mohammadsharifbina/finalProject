
@extends('project.dashboard.master')
  
@section('sixth','active')
@section('route','employee')
 

@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/employee" method="post" id="form" enctype="multipart/form-data" class="form">
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
  <span class="error">@error('name') {{ $message }} @enderror</span>
  <div class="inputs-labels">
  <label for="">email</label>
      <input type="email" name="email" placeholder="Email">
  </div>
  <span class="error">@error('email') {{ $message }} @enderror</span>

  <div class="inputs-labels " id="gender-container" style=""> 
<label for="">gender</label>
<div id="spans">

     <div class="radio-buttons">

         <label for="gender">male  <input type="radio" value="male" name="gender" checked></label>
        
     </div>
     <div class="radio-buttons">
         <label for="gender">female <input type="radio" value="female" name="gender"></label>
         
     </div>

</div>

</div>
<span class="error">@error('gender') {{ $message }} @enderror</span>


  <div class="inputs-labels">
  <label for="">job</label>
      <input type="text" name="job" placeholder="Job">
  </div>
  <span class="error">@error('job') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">age</label>
      <input type="number" name="age" placeholder="Age">
  </div>
  <span class="error">@error('age') {{ $message }} @enderror</span>

  <div class="inputs-labels">

  <label for="">address</label>
      <input type="text" name="address" placeholder="Address">
  </div>
  <span class="error">@error('address') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">image</label>
      <input type="file" name="image" placeholder="image">
  </div>
  <span class="error">@error('image') {{ $message }} @enderror</span>

  <div class="inputs-labels">

  <label for="">start date</label>
      <input type="date" name="str_date" id="" placeholder="date" max="<?php echo date('Y-m-d');?>">
  </div>
  <span class="error">@error('str_date') {{ $message }} @enderror</span>

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