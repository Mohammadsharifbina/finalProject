
@extends("project.dashboard.master")
@section('third','active')
@section('route','teacher')
@section('content')
<div id="alert">
    <div>

        <a href="@yield('route')/create" id="create">{{__('nav.create')}}</a>
    </div>

    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
  
</div>
<table id="myTable">
        <tr>
            

            <th>{{__('nav.name')}}</th>
            <th>{{__('nav.email')}}</th>
            
            <th>{{__('nav.gender')}}</th>
            
            <th>DM</th>
            <!-- <th>image</th> -->
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            
            <td>{{$teacher->gender}}</td>
            
            <td>{{$teacher->department->name}}</td>
            <!-- <td><img src="{{asset('teachers/'.$teacher->image)}}" alt=""></td> -->
            <td><a href="teacher/{{$teacher->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
            <td>
                <form action="/teacher/{{$teacher->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>
@endsection