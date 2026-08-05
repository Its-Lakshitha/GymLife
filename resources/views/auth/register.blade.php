<x-guest-layout>
    {{-- Title --}}
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-white font-['Oswald'] uppercase tracking-wider">Create Account</h2>
        <div class="auth-divider mx-auto mt-3"></div>
        <p class="text-gray-400 text-sm mt-3">Join the GymLife community today</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="auth-label block mb-1.5">Full Name</label>
            <input id="name" class="auth-input block w-full rounded-lg px-4 py-3 text-sm" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-5">
            <label for="email" class="auth-label block mb-1.5">Email</label>
            <input id="email" class="auth-input block w-full rounded-lg px-4 py-3 text-sm" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="your@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <label for="password" class="auth-label block mb-1.5">Password</label>
            <input id="password" class="auth-input block w-full rounded-lg px-4 py-3 text-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-5">
            <label for="password_confirmation" class="auth-label block mb-1.5">Confirm Password</label>
            <input id="password_confirmation" class="auth-input block w-full rounded-lg px-4 py-3 text-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="mt-7">
            <button type="submit" class="auth-btn w-full py-3.5 rounded-lg text-sm">
                {{ __('Create Account') }}
            </button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-6 pt-6 border-t border-white/10">
            <span class="text-gray-500 text-sm">Already have an account?</span>
            <a href="{{ route('login') }}" class="text-red-500 hover:text-red-400 text-sm font-semibold ml-1 transition">
                Log In
            </a>
        </div>
    </form>
</x-guest-layout>
