<link rel="stylesheet" href="{{asset('fonts/css/all.css')}}">
@extends('project.dashboard.master')
<style>
    .container {
        width: 100%;
        height: auto;
        /* background-color: green; */
        margin-bottom: 1em;
        border: 1px solid gray;
    }

    .container .first {
        width: 100%;
        /* display: flex; */
        flex-wrap: wrap;
        justify-content: space-between;
        border: 1px solid gray;
        padding-top: 2em;
        position: relative;

    }


    table,
    td,
    tr {
        border: 1px solid blue;
    }

    tr {
        margin-bottom: 1em;

    }

    h2 {
        text-align: center;
        text-transform: capitalize;
        /* color: #723424; */

    }

    .left {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        padding: 0 1em;

    }

    .left>div {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border: 1px solid red;
        margin-bottom: 0.2em;
        padding: 0 0.2em;
    }

    .marks {
        display: flex;
        /* justify-content: space-between; */
    }

    #parentage {

        /* width: 100%; */
        text-align: center;
        font-size: 1em;
        margin-bottom: 1em;

    }

    #parentage span {
        background-color: lightblue;
        padding: 1em;
        border-radius: 25%;

    }

    table {
        /* width: 60%; */
        table-layout: fixed;

    }


    #student-info {
        width: 100%;
        height: 23vh;
        margin-bottom: 1em;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        /* background-color: rebeccapurple; */
    }

    #student-info #table {
        border: none
        width: 10em;
        margin-right: 1em;
    }

    #table tr:first-child {

        border-radius: 30px;
    }

    table,
    td,
    th {
        border: none;
    }

    #student-info table tr td img {
        width: 100%;
      
    }

    .db {
        border: none;
        text-align: center;
        padding-top: 1em;
    }

    #br {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1em;

    }
    .per{
       height: 100%;
       display: flex;
       align-items: flex-end;
        /* background-color: red; */
    }
    .per .general{
        height: 100%;
        /* background-color: brown; */
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        width: 3em;
        margin-right: 1em;
        
    }
    .per .general .fr, .per .general .sc, .per .general .tr, .per .general .frt, .per .general .ff, .per .general .st, .per .general .sn{
        display: inline-block;
        height: {{$results1}}%;
        background-color: blue;
        font-size:0.8em;
        padding-top:.5em;
        text-align:center;
        color:white;
    }
    .per .general .sc{
        height: {{$secondSemester}}%;
    }
    .per .general .tr{
        height: {{$thirdSemester}}%;
        
    }
    .per .general .frt{
        height: {{$fourthSemester}}%;

    }
    .per .general .ff{
        height: {{$fifthSemester}}%;

    }
    .per .general .st{
        height: {{$sixthSemester}}%;

    }
    .per .general .sn{
        height: {{$seventhSemester}}%;

    }
    .semester{
        height: 110%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
@section('content')
<div id="br">

    <a href="/student" id="back-button">back</a>
    <a href="/domarks/{{$students->id}}" id="create">received marks </a>
</div>
<div id="student-info">
   

    <div class="per">
        <div class="semester">
            1
            <span class="general">
                <span class="fr">
                    {{$results1}}%
        </span>
    
            </span>

        </div>
        <div class="semester">
                <span>2</span>
            <span class="general">
                <span class="sc">
                    {{$secondSemester}}%
                <span/>
    
            </span>

        </div>
        <div class="semester">
                <span>3</span>
            <span class="general">
                <span class="tr">
                    {{$thirdSemester}}%
                <span/>
    
            </span>

        </div>
        <div class="semester">
                <span>4</span>
            <span class="general">
                <span class="frt">
                    {{$fourthSemester}}%
                <span/>
    
            </span>

        </div>
        <div class="semester">
                <span>5</span>
            <span class="general">
                <span class="ff">
                    {{$fifthSemester}}%
                <span/>
    
            </span>

        </div>
        <div class="semester">
                <span>6</span>
            <span class="general">
                <span class="st">
                    {{$sixthSemester}}%
                <span/>
    
            </span>

        </div>
        <div class="semester">
                <span>7</span>
            <span class="general">
                <span class="sn">
                    {{$seventhSemester}}%
                <span/>
    
            </span>

        </div>
        
    </div>

</div>
<div class="container">



    <h2>first semester</h>
        <div class="">
            <table id="myTable">

                <tr>

                    <th>book</th>
                    <th>marks</th>
                    <th>total</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                @foreach ($marks1 as $r)
                    <tr>
                        <td> <span>{{$r->book->name}}</span></td>
                        <td> <span id="credit">{{$r->Marks}}</span> </td>
                        <td> <span id="marks">{{$r->total}}</span></td>
                        <td><a href="/marks/{{$r->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>
                        <td>

                            <a href="/deleteMarks/{{$r->id}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td style="text-align:center;background:grey;"> <span>{{$results1}}%</span></td>
                    <td></td>

                    <td></td>

                </tr>
            </table>
        </div>


</div>

<div class="container">

    <h2>Second semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks2 as $r2)
                <tr>
                    <td> <span>{{$r2->book->name}}</span></td>
                    <td> <span id="credit">{{$r2->Marks}}</span> </td>
                    <td> <span id="marks">{{$r2->total}}</span></td>
                    <td><a href="/marks/{{$r2->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r2->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$secondSemester}}%</span></td>
                <td></td>
                <td style="text-align:center;background:grey;">{{$firstClassPercentage}}</td>
                <td></td>

            </tr>
        </table>
    </div>


