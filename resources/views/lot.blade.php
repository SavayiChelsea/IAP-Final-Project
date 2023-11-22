<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Car Park') }}</title>
    <link rel="stylesheet" href="lot.css">
</head>
<body>
     
    <div class="lot-container">
        <label>Pick a Parking Lot:</label>
        <select id="ParkingLot">
        <option value="500">Strathmore Parking Lot</option>
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
                   <div class="ParkingSpace Occupied"></div>
               @elseif($parkingSpace->state == "RESERVED")
                    <div class="ParkingSpace Reserved"></div>
               @else
                    <div class="ParkingSpace"></div>
                @endif
            @endif
            @if($parkingSpace->Section == 2)
               @if($parkingSpace->Availability == 'NOT AVAILABLE')
                   <div class="ParkingSpace Occupied"></div>
               @elseif($parkingSpace->state == "RESERVED")
                    <div class="ParkingSpace Reserved"></div>
               @else
                    <div class="ParkingSpace"></div>
                @endif
            @endif
            @if($parkingSpace->Section == 3)
               @if($parkingSpace->Availability == 'NOT AVAILABLE')
                   <div class="ParkingSpace Occupied"></div>
               @elseif($parkingSpace->state == "RESERVED")
                    <div class="ParkingSpace Reserved"></div>
               @else
                    <div class="ParkingSpace"></div>
                @endif
            @endif
            @if($parkingSpace->Section == 4)
               @if($parkingSpace->Availability == 'NOT AVAILABLE')
                   <div class="ParkingSpace Occupied"></div>
               @elseif($parkingSpace->state == "RESERVED")
                    <div class="ParkingSpace Reserved"></div>
               @else
                    <div class="ParkingSpace"></div>
                @endif
            @endif
        @endforeach

        <p class="text">
            You have selected <span id="count">0</span> Parking Space(s) to Reserve for a price of KSH.<span id="total">0</span>
        </p>

        <p>
        To reserve Click the following button.
        </p>

        <button class="reserve"> Reserve </button>

    </div>
    
    <script src="lot.js"></script>

</body>
</html>