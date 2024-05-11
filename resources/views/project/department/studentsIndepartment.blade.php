

@extends('project.dashboard.master')
@section('route','department')
@section('first','active')
@section('content')
<div id="alert">
<a href="/@yield('route')" id="back-button" >back</a>
    
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
 
</div>
<table >
       
<h1 style="text-align:center;">{{$departments->name}}</h1>
<tr>
    <th>name</th>
    <th>Father</th>
    <th>image</th>
</tr>
@foreach($departments->students as $s)
<tr>
    <td>{{$s->name}}</td>
    <td>{{$s->Father}}</td>
  <td class="image"><img src="{{asset('students/'.$s->image)}}" alt=""></td>

</tr>
@endforeach

        
    </table>
@endsection