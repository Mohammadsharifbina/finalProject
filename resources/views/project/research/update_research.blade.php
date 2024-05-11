@extends('project.dashboard.master')
@section('eleventh','active')
@section('route','research')
 
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/research/{{$researches->id}}" method="post" class="form">
        @csrf
        @method('put')
  @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
    <div class="inputs-labels">

        <label for="">issue</label>
        <input type="text" name="issue" value="{{$researches->issue}}">
    </div>
    <span class="error">@error('issue') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="">team</label>
        <textarea name="team" id="" cols="30" rows="10">{{$researches->team}}</textarea>
    </div>
    <span class="error">@error('team') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="">date</label>
        <input type="date" name="date" value="{{$researches->date}}">
    </div>
    <span class="error">@error('date') {{ $message }} @enderror</span>

    <div class="inputs-labels">

        <label for="">teacher</label>
        <select name="teacher_id" id="">
            @foreach($teachers as $t)
            <option value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    </div>
    <span class="error">@error('teacher_id') {{ $message }} @enderror</span>
    
    <div class="inputs-labels">

        <label for="">department</label>
        <select name="department_id" id="">
            @foreach($departments as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
    </div>
    <span class="error">@error('department_id') {{ $message }} @enderror</span>
        <input type="submit" value="create" id="submit">

    </form>
@endsection