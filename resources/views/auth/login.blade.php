<x-auth-layout title="Welcome">
    <div class="min-h-screen w-full bg-[url('../../../public/images/bg.jpg')] bg-cover bg-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" label="Email" placeholder="Enter your email" />
            <input type="password" name="password" label="Password" placeholder="Enter your password" />
            <button>Login</button>
        </form>
    </div>
</x-auth-layout>
