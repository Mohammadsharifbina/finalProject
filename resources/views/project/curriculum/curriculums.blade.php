@extends('project.dashboard.master')
@section('seventh','active')
@section('route','curriculum')
@section('content')

<div id="alert">
    <div>

        <a href="@yield('route')/create" id="create">create</a>
    </div>

    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
  
</div>

<table  id="myTable">
    <tr>
        <th>id</th>
        <th>Description</th>
        <th>edit</th>
        <th>delete</th>
       
    </tr>
    @foreach($curriculums as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->description}}</td>
        <td><a href="/curriculum/{{$c->id}}/edit" class="edit">edit</a></td>
        <td>
            <form action="/curriculum/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection