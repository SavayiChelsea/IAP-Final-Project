<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="row justify-content-center">
            <div class="">
                @include('admin.success_message')
                <form class="form mt-5" action="{{ route('reserve.parking.spaces') }}" method="post">
                    @csrf
                    <div>
                        <x-label for="parkingSpace_id" value="{{ __('Parking Space Id:') }}" class="text-dark" />
                        <select class="form-select" name="parkingSpace_id">
                            @foreach ($parkingSpaces as $parkingSpace)
                                @if($parkingSpace->status == "NOT RESERVED" && $parkingSpace->Availability == 'AVAILABLE')
                                    <option value="{{ $parkingSpace->id }}">{{ $parkingSpace->id }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-label for="duration" value="{{ __('Duration:') }}" class="text-dark" />
                        <select class="form-select" name="duration" onchange="updateAmountCharged(this)">
                            <option value="1" data-amount="100">1 hour</option>
                            <option value="3" data-amount="250">3 hours</option>
                            <option value="6" data-amount="500">6 hours</option>
                            <option value="12" data-amount="1000">12 hours</option>
                        </select>
                    </div>

                    <!-- Hidden input field to store the amount charged -->
                    <x-label for="price" value="{{ __('Price:') }}" class="text-dark" />
                    <input type="text" id="amountCharged" name="amountCharged" value="" readonly>



                    <div class="flex items-center justify-center mt-4">
                        <x-button class="ml-4">
                            {{ __('Create Reservation') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-authentication-card>

    <script>
        function updateAmountCharged(select) {
            // Get the selected option
            var selectedOption = select.options[select.selectedIndex];

            // Get the amount value from the selected option's data-amount attribute
            var amount = selectedOption.getAttribute('data-amount');

            // Set the value of the hidden input to the selected amount
            document.getElementById('amountCharged').value = amount;
        }
    </script>
</x-app-layout>
