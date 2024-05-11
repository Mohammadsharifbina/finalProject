@extends('project.dashboard.master')
@section('content')
<a href="/T_in_C" id="back-button" >back</a>
<form action="/TC" method="post" class='form'>
    @csrf
    <label for="">teacher</label>
    <select name="teacher" id="">
        @foreach($teachers as $teacher)
        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
        @endforeach
    </select>

    <label for="">committee</label>
    <select name="committee" id="">
        @foreach($committees as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="create">
</form>
@endsection