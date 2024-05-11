@extends('project.dashboard.master')
@section('route','news')
@section('twelfth','active')
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
<table id="myTable">
    <tr>
        <th>issue</th>
        <th>description</th>
        <th>date</th>
        <th>time</th>
        <th>department</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
   @foreach($news as $n)
   <tr>
    <td>{{$n->issue}}</td>
    <td>{{$n->Desription}}</td>
    <td>{{$n->date}}</td>
    <td>{{$n->time}}</td>
    <td>{{$n->department->name}}</td>
    <td><a href="/news/{{$n->id}}/edit" class="edit">edit</a></td>
    <td><form action="/news/{{$n->id}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete">
    </form></td>
   </tr>
   @endforeach
</table>
@endsection