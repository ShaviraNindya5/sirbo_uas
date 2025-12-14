<x-auth-layout>
    <h2 class="text-xl font-bold text-center mb-4">Login</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-3">
        @csrf

        <input type="email" name="email" placeholder="Email" class="w-full border rounded p-2">

        <input type="password" name="password" placeholder="Password" class="w-full border rounded p-2">

        <button class="w-full bg-slate-800 text-white py-2 rounded">
            Login
        </button>
    </form>

    <p class="text-sm text-center mt-3">
        Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600">Register</a>
    </p>
</x-auth-layout>