</div>

<div class="container">

    <h2>third semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks3 as $r3)
                <tr>
                    <td> <span>{{$r3->book->name}}</span></td>
                    <td> <span id="credit">{{$r3->Marks}}</span> </td>
                    <td> <span id="marks">{{$r3->total}}</span></td>
                    <td><a href="/marks/{{$r3->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r3->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$thirdSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>


</div>

<div class="container">
    <h2>fourth semester</h2>
    <div class="">
        <h3>first semester</h3>
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks4 as $r4)
                <tr>
                    <td> <span>{{$r4->book->name}}</span></td>
                    <td> <span id="credit">{{$r4->Marks}}</span> </td>
                    <td> <span id="marks">{{$r4->total}}</span></td>
                    <td><a href="/marks/{{$r4->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r4->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$fourthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>fifth semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks5 as $r5)
                <tr>
                    <td> <span>{{$r5->book->name}}</span></td>
                    <td> <span id="credit">{{$r5->Marks}}</span> </td>
                    <td> <span id="marks">{{$r5->total}}</span></td>
                    <td><a href="/marks/{{$r5->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r5->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$fifthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>sixth semester</h2>
    <div class="">
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks6 as $r6)
                <tr>
                    <td> <span>{{$r6->book->name}}</span></td>
                    <td> <span id="credit">{{$r6->Marks}}</span> </td>
                    <td> <span id="marks">{{$r6->total}}</span></td>
                    <td><a href="/marks/{{$r6->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r6->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$sixthSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>

<div class="container">
    <h2>seventh semester</h2>
    <div class="">
        <h3>first semester</h3>
        <table id="myTable">

            <tr>

                <th>book</th>
                <th>marks</th>
                <th>total</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($marks7 as $r7)
                <tr>
                    <td> <span>{{$r7->book->name}}</span></td>
                    <td> <span id="credit">{{$r7->Marks}}</span> </td>
                    <td> <span id="marks">{{$r7->total}}</span></td>
                    <td><a href="/marks/{{$r7->id}}/edit" class=" "><i class="fas fa-edit"></i></a></td>

                    <td>
                        <a href="/deleteMarks/{{$r7->id}}"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align:center;background:grey;"> <span>{{$seventhSemester}}%</span></td>
                <td></td>

            </tr>
        </table>
    </div>
</div>


@endsection