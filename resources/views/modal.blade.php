@include('favicon')
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registrar</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <x-guest-layout>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div  class="form-group">
                                            <x-jet-label style="font-size: 15px" for="email" value="{{ __('Email') }}" />
                                            <x-jet-input style="height: 37px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label style="font-size: 15px" for="password" value="{{ __('Senha') }}" />
                                            <x-jet-input style="height: 37px;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                        </div>

                                        <div class="block mt-4">
                                            <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox style="height: 1.5rem;width: 4%" id="remember_me" name="remember" />
                                                <span style="font-size: 15px"  class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a style="font-size: 15px" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu sua Senha?') }}
                                                </a>
                                            @endif

                                            <x-jet-button style="font-size: 13px !important; padding: 14px !important;" class="ml-4">
                                                {{ __('Entrar') }}
                                            </x-jet-button>
                                        </div>
                                    </form>

                                </x-guest-layout>

                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <x-guest-layout>



                                    <x-jet-validation-errors class="mb-4" />

                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div>
                                            <x-jet-label style="font-size: 15px" for="name" value="{{ __('Nome') }}" />
                                            <x-jet-input style="height: 37px;"  id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label style="font-size: 15px" for="email" value="{{ __('Email') }}" />
                                            <x-jet-input style="height: 37px;"  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label style="font-size: 15px" for="password" value="{{ __('Senha') }}" />
                                            <x-jet-input style="height: 37px;"  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label style="font-size: 15px" for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                                            <x-jet-input style="height: 37px;"  id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>



                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <x-jet-label for="terms">
                                                    <div class="flex items-center">
                                                        <x-jet-checkbox name="terms" id="terms"/>

                                                        <div class="ml-2">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                </x-jet-label>
                                            </div>
                                        @endif

                                        <div class="flex items-center justify-end mt-4">
                                            <a  style="font-size: 15px"  class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-jet-button style="font-size: 13px !important; padding: 14px !important;" class="ml-4">
                                                {{ __('Registrar') }}
                                            </x-jet-button>
                                        </div>
                                    </form>

                                </x-guest-layout>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
