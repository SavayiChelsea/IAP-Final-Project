<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
    <div class="row justify-content-center">
        <div class="">
            @include('admin.success_message')
            <form class="form mt-5" action="{{ route('admin.instance.store') }}" method="post">
                @csrf
                <div>
                    <x-label for="parkingSpace_id" value="{{ __('Parking Space Id:') }}" class="text-dark" />
                        <select class="form-select" name="parkingSpace_id">
                            @foreach ($parkingSpaces as $parkingSpace)
                                @if($parkingSpace->Availability == 'AVAILABLE')
                                    <option value="{{ $parkingSpace->id }}">{{ $parkingSpace->id }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>
    
                <div class="mt-4">
                    <x-label for="licence" value="{{ __('Licence Plate:') }}" class="text-dark" />
                    <x-input id="licence" class="block mt-1 w-full" type="text" name="licence" :value="old('licence')" required/>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-button class="ml-4">
                        {{ __('Create Instance') }}
                    </x-button>
                </div>
            </form>
        </div>
        <div class="">
            @include('admin.success')
            <form class="form mt-5" action="{{ route('admin.instance.update') }}" method="post">
                @csrf
                <x-label for="parkingSpace_id" value="{{ __('Parking Space Id:') }}" class="text-dark" />
                        <select class="form-select" name="parkingSpace_id">
                            @foreach ($parkingSpaces as $parkingSpace)
                                @if($parkingSpace->Availability == 'NOT AVAILABLE')
                                    <option value="{{ $parkingSpace->id }}">{{ $parkingSpace->id }}</option>
                                @endif
                            @endforeach
                        </select>
    
                <div class="mt-4">
                    <x-label for="licence" value="{{ __('Licence Plate:') }}" class="text-dark" />
                    <x-input id="licence" class="block mt-1 w-full" type="text" name="licence" :value="old('licence')" required/>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-button class="ml-4">
                        {{ __('Free Parking') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
    </x-authentication-card>
</x-app-layout>