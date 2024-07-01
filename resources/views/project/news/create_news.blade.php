@extends('project.dashboard.master')
@section('route','news')
@section('twelfth','active')
@section('content')
<a href="/NW" id="back-button" >back</a>

<form action="/NW" method="post" id="form" enctype="multipart/form-data" class="form">
  @csrf
  @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
  <div class="inputs-labels">
  <label for="">issue</label>
      <input type="text" name="issue" placeholder="issue" value="{{old('issue')}}">
  </div>
  <span class="error">@error('issue') {{ $message }} @enderror</span>
  <div class="inputs-labels">
  <label for="">description</label>
      <textarea name="description" id="" cols="10" rows="10" placeholder="description">{{old('description')}}</textarea>
  </div>
  <span class="error">@error('description') {{ $message }} @enderror</span>
  <div class="inputs-labels">
  <label for="">date</label>
      <input type="date" name="date" placeholder="date" max="<?php echo date('Y-m-d');?>" value="{{old('date')}}">
  </div>
  <div class="inputs-labels">
  <label for="">image</label>
      <input type="file" name="image" placeholder="date"  value="{{old('image')}}">
  </div>
 
  <div class="inputs-labels">
  <label for="">time</label>
      <input type="time" name="time" placeholder="time" value="{{old('time')}}">
  </div>


  <span class="error">@error('time') {{ $message }} @enderror</span>

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