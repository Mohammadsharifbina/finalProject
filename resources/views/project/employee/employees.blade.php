@extends('project.dashboard.master')
@section('sixth','active')
@section('route','employee')
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
        <th>{{__('nav.age')}}</th>
        <th>{{__('nav.gender')}}</th>
        <th>{{__('nav.job')}}</th>
        <!-- <td>image</td> -->
        <th>{{__('nav.date')}}</t>
        <th>{{__('nav.9')}}</th>
        <th>{{__('nav.edit')}}</th>
        <th>{{__('nav.delete')}}</th>
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
        <td><a href="employee/{{$c->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
        <td>
            <form action="/employee/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection