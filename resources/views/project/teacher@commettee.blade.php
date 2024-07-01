@extends('project.dashboard.master')
@section('thirteen','active')
@section('route','teacher')
@section('content')
<div class="top-section">

<a href="/TC/create" id="create">Create</a>
</div>
<table>
    <tr>
        <th>name</th>
       
        
       
    </tr>
   
    @foreach($Teachers as $T)
    <tr>
        <td>{{$T->name}}</td>
       
      
     
        @foreach($T->teachers as $c)
        <tr style="background-color:green;color:white;">
            <td>
                {{$c->name}}
                
                
            </td>
            <td>{{$c->email}}</td>
            <td>{{$c->Degree}}</td>
            <td>
                <form action="/DTC/{{$T->id}}/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
            </td>
        </tr>
        @endforeach
    </tr>
    
    @endforeach
    
</table>
@endsection
