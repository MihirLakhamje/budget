<x-layout>
  <x-slot:metaDescription>Log in to SpendLog and start managing your finances today.</x-slot:metaDescription>


  <form class="max-w-sm mx-auto mt-24" action="{{ route('login.store') }}" method="POST">
    <h1 class="text-2xl font-bold mb-5 dark:text-gray-200">Welcome, back!</h1>
    @csrf
    @if (session('status'))
    <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">{{ session('status') }}</p>
  @endif
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
      <input type="email" id="email" name="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="name@example.com" required />
      <x-form.error name="email" />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
      <input type="password" id="password" name="password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="atlease 6 characters" required />
      <x-form.error name="password" />
    </div>
    <div class="mb-5 flex justify-between">
      <span><a href="{{ route('password.request') }}"
          class="text-sm text-gray-700 hover:underline dark:text-gray-400">Forgot password?</a></span>
      <span><a href="{{ route('register') }}" class="text-sm text-gray-700 hover:underline dark:text-gray-400">Don't
          have an account?</a></span>
    </div>
    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
    <hr class="w-64 h-px mx-auto  bg-gray-400 border-0 rounded-sm my-2 dark:bg-gray-500">
    <a href="{{ route('login.google') }}"
      class="w-full text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#4285F4]/55 me-2 mb-2 ">
      <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 18 19">
        <path fill-rule="evenodd"
          d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
          clip-rule="evenodd" />
      </svg>
      Sign in with Google
    </a>
  </form>
</x-layout>