@extends('project.dashboard.master')
@section('content')

<form action="/marks/{{$marks->id}}" method="post" class="form">
    @csrf
    @method('put')
    <div class="inputs-labels">
        <label for="">marks</label>
        <input type="number" name="marks" value="{{$marks}}">
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
           
                <option value="{{$books->id}}">{{$books->name}}</option>
           
        </select>
    </div>





    <input type="submit" value="update" id="submit">
</form>
</body>

</html>
@endsection