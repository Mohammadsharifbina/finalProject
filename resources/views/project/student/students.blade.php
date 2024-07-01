@extends('project.dashboard.master')

@section('route','student')
@section('second','active')
@section('content')
<div id="alert" style="width:100%;">

    <a href="@yield('route')/create" id="create">{{__('nav.create')}}</a>
        @if(session('success'))
    <div class="alert">
        {{session('success')}}
        
        </div>
      @endif
        
</div>
<table id="myTable">
@csrf
        <tr>
            <th>{{__('nav.name')}}</th>
            <th>{{__('nav.Father name')}}</th>
            <th>{{__('nav.email')}}</th>
            <!-- <th class="image">image</th> -->
            <th>{{__('nav.email')}}</th>
          
            <th>department</th>
            <th>{{__('nav.result')}}</th>
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td><a href="/student/{{$student->id}}">{{$student->name}}</a></td>
            <td>{{$student->Father}}</td>
            <td>{{$student->email}}</td>
            <!-- <td class="image"><img src="{{asset('students/'.$student->image)}}" alt=""></td> -->
            <td>{{$student->str_date}}</td>
         
            <td>{{$student->department->name}}</td>
            <td><a href="/studentMarks/{{$student->id}}">{{__('nav.result')}}</a></td>
            <td><a href="/student/{{$student->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
            <td id="lastTd">
                <form style="display: flex; justify-content:center;align-items: center;" action="/student/{{$student->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>

    <script>
        
    </script>
@endsection
