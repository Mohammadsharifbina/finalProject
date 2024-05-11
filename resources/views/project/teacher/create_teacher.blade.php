@extends('project.dashboard.master')
@section('third','active')
@section('route','teacher')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/teacher" method="post" enctype="multipart/form-data" class="form" style="margin-top:20px;">
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
        <div class="inputs-labels">

        <label for="">SSN</label>
        <input type="number"  name="SSN" placeholder="SSN">

        </div>
        <div class="inputs-labels">
        <label for="">email</label>
        <input type="email" name="email" placeholder="Email" >
        </div>
        <div class="inputs-labels">
        <label for="">Degree</label>
        <input type="text" name="degree" placeholder="Degree">
        </div>
        <div class="inputs-labels " id="gender-container" style="">

            
               <label for="">gender</label>
               <div id="spans">

                    <div class="radio-buttons">

                        <label>Male  <input type="radio" name="gender" value="male"checked></label>
                       
                    </div>
                    <div class="radio-buttons">
                        <label >Female <input type="radio" value="female" name="gender"></label>
                        
                    </div>
          
               </div>
           
        </div>
       


        
        <div class="inputs-labels">
            
        <label for="">about</label>
        <input type="text" name="about" placeholder="More info">

        </div>
        <div class="inputs-labels">
             
        <label for="">department id</label>
       <select name="department_id" id="">
        @foreach($departments as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
        @endforeach
       </select>
        </div>

        <div class="inputs-labels" id="file-container">

            <label for="">image</label>
            <label for="file-upload" class="file-input-container">
                <input type="file" id="file-upload" name="image" value="{{old('image')}}">
            </label>
        </div>
        
    
        <input type="submit" id="submit">
    </form>
@endsection