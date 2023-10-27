<x-guest-layout>
<<<<<<< HEAD
  
=======
    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
>>>>>>> 718bf1fdfb80d120f4c95ddeff4090803c50f777
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" class="text-dark" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-dark" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="row">
                    <div class="col form-group mt-3">
                        <x-label for="cartype" value="{{ __('Car Type') }}" class="text-dark"/>
                        <x-input type="text" name="cartype" id="cartype" class="block mt-1 w-full" value="{{ old('Car Type') }}" required autocomplete="cartype"/>
                    </div> 
                    <div class="col form-group mt-3">
                        <x-label for="licenseplate" value="{{ __('License Plate') }}" class="text-dark"/>
                        <x-input type="text" name="licenseplate" id="licenseplate" class="block mt-1 w-full" value="{{ old('License Plate Number') }}" required autocomplete="licenseplate"/>
                    </div> 
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-dark" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-dark" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-black dark:text-gray-900 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-success ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
