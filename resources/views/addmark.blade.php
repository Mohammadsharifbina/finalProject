@extends('project.dashboard.master')
@section('content')
<a href="/studentMarks/{{$students->id}}" id="back-button" >back</a>
<div id="profile-image">

    <img src="{{asset('/students/'.$students->image)}}" alt="" >
    <span style="font-size:1.5em;text-transform:uppercase;"> {{$students->name}}</span>
</div>
<form action="/marks" method="post" class="form">
    @csrf
    @if(session('success'))
    <div class="alert">
        {{session('success')}}

    </div>
    @endif
    <div class="inputs-labels">
        <label for="">marks</label>
        <input type="number" name="marks" placeholder="marks">
    </div>
    <span class="error">@error('marks') {{ $message }} @enderror</span>
    <div class="inputs-labels">
        <!-- <label for="">student</label> -->

        <select name="student" id="" hidden>
            <option value="{{$students->id}}"  >{{$students->name}}</option>
            
        </select>
        
    </div>
    <div class="inputs-labels">
        <label for="">book</label>
        <select name="book" id="">
            @foreach ($books as $b)
                <option value="{{$b->id}}">{{$b->name}}</option>
            @endforeach
        </select>
    </div>





    <input type="submit" id="submit">
</form>
</body>

</html>
@endsection