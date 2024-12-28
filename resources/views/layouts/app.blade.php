@extends('layouts.clean')

@section('childContent')
<div class="min-h-screen bg-gray-100">
    <header>My Header</header>
    {{-- content render here --}}
    @yield('content')
    <footer>My Footer</footer>
</div>
@endsection
