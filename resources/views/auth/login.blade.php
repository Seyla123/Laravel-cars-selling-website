@extends('auth.layouts.auth-layouts',[
    'title' => 'Signup Page',
    'authFormTitle' => 'Getting Started with Us'
])

@section('content')
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
@endsection

