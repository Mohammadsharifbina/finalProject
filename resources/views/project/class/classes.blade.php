@extends('project.dashboard.master')

@section('fourth','active')
@section('route','class')
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
        <tr>
            <th>{{__('nav.name')}}</th>
            <th>{{__('nav.no term')}}</th>
           
            <th>{{__('nav.9')}}</th>
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($classes as $class)
        <tr>
            <td><a href="/SIC/{{$class->id}}">{{$class->name}}</a></td>
            <td>{{$class->No_term}}</td>
            <td>{{$class->department->name}}</td>
            
           
            <td><a href="/class/{{$class->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
            <td>
                <form action="/class/{{$class->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
                </form>
            </td>
          
        </tr>
        @endforeach
    </table>
@endsection
