{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-base-layout>
    <!-- Login -->
    <section id="login">
        <div class="main">
             <div class="first">
                 <h1>Welcome to SG Info</h1>
                 <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <div class="userInput">
                        <div class="email">
                            <label for="">EMAIL</label> <br>
                            <input type="email" name="email" placeholder="Enter Email Address">
                        </div>
                        <div class="pasword">
                            <label for="">PASSWORD</label> <br>
                            <input type="password" name="password" placeholder="Enter Password">
                        </div>
                        <p><a href="">Forgot Password?</a></p>
                        <button type="submit" class="loginButton">Login</button>
                    </div>
                </form>
             </div>
             <div class="otherLogin">
                 <p>(OR)</p>
                 <div class="google">
                     <img src="images/login_register/google.svg" alt="">
                     <h2><a href="">Continue with Google</a></h2>
                 </div>
                 <div class="facebook">
                     <img src="images/login_register/facebook.svg" alt="">
                     <h2><a href="">Continue with Facebook</a> </h2>
                 </div>
                 <div class="apple">
                     <img src="images/login_register/apple.svg" alt="">
                     <h2><a href="">Continue with Apple</a></h2>
                 </div>
                 <div class="signup">New to SG Info? <a href="">Sign up</a></div>
             </div>
        </div>
     </section>
     {{-- end login --}}
</x-base-layout>
