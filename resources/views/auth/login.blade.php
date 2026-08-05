<x-guest-layout>
    {{-- Title --}}
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-white font-['Oswald'] uppercase tracking-wider">Welcome Back</h2>
        <div class="auth-divider mx-auto mt-3"></div>
        <p class="text-gray-400 text-sm mt-3">Sign in to access your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="auth-label block mb-1.5">Email</label>
            <input id="email" class="auth-input block w-full rounded-lg px-4 py-3 text-sm" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="your@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <label for="password" class="auth-label block mb-1.5">Password</label>
            <input id="password" class="auth-input block w-full rounded-lg px-4 py-3 text-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me + Forgot Password -->
        <div class="flex items-center justify-between mt-5">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="auth-checkbox rounded w-4 h-4 focus:ring-red-500 focus:ring-offset-0" name="remember">
                <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="auth-link text-sm hover:text-red-500" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Submit -->
        <div class="mt-7">
            <button type="submit" class="auth-btn w-full py-3.5 rounded-lg text-sm">
                {{ __('Log In') }}
            </button>
        </div>

        <!-- Sign Up Link -->
        <div class="text-center mt-6 pt-6 border-t border-white/10">
            <span class="text-gray-500 text-sm">Don't have an account?</span>
            <a href="{{ route('register') }}" class="text-red-500 hover:text-red-400 text-sm font-semibold ml-1 transition">
                Sign Up
            </a>
        </div>
    </form>
</x-guest-layout>
