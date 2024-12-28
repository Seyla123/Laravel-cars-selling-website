@extends('layouts.clean')

@section('childContent')
<div class="min-h-screen bg-gray-100">

    {{-- header --}}
    @include('layouts.partials.header')

    {{-- content render here --}}
    @yield('content')

    {{-- footer --}}
    @include('layouts.partials.footer')

</div>
@endsection
