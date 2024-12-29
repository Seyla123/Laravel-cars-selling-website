<x-base-layout title="Signup">
    <div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4">
        <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
            {{-- form header logo and title --}}
            <div class="text-center mb-12 space-y-4">
                <a href="javascript:void(0)"><img src="{{ asset('/assets/images/seyla-logo.png') }}" alt="logo"
                        class='w-40 inline-block' />
                </a>
                <h1 class="text-base sm:text-xl bold">Getting Started with Us</h1>
            </div>

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
                  <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-main-600 focus:ring-main-300 border-gray-300 rounded" />
                    <label for="remember-me" class="text-gray-800 ml-3 block text-sm">
                      I accept the <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
                    </label>
                  </div>

                </div>

                <div class="!mt-12">
                  <button type="button" class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-main-600 hover:bg-main-700 focus:outline-none">
                    Create an account
                  </button>
                </div>
                <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
              </form>
        </div>
    </div>
</x-base-layout>


