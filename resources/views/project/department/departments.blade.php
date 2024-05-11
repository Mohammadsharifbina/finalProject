

@extends('project.dashboard.master')
@section('route','department')
@section('first','active')
@section('content')
<div id="alert">
    <a href="@yield('route')/create" id="create">create</a>

    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
    @if(session('error'))
        <div class="alert">
            {{session('error')}}
    
        </div>
    @endif
    @if(session('update'))
        <div class="alert">
            {{session('update')}}
    
        </div>
    @endif
</div>
<table id="myTable">
        <tr>
            <th>name</th>
            <th>email</th>
           
            <th>code</th>
            <th>str_date</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($departments as $department)
        <tr>
            <td><a href="/sid/{{$department->id}}">{{$department->name}}</a></td>
            <td>{{$department->email}}</td>
            <td>{{$department->code}}</td>
            <td>{{$department->STR_date}}</td>
           
            <td><a href="/department/{{$department->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/department/{{$department->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
                </form>
            </td>
           
          
        </tr>
        @endforeach
    </table>
@endsection