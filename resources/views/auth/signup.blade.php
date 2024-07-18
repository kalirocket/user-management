<x-auth-layout title="Login">
    <div class="min-h-screen w-full bg-[url('../../../public/images/bg.jpg')] bg-cover bg-center">
        <div class="flex flex-col justify-center items-center min-h-screen w-full mx-auto">
            <div class="max-w-3xl lg:w-3/5 px-5">
                <form method="POST" action="{{ route('login') }}"
                    class="m-2 px-5 py-12 md:px-10 md:py-32 lg:px-28 lg:py-36 max-w-xl mx-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100
">
                    @csrf

                    <h1 class="text-2xl font-bold text-center mb-12">Signup</h1>
                    <input type="file" name="profile_pic"
                        class="file-input file-input-bordered w-full mb-4 rounded-full" />
                    @if (!empty($error_message))
                        <div class="text-red-500 text-xs p-1">{{ $error_message }}</div>
                    @endif

                    <label class="input input-bordered flex items-center gap-2 mb-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="First name" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 mb-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Last name" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 mb-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Email" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 mb-12 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="••••••••" />
                    </label>
                    <button class="btn w-full rounded-full bg-neutral text-white hover:bg-black/80">Sign in</button>
                    <p class="text-center mt-4">Have an account? <a href="/login" class="underline text-teal-700">Sign
                            in</a></p>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
