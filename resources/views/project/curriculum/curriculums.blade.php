@extends('project.dashboard.master')
@section('seventh','active')
@section('route','curriculum')
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

<table  id="myTable">
    <tr>
        <th>id</th>
        <th>{{__('nav.desc')}}</th>
        <th>{{__('nav.edit')}}</th>
        <th>{{__('nav.delete')}}</th>
       
    </tr>
    @foreach($curriculums as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->description}}</td>
        <td><a href="/curriculum/{{$c->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
        <td>
            <form action="/curriculum/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection