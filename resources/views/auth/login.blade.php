<x-base-layout title="Login">
    {{-- auth layout form --}}
    <x-auth-layout title="Welcome Back!">
        {{-- form content --}}
        <form>
            <div class="space-y-6">
                <x-email-field />
                <x-password-field />
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                        class="h-4 w-4 shrink-0 text-main-600 focus:ring-main-300 border-gray-300 rounded" />
                    <label for="remember-me" class="text-gray-800 ml-3 block text-sm">
                        I accept the <a href="javascript:void(0);"
                            class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
                    </label>
                </div>

            </div>
        </form>

        <div class="!mt-12">
            {{-- Login button --}}
            <x-button
                type="submit"
                title="Login"
            />
        </div>
        <p class="text-gray-800 text-sm mt-6 text-center">Don't have an account yet?
            <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">
                Signup here
            </a>
        </p>
    </x-auth-layout>
</x-base-layout>
