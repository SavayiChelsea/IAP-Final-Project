<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
               <head>
        <link rel="icon" href="{{ asset('favicon2.ico') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Car Park') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
        <link rel="stylesheet" href="{{asset ('css/trail.css')}}">
    </head>
    <body class="font-sans antialiased">
        <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
          

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
     </div>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</x-app-layout>
