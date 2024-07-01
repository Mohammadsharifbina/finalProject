@extends('project.dashboard.master')
@section('route','NW')
@section('twelfth','active')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>

<form action="/NW/{{$news->id}}" method="post" id="form" enctype="multipart/form-data" class="form">
  @csrf
  @method('put')
  <div class="inputs-labels">
  <label for="">issue</label>
      <input type="text" name="issue" value="{{$news->issue}}">
  </div>
  <div class="inputs-labels">
  <label for="">description</label>
      <textarea name="description" id="" cols="10" rows="10" >{{$news->Description}}</textarea>
  </div>

  <div class="inputs-labels">
  <label for="">date</label>
      <input type="date" name="date" value="{{$news->date}}">
  </div>

  <div class="inputs-labels">
  <label for="">image</label>
      <input type="file" name="image" placeholder="date"  value="{{old('image')}}">
  </div>
  <div class="inputs-labels">
  <label for="">time</label>
      <input type="time" name="time" value="{{$news->time}}">
  </div>


  

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