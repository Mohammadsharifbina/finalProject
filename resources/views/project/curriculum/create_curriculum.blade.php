@extends('project.dashboard.master')

@section('seventh','active')
@section('route','curriculum')
@section('content')
<a href="/@yield('route')" id="back-button" >back</a>
<form action="/curriculum" method="post" class="form">
        @csrf
        @if(session('success'))
        <div class="alert">
            {{session('success')}}
    
        </div>
    @endif
        <div class="inputs-labels">

            <label for="">description</label>
            <textarea name="description" id="" cols="30" rows="10">
                </textarea>
        </div>
        <span class="error">@error('description') {{ $message }} @enderror</span>
        <input type="submit" value='create' id="submit">
    </form>
@endsection
