

@extends('project.dashboard.master')
@section('route','department')
@section('first','active')
@section('content')
<div id="alert">
    <a href="@yield('route')/create" id="create">{{__('nav.create')}}</a>

    
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
            <th>{{__('nav.name')}}</th>
            <th>{{__('nav.email')}}</th>
           
            <th>code</th>
            <th>{{__('nav.date')}}</th>
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($departments as $department)
        <tr>
            <td><a href="/sid/{{$department->id}}">{{$department->name}}</a></td>
            <td>{{$department->email}}</td>
            <td>{{$department->code}}</td>
            <td>{{$department->STR_date}}</td>
           
            <td><a href="/department/{{$department->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
            <td>
                <form action="/department/{{$department->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
                </form>
            </td>
           
          
        </tr>
        @endforeach
    </table>
@endsection