
@extends('project.dashboard.master')
@section('eighth','active')
@section('route','commettee')
@section("content")

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
            <th>team</th>
           
            <th>department</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($commettees as $commettee)
        <tr>
            <td>{{$commettee->name}}</td>
            <td>{{$commettee->team}}</td>
            <td>{{$commettee->department->name}}</td>
            
           
            <td><a href="/commettee/{{$commettee->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/commettee/{{$commettee->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
                </form>
            </td>
            @foreach($commettee->teachers as $t)
            <tr style="background-color:yellow">
                <td colspan="5" >{{$t->name}}</td>
            </tr>
            @endforeach
          
        </tr>
        @endforeach
    </table>

@endsection
