<x-base-layout title="Login">
    {{-- auth layout form --}}
    <x-auth-layout title="Welcome Back!">
        {{-- form content --}}
        <form method="POST">
            @csrf
            <div class="space-y-6">
                {{-- group fields --}}
                <x-input-field name="email" placeholder="Enter email" label="Email" labelClass="font-medium" />
                <x-input-field name="password" placeholder="Enter password" label="Password" labelClass="font-medium" />
                {{-- check term condition --}}
                <x-check-term/>
            </div>
        </form>

        <div class="!mt-8">
            {{-- Login button --}}
            <x-button type="submit" title="Login" />
        </div>
        <p class="text-gray-800 text-sm mt-6 text-center">Don't have an account yet?
            <a href="{{route('register')}}" class="text-blue-600  hover:underline ml-1">
                Register here
            </a>
        </p>
    </x-auth-layout>
</x-base-layout>
