@extends('project.dashboard.master')
@section('ninth','active')
@section('route','book')
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
            <th>name</th>
            <th>auther</th>
            <th>publisher</th>
            <th>credits</th>
            <th>teacher</th>
            <th>curriculum</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->auther}}</td>
            <td>{{$book->publisher}}</td>
            <td>{{$book->No_credits}}</td>
            <td>{{$book->teacher->name}}</td>
            <td>{{$book->curriculum->description}}</td>
            <td><a href="/book/{{$book->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/book/{{$book->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection