@extends('project.dashboard.master')

@section('route','student')
@section('second','active')
@section('content')
<div id="alert" style="width:100%;">

    <a href="@yield('route')/create" id="create">create</a>
        @if(session('success'))
    <div class="alert">
        {{session('success')}}
        
        </div>
      @endif
        
</div>
<table id="myTable">
@csrf
        <tr>
            <th>name</th>
            <th>Father</th>
            <th>email</th>
            <!-- <th class="image">image</th> -->
            <th>str_date</th>
            <th>class</th>
            <th>semester</th>
            <th>department</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td><a href="/student/{{$student->id}}">{{$student->name}}</a></td>
            <td>{{$student->Father}}</td>
            <td>{{$student->email}}</td>
            <!-- <td class="image"><img src="{{asset('students/'.$student->image)}}" alt=""></td> -->
            <td>{{$student->str_date}}</td>
            <td>{{$student->cllass->name}}</td>
            <td>{{$student->semester->name}}</td>
            <td>{{$student->department->name}}</td>
            <td><a href="/student/{{$student->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/student/{{$student->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>

    <script>
        
    </script>
@endsection
