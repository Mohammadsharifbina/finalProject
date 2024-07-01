@extends('project.dashboard.master')
@section('16', 'active')
@section('route', 'event')
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
        <th>{{__('nav.desc')}}</th>
        <th>{{__('nav.date')}}</th>
        <th>{{__('nav.edit')}}</th>
        <th>{{__('nav.delete')}}</th>
    </tr>
    @foreach ($event as $e)
        <tr>
            <td>{{$e->title}}</td>
            <td>
                <?php
        $d = $e->desc;
        $s = substr($d, 0, 50);
        $r = strlen($d) > 55;
        echo nl2br($s);
        if ($r) {
            echo "...";
        }
              ?>
            </td>
            <td>{{$e->created_at}}</td>
            <td><a href="/event/{{$e->id}}/edit" class="edit">edit</a></td>
            <td>
                <form action="/event/{{$e->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>

    @endforeach

</table>
@endsection