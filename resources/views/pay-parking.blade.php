<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayParking</title>
</head>
<body>
    <x-app-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>
            <div class="row justify-content-center">
                <p style="color: green; font-size: 30px;">Pay Parking easily via M-pesa</p><br>
                <div id="mpesa-details" class="payment-details" >
                    <form method="post" action="{{ route('pay-stk') }}" >
                        @csrf <!-- Add a CSRF token for security -->
        
                        <!-- Phone number input for M-Pesa -->
                        <label for="phone-number">Enter your M-Pesa Phone Number:</label>
                        <input type="text" id="phone-number" name="phone-number" required><br><br>
        
                        <!-- Display payment amount and other details here -->

                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-4" type="submit">
                                {{ __('Pay with M-Pesa') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
    </x-authentication-card>
    </x-app-layout>
    
</body>
</html>