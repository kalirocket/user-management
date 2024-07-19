<x-auth-layout title="Login">
    <div class="min-h-screen w-full bg-[url('../../../public/images/bg.jpg')] bg-cover bg-center">
        <div class="flex flex-col justify-center items-center min-h-screen w-full mx-auto">
            <div class="w-96 sm:max-w-3xl lg:w-3/5 px-5">
                <form method="POST" action="{{ route('login') }}"
                    class="m-2 px-5 py-20 md:px-10 md:py-32 lg:px-28 lg:py-44 max-w-xl mx-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100
">
                    @csrf

                    <h1 class="text-2xl font-bold text-center mb-12">Login</h1>

                    <label class="input input-bordered flex items-center gap-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Email" name="email" />
                    </label>
                    @error('email')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 rounded-full mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="••••••••" name="password" />
                    </label>
                    @error('password')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    @error('failed')
                        <div class="mt-2 text-center">
                            <x-validation-error message="{{ $message }}" />
                        </div>
                    @enderror

                    <button class="btn w-full rounded-full bg-neutral text-white hover:bg-black/80 mt-12 ">Sign
                        in</button>
                    <p class="text-center mt-4">Don't have an account? <a href="/signup"
                            class="underline text-teal-700">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
