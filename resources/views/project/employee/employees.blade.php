@extends('project.dashboard.master')
@section('sixth','active')
@section('route','employee')
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
        <td>name</td>
        <td>email</td>
        <td>age</td>
        <td>gender</td>
        <td>job</td>
        <!-- <td>image</td> -->
        <td>str date</td>
        <td>department</td>
        <td>edit</td>
        <td>delete</td>
    </tr>
    @foreach($employees as $c)
    <tr>
        <td>{{$c->name}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->age}}</td>
        <td>{{$c->gender}}</td>
        <td>{{$c->job}}</td>
        <!-- <td class="image"><img src="{{asset('employees/'.$c->image)}}" alt=""></td> -->
        <td>{{$c->str_date}}</td>
        <td>{{$c->department->name}}</td>
        <td><a href="employee/{{$c->id}}/edit" class="edit">edit</a></td>
        <td>
            <form action="/employee/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection