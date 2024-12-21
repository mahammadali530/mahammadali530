<h1>Home: page </h1>
{{-- <a href="/post">post</a> --}}

@php
 $name = ['mahammad','ahesan','vajir'];    
@endphp
<ul>
    @foreach ($name as $n )
    {{-- even --}}
    @if($loop->first) 
    <li style="color:red">{{ $n }}</li>
    {{-- odd --}}
       @elseif($loop->last)
       <li style="color:green">{{ $n }}</li>
       @else
        <li>{{ $n }}</li>
        
       @endif
    @endforeach
</ul>