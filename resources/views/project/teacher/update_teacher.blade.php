@extends('project.dashboard.master')


@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/teacher/{{$teachers->id}}" method="post" enctype="multipart/form-data" class="form" style="margin-top:20px;">
        @csrf
        @method('put')
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name="name" value="{{$teachers->name}}">

        </div>
        <div class="inputs-labels">
        <label for="">SSN</label>
        <input type="number"  name="SSN" value="{{$teachers->SSN}}">
        </div>
        <div class="inputs-labels">

        <label for="">email</label>
        <input type="email" name="email" value="{{$teachers->email}}">
        </div>
        <div class="inputs-labels">
        <label for="">Degree</label>
        <input type="text" name="degree" value="{{$teachers->Degree}}">

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
       
       
        <div class="inputs-labels" id="file-container">

            <label for="">image</label>
            <label for="file-upload" class="file-input-container">
                <input type="file" id="file-upload" name="image" value="{{old('image')}}">
            </label>
        </div>
       
    <div class="inputs-labels">
    <label for="">about</label>
        <input type="text" name="about" value="{{$teachers->about}}">
    </div>
    <div class="inputs-labels">
    <label for="">department id</label>
        <select name="department_id" id="">
            @foreach($departments as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
        </div>
     


    
        <input type="submit" id="submit">
    </form>
@endsection