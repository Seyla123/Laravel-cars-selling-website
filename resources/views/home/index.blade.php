{{-- extends the layout --}}
@extends('layouts.app')

{{-- title of the page --}}
@section('title', 'Home Page')

{{-- start the content --}}
@section('content')
<x-button >
    submit button
</x-button>
<x-button >
    another button
</x-button>
<x-auth.form-title />
    <h1>Home Page</h1>
<x-button />
    <p>Home Page content goes here</p>
@endsection
{{-- end the content --}}
