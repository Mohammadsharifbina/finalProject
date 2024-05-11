@extends('project.dashboard.master')

@section('fourth','active')
@section('route','class')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/class" method="post" id="form" class="form">
        @csrf
        @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
        <div class="inputs-labels">
        <label for="">name</label>
        <input type="text" name="name" value="{{ old('name')}}">
        </div>
        <span class="error">@error('name') {{ $message }} @enderror</span>
        

        <div class="inputs-labels">
        <label for="">no term</label>
        <input type="text" name="no_term" value="{{ old('no_term')}}">
        </div>
        <span class="error">@error('no_term') {{ $message }} @enderror</span>


        <div class="inputs-labels">
        <label for="">department</label>
        <select name="department" id="">
            @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
        </select>
        </div>
        <span class="error">@error('department_id') {{ $message }} @enderror</span>
       
       
        
        <input type="submit" value="create" id="submit">
    </form>
@endsection