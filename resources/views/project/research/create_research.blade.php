@extends('project.dashboard.master')
@section('eleventh','active')
@section('route','research')
    
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/research" method="post" class="form" enctype="multipart/form-data">
        @csrf
        
  @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
        <div class="inputs-labels">
        <label for="">title</label>
        <input type="text" name="title" placeholder="title" value="{{old('title')}}">
        </div>
        <span class="error">@error('title') {{ $message }} @enderror</span>
        
        <div class="inputs-labels" id="file-container">
            
            
            <label for="">file</label>
            <label for="file-upload" class="file-input-container">
                <input type="file" id="file-upload" name="file" value="{{old('file')}}">
            </label>
        </div>
        
        <span class="error">@error('file') {{ $message }} @enderror</span>
        <div class="inputs-labels">
            <label for="">content</label>
            <textarea name="content" id="" cols="10" rows="5" placeholder="content">{{old('content')}}</textarea>
        </div>
        <span class="error">@error('content') {{ $message }} @enderror</span>
        <div class="inputs-labels">
            <label for="">published date</label>
            <input type="date" name="date" value="{{old('date')}}">
        </div>
        <span class="error">@error('date') {{ $message }} @enderror</span>
        <div class="inputs-labels">
            <label for="">assetType</label>
            <input type="text" name="assetType" value="{{old('assetType')}}">
        </div>
        <span class="error">@error('assetType') {{ $message }} @enderror</span>
        <div class="inputs-labels">  <label for="">teacher</label>
        <select name="teacher_id" id="">
            @foreach($teachers as $t)
            <option value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select></div>
        <span class="error">@error('teacher_id') {{ $message }} @enderror</span>
       
       
      
       
       
       
        <input type="submit" value="create" id="submit">

    </form>
@endsection