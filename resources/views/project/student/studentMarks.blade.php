@extends('project.dashboard.master')
@section('content')
<table id="myTable">
@csrf
        <tr>
            <th>name</th>
            <th>Father</th>
            <th>email</th>
            <!-- <th class="image">image</th> -->
            <th>str_date</th>
            <th>class</th>
            <th>semester</th>
            <th>department</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <select name="department" id="">
                @foreach ($departments as $d )
                   <option value="">{{$d->name}}</option>
                   <select name="" id="">
                       @endforeach
                       
                                              @foreach ($d->students as $s)
                                               <option value="">{{$s->name}}</option>
                                              @endforeach
                                          </select>
            </select>
    </table>
@endsection