@section('title',__('Masuk'))
<x-landing-layout>
{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

    <div class="content-container">
        <div class="section home subpage-long">
            <div class="container">
                <div class="row home-row mb-0">
                    <div class="col-12 col-lg-6 col-xl-4 col-md-12">
                        <div class="home-text">
                            <div class="display-1">
                                Pendaftaran
                            </div>
                            <p class="white mb-5">
                                Jika belum memiliki akun, silahkan <a href="{{route('register')}}" class="white-underline-link">daftar</a>.
                            </p>

                            <form class="dark-background" method="POST" action="{{ route('login') }}">
                            @csrf

                                <!-- Email Address -->

                                <x-label for="email" :value="__('Email')" >  <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /></x-label>


                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Kata Sandi')"> <x-input id="password"
                                                                                                type="password"
                                                                                                name="password"
                                                                                                required autocomplete="current-password" /></x-label>


                                </div>
                                <!-- Remember Me -->
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                    <label for="remember_me" class="custom-control-label white">

                                      {{ __('Ingat saya?') }}
                                    </label>

                                <div class="mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="white-underline-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>

                                <x-button class="btn btn-outline-semi-light btn-xl mt-4">
                                    {{ __('Masuk') }}
                                </x-button>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    </x-auth-card>--}}
</x-landing-layout>
