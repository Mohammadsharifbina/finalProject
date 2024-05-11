@php
$skipouter=false
@endphp
@foreach($students as $s)
    @if($skipouter)
        @continue
    @endif

<h1>student ->{{$s->name}}</h1>
    @php
        $innerloop=false
    @endphp
@foreach($teachers as $t)

@if($skipouter)
        @continue(2)
    @endif
<h1>teacher ->{{$t->name}}</h1>
@php
@$skipouter=true;
@$innerloop=true
@endphp
@endforeach
@endforeach