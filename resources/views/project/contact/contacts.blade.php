@extends("project.dashboard.master")
@section('fourteen', 'active')
@section('route', 'contacts')
<style>
    #container {
        width: 60%;
        min-height: 5em;
        background-color: white;
        margin: auto;
        position: relative;
        /* padding: 0.3em; */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-bottom: 1em;
        
    }
    .user-date {
        padding: 0 1em;
        /* position: absolute; */
        bottom: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        background-color: #0A1D56;
        color: white;

    }
    .user-date a{
        color: white;
        text-decoration: none;

    }
    #container p{
        padding: 1em;
    }
    #container #user{
        padding: 0.5em;
    }
</style>
@section('content')

@foreach ($contacts as $c)

    <div id="container">
    <span id="user">{{$c->user->name}}</span>
        <p class="message">{{$c->comment}}</p>
        <div class="user-date">
           
            <span>{{__('nav.date')}}</span>
            
            <a href="mailto:{{$c->user->email}}">{{__('nav.replay')}}</a>
        </div>
       
    </div>
@endforeach 
<!--   

    

@endsection