@extends('project.dashboard.master')
@section('ninth','active')
@section('route','book')
@section('content')
<div id="alert">
    <div>

        <a href="/@yield('route')/create" id="create">{{__('nav.create')}}</a>
    </div>

    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
 
</div>

<table id="myTable" >
        <tr>
            <th>{{__('nav.name')}}</th>
            <th>{{__('nav.author')}}</th>
            <th>{{__('nav.publisher')}}</th>
            <th>{{__('nav.credits')}}</th>
            <th>{{__('nav.13')}}</th>
            <th>{{__('nav.edit')}}</th>
            <th>{{__('nav.delete')}}</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->auther}}</td>
            <td>{{$book->publisher}}</td>
            <td>{{$book->No_credits}}</td>
           
            <td>{{$book->curriculum->description}}</td>

            <td><a href="/book/{{$book->id}}/edit" class=""><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="/book/{{$book->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="{{__('nav.delete')}}" id="Mit">
                    <!-- <i class="fas fa-trash-alt"></i> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

@endsection