@extends('project.dashboard.master')
   
@section('route','student')
@section('second','active')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
    <form action="/student/{{$students->id}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method("put")
        <div class="inputs-labels">
            
            <label for="">name</label>
            <input type="text" name="name" value="{{$students->name}}">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>
        <div class="inputs-labels">
            
            <label for="">Father</label>
            <input type="text" name="Father" value="{{$students->Father}}">
        </div>
        <span class="error">@error('Father') {{ $message }} @enderror</span>
        <div class="inputs-labels">
        <label for="">email</label>
        <input type="email" name="email" value="{{$students->email}}">
        </div>
        <span class="error">@error('email') {{ $message }} @enderror</span>
        <div class="inputs-labels">
        <label for="">image</label>
        <input type="file" name="image" value="{{$students->image}}">
        </div>
        <div class="inputs-labels">
        <label for="">age</label>
        <input type="number" name="age" value="{{$students->age}}">
        </div>
        <span class="error">@error('age') {{ $message }} @enderror</span>
        <div class="inputs-labels " id="gender-container" style="">

            
<label for="">gender</label>
<div id="spans">

     <div class="radio-buttons">

         <span>Male</span>
         <input type="radio" name="gender" checked value="{{$students->gender}}">
     </div>
     <div class="radio-buttons">
         <span >Female</span>
         <input type="radio" name="gender">
     </div>

</div>
</div>
        <div class="inputs-labels">
        <label for="">str_date</label>
        <input type="date" name="str_date" max="<?php echo date('Y-m-d');?>" value="{{$students->str_date}}">
    </div>
    <span class="error">@error('str_date') {{ $message }} @enderror</span>
    <div class="inputs-labels">
        <label for="">class</label>
        <select name="cllass_id" id="">
            <option id="selected" value="{{$students->cllass_id}}" >{{$students->cllass->name}}</option>
            @foreach($classes as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="inputs-labels">
            <label for="">department </label>
            <select name="department_id" id="">
            <option id="selected" value="{{$students->department_id}}" >{{$students->department->name}}</option>
            @foreach($departments as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="inputs-labels">
        <label for="">semester</label>
        <select name="semester_id" id="">
            <option id="selected" value="{{$students->semester_id}}">{{$students->semester->name}}</option>
            @foreach($semesters as $s)
            <option value="{{$s->id}}">{{$s->name}}</option>
            @endforeach
        </select>
        </div>
       
     
       
     

        
        
  
        <input type="submit" id="submit" value="update">
    </form>
@endsection