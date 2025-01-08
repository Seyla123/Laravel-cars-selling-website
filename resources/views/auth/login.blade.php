<x-base-layout title="Login">
    {{-- auth layout form --}}
    <x-auth-layout title="Welcome Back!">
        {{-- form content --}}
        <form>
            <div class="space-y-6">
                <x-email-field />
                <x-password-field />

                {{-- check term condition --}}
                <x-check-term/>
            </div>
        </form>

        <div class="!mt-12">
            {{-- Login button --}}
            <x-button type="submit" title="Login" />
        </div>
        <p class="text-gray-800 text-sm mt-6 text-center">Don't have an account yet?
            <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">
                Register here
            </a>
        </p>
    </x-auth-layout>
</x-base-layout>
