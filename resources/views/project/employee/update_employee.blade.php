
@extends("project.dashboard.master")
@section('sixth','active')
@section('route','employee')

@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/employee/{{$employee->id}}" method="post" enctype="multipart/form-data" class='form'>
  @csrf
  @method('put')

  <div class="inputs-labels">
  <label for="">name</label>
      <input type="text" name="name" value="{{$employee->name}}">
  </div>
  <span class="error">@error('name') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">email</label>
      <input type="email" name="email" value="{{$employee->email}}">
  
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
  <div class="inputs-labels">
  <label for="">job</label>
      <input type="text" name="job" value="{{$employee->job}}">
  </div>
  <span class="error">@error('job') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">age</label>
      <input type="number" name="age" value="{{$employee->age}}">
  </div>
  <span class="error">@error('age') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">address</label>
      <input type="text" name="address" value="{{$employee->address}}">
  </div>
  <span class="error">@error('address') {{ $message }} @enderror</span>

  <div class="inputs-labels">
  <label for="">image</label>
      <input type="file" name="image"  value="{{$employee->image}}">
      
  </div>
  <span class="error">@error('image') {{ $message }} @enderror</span>

  <div class="inputs-labels">
   
  <label for="">start date</label>
      <input type="date" name="str_date" id="" value="{{$employee->str_date}}">
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