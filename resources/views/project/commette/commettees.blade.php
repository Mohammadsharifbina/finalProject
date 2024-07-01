
@extends('project.dashboard.master')
@section('eighth','active')
@section('route','commettee')
@section("content")

<div id="alert">
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
            <th>{{__('nav.team')}}</th>
           
            <th>{{__('nav.9')}}</th>
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($commettees as $commettee)
        <tr>
            <td>{{$commettee->name}}</td>
            <td>{{$commettee->team}}</td>
            <td>{{$commettee->department->name}}</td>
            
           
            <td><a href="/commettee/{{$commettee->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
            <td>
                <form action="/commettee/{{$commettee->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="{{__('nav.delete')}}">
                </form>
            </td>
         
          
        </tr>
        @endforeach
    </table>

@endsection
