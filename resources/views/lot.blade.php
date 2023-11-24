<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="icon" href="{{ asset('favicon2.ico') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Car Park') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        <link rel="stylesheet" href="{{asset ('css/trail.css')}}">
    </head>
    <body class="font-sans antialiased">
        <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')
            @include('admin.success_message')

    <div class="lot-container">
        <label>Pick a Parking Lot:</label>
        <select id="ParkingLot">
        <option>Strathmore Parking Lot</option>
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="ParkingSpace"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="ParkingSpace Occupied"></div>
            <small>Occupied</small>
        </li>
        <li>
            <div class="ParkingSpace Reserved"></div>
            <small>Reserved</small>
        </li>
        <li>
            <div class="selected"></div>
            <small>Selected</small>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            @foreach ($parkingSpaces as $parkingSpace)
                @if($parkingSpace->Section == 1)
                    @if($parkingSpace->Availability == 'NOT AVAILABLE')
                        <div class="ParkingSpace Occupied" ></div>
                    @elseif($parkingSpace->status == "RESERVED")
                        <div class="ParkingSpace Reserved"></div>
                    @else
                        <div class="ParkingSpace"></div>
                    @endif
                @endif
                @if($parkingSpace->Section == 2)
                    @if($parkingSpace->Availability == 'NOT AVAILABLE')
                        <div class="ParkingSpace Occupied"></div>
                    @elseif($parkingSpace->status == "RESERVED")
                        <div class="ParkingSpace Reserved"></div>
                    @else
                        <div class="ParkingSpace"></div>
                    @endif
                @endif
                @if($parkingSpace->Section == 3)
                    @if($parkingSpace->Availability == 'NOT AVAILABLE')
                        <div class="ParkingSpace Occupied"></div>
                    @elseif($parkingSpace->status == "RESERVED")
                        <div class="ParkingSpace Reserved"></div>
                    @else
                        <div class="ParkingSpace"></div>
                    @endif
                @endif
                @if($parkingSpace->Section == 4)
                    @if($parkingSpace->Availability == 'NOT AVAILABLE')
                        <div class="ParkingSpace Occupied"></div>
                    @elseif($parkingSpace->status == "RESERVED")
                        <div class="ParkingSpace Reserved"></div>
                    @else
                        <div class="ParkingSpace"></div>
                    @endif
                @endif
            @endforeach
        </div>
        <div class="button">
        <form method="POST" action="{{ route('reserve.parking.spaces') }}">
            @csrf
            <input type="hidden" name="selectedSpacesIds[]" id="selectedSpacesIds" value="">
            <input type="hidden" name="totalprice" id="totalprice" value="">
            <button type="submit">Reserve Selected Spaces</button>
        </form>
        </div>
        <p class="text">
            You have selected <span id="count">0</span> Parking Space(s) to Reserve for a total price of KSH.<span id="total">0</span>
        </p>
        

     </div>
    </div>
</div>
<script src="{{asset ('js/lot.js')}}"></script>

@stack('modals')

@livewireScripts
</body>
