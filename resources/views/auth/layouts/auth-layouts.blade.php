@extends('layouts.clean')

@section('childContent')
    <div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4">
        <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">

            {{-- form header logo and title --}}
            @include('auth.layouts.auth-form-header')

            {{-- form content --}}
            @yield('formContent')

        
        </div>
    </div>
@endsection
