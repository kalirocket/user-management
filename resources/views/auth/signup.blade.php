<x-auth-layout title="Login">
    <div class="min-h-screen w-full bg-[url('../../../public/images/bg.jpg')] bg-cover bg-center">
        <div class="flex flex-col justify-center items-center min-h-screen w-full mx-auto">
            <div class="max-w-3xl lg:w-3/5 px-5">
                <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data"
                    class="m-2 px-5 py-12 md:px-10 lg:px-28 max-w-xl mx-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100
">
                    @csrf
                    <h1 class="text-2xl font-bold text-center mb-12">Signup</h1>
                    <input type="file" name="profile_pic" class="file-input file-input-bordered w-full rounded-full"
                        value="{{ old('profile_pic') }}" />
                    @error('profile_pic')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="First name" name="first_name"
                            value="{{ old('first_name') }}" />
                    </label>
                    @error('first_name')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Last name" name="last_name"
                            value="{{ old('last_name') }}" />
                    </label>
                    @error('last_name')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="text" class="grow" placeholder="Phone number" name="mobile"
                            value="{{ old('mobile') }}" />
                    </label>
                    @error('mobile')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Email" name="email"
                            value="{{ old('email') }}" />
                    </label>
                    @error('email')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="Password" name="password" />
                    </label>
                    @error('password')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <label class="input input-bordered flex items-center gap-2 mt-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="Confirm password"
                            name="password_confirmation" />
                    </label>
                    @error('password_confirmation')
                        <x-validation-error message="{{ $message }}" />
                    @enderror

                    <button class="btn w-full rounded-full bg-neutral text-white hover:bg-black/80 mt-12">Sign
                        up</button>
                    <p class="text-center mt-4">Have an account? <a href="/login" class="underline text-teal-700">Sign
                            in</a></p>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
