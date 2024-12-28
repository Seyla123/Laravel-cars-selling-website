{{-- extends the layout --}}
@extends('layouts.app')

{{-- title of the page --}}
@section('title', 'Home Page')

{{-- start the content --}}
@section('content')
<x-card>
    <x-slot name="title">
        <h1>Card Title</h1>
    </x-slot>
    this card component
    <x-slot name="footer">
       <h1> card footer</h1>
    </x-slot>
    
</x-card>
<x-button >
    submit button
</x-button>
<x-button >
    another button
</x-button>
    <h1>Home Page</h1>
<x-button />
    <p>Home Page content goes here</p>
@endsection
{{-- end the content --}}
