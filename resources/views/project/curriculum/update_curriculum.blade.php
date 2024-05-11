@extends('project.dashboard.master')
@section('seventh','active')
@section('route','curriculum')

<!-- <a href="/curriculum"  style="background-color:blue;text-decoration:none;padding:5px 10px;color:white;">Back</a> -->

<a href="/@yield('route')" id="back-button" >back</a>
<form action="/curriculum/{{$curriculum->id}}" method="post" class="form">
        @csrf
        @method('put')
        <div class="inputs-labels">
        <label for="">description</label>
        <textarea name="description" id="" cols="30" rows="10">
         {{$curriculum->description}}
        </textarea>
        </div>
        <input type="submit" value='update' id="submit">
    </form>
</body>
</html>