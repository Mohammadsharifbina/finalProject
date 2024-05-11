@extends('project.dashboard.master')
@section('fifth','active')
@section('route','semester')
@section('content')

<div id="alert">
    <a href="@yield('route')/create" id="create">create</a>

    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
   
</div>
<table id="myTable">
    <tr>
        <th>name</th>
        <th>class</th>
        <th>curriculum</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    @foreach($semesters as $semester)
    <tr>
        <td>{{$semester->name}}</td>
        <td>{{$semester->cllass->name}}</td>
        <td>{{$semester->curriculum->description}}</td>
        <td><a  href="/semester/{{$semester->id}}/edit" class="edit" id="submit">edit</a></td>
        <td>
            <form action="/semester/{{$semester->id}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete" id="submit">
        </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection