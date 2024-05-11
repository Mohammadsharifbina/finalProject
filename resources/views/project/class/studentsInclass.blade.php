@extends('project.dashboard.master')
@section('content')
<a href="/class" id="back-button" >back</a>
<table>
    <tr>
        <th>name</th>
        <th>father</th>
    </tr>
   
    @foreach($classes->students as $s)
    <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->Father}}</td>
    </tr>
   
    @endforeach
</table>
@endsection