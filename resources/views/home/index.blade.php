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

