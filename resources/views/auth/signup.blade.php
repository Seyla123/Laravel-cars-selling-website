<x-base-layout title="Signup">
    {{-- auth layout form --}}
    <x-auth-layout title="Getting Started with Us">
                    {{-- form content --}}
                    <form>
                        <div class="space-y-6">
                          <div>
                            <label class="text-gray-800 text-sm mb-2 block">Email</label>
                            <input name="email" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-main-400" placeholder="Enter email" />
                          </div>
                          <div>
                            <label class="text-gray-800 text-sm mb-2 block">Password</label>
                            <input name="password" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-main-400" placeholder="Enter password" />
                          </div>
                          <div>
                            <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
                            <input name="cpassword" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-main-400" placeholder="Enter confirm password" />
                          </div>
                          {{-- check term condition --}}
                          <x-check-term/>
                        </div>
                    </form>

                    <div class="!mt-12">
                        {{-- signup button --}}
                        <x-button
                            type="submit"
                            title="Create an account"
                        />
                    </div>
                    <p class="text-gray-800 text-sm mt-6 text-center">Already have an account?
                        <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">
                            Login here
                        </a>
                    </p>
    </x-auth-layout>
</x-base-layout>


