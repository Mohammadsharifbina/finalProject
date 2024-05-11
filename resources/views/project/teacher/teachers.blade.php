
@extends("project.dashboard.master")
@section('third','active')
@section('route','teacher')
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
            <th>email</th>
            
            <th>gender</th>
            
            <th>DM</th>
            <!-- <th>image</th> -->
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            
            <td>{{$teacher->gender}}</td>
            
            <td>{{$teacher->department->name}}</td>
            <!-- <td><img src="{{asset('teachers/'.$teacher->image)}}" alt=""></td> -->
            <td><a href="teacher/{{$teacher->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/teacher/{{$teacher->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>
@endsection