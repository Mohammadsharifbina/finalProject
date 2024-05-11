@extends('project.dashboard.master')
@section('eleventh','active')
@section('route','research')
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
       <th>title</th>
       <th>content</th>
       <th>date</th>
       <th>teacher</th>
       <th>file</th>
       <th>edit</th>
       <th>delete</th>
    </tr>
    @foreach($researches as $r)
    <tr>
        <td><a href="/research/{{$r->id}}">{{$r->title}}</a></td>
        <!-- <td><iframe src="{{asset('researches/'.$r->file)}}" frameborder="0" id="pdf" onclick="largin()"></iframe></td> -->
        <td>{{$r->content}}</td>
        <td>{{$r->published_date}}</td>
        <td>{{$r->teacher->name}}</td>
        <td><a href=""><iframe src="{{asset('researches/'.$r->file)}}" frameborder="0"></iframe></a></td>
        <td><a id='submit' class='edit' href="/research/{{$r->id}}/edit" class="edit">edit</a></td>
        <td>
            <form action="/research/{{$r->id}}" method='post'>
                @csrf
                @method('delete')
                <input type="submit" value='delete' id='submit'>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<script>
    function larging(){
        var pdf=document.getElementById('pdf');
        pdf.style.width="200px";
        pdf.style.height="200px";
    }
</script>
@endsection