@extends('project.dashboard.master')
@section('route','NW')
@section('twelfth','active')
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
        <th>issue</th>
        <th >{{__('nav.desc')}}</th>
        <th>{{__('nav.date')}}</th>
        <th>{{__('nav.time')}}</th>
        <th>{{__('nav.9')}}</th>
        <th>{{__('nav.edit')}}</th>
        <th>{{__('nav.delete')}}</th>
    </tr>
   @foreach($news as $n)
   <tr>
    <td>{{$n->issue}}</td>
    <td id="sesc">
    <?php
      $d = $n->Description;
      $s = substr($d, 0, 20);
      $r = strlen($d) > 20;
      echo nl2br($s);
      if ($r) {
      echo "...";
      }
        ?>
</td>
    <td>{{$n->date}}</td>
    <td>{{$n->time}}</td>
    <td>{{$n->department->name}}</td>
    <td><a href="/NW/{{$n->id}}/edit" class="edit">{{__('nav.edit')}}</a></td>
    <td><form action="/NW/{{$n->id}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="{{__('nav.delete')}}">
    </form></td>
   </tr>
   @endforeach
</table>
@endsection