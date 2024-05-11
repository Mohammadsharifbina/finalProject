@extends('project.dashboard.master')
@section('content')

<form action="/T_in_C" method="post">
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