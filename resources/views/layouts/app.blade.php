@extends('layouts.clean')

@section('childContent')
<div>

    {{-- header --}}
    @include('layouts.partials.header')

    {{-- content render here --}}
    @yield('content')

    {{-- footer --}}
    @include('layouts.partials.footer')

</div>
@endsection
