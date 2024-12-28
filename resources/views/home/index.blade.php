<h1>Home index page</h1>
<p>name {{strtoupper($name)}}</p>
<p>{{$age}}</p>
<p>{{$year}}</p>
<script>
    const hobbies = @json($hobbies);
</script>
@verbatim
<p>{{name}}</p>
<p>{{age}}</p>
<p>{{year}}</p>
@if
@endverbatim

{{-- button from shared button file --}}
@include('shared.button', [
    'color' => 'red',
    'title' => 'Click me'
])
@php
    $cars = ['toyota', 'mazda', 'bmw'];
@endphp
<h1>Sub view inside loop</h1>
@foreach ($cars as $car )
    @include('shared.cars', ['car' => $car])
@endforeach

<p>using same </p>

@each('shared.cars',$cars ,'car' )

