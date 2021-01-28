@section('title',__('site.call_to_action'))
<x-landing-layout>
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
                               Mohon isi form berikut untuk mendaftar.
                                Jika telah memiliki akun, silahkan <a href="{{route('login')}}" class="white-underline-link">masuk</a>.
                            </p>

                            <form class="dark-background" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                            <x-label for="name" :value="__('Nama')" ><x-input id="name" type="text" name="name" :value="old('name')" required autofocus></x-input> </x-label>


                                        <!-- Email Address -->

                                            <x-label for="email" :value="__('Email')" >  <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /></x-label>


                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-label for="password" :value="__('Kata Sandi')"> <x-input id="password"
                                                                                                      type="password"
                                                                                                      name="password"
                                                                                                      required autocomplete="new-password" /></x-label>


                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')"> <x-input id="password_confirmation"
                                                                                                                           type="password"
                                                                                                                           name="password_confirmation" required /></x-label>


                                        </div>


                                            <x-button class="btn btn-outline-semi-light btn-xl mt-4">
                                                {{ __('Register') }}
                                            </x-button>

                                    </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}


{{--    </x-auth-card>--}}
</x-landing-layout>
