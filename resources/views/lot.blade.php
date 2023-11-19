<?php 

require_once "includes/dbConn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trail</title>
    <link rel="stylesheet" href="trail.css">
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
            <?php
            
            $lot_sql = "SELECT * FROM ParkingSpace";

            $lot_res = $conn->query($lot_sql);

            if($lot_res -> num_rows>0){
                while($space_row = $lot_res->fetch_assoc()){
                    if($space_row["Section"] == "1"){

                        if($space_row["availability"] == "NOT AVAILABLE"){
                            ?>
                            <div class="ParkingSpace Occupied"></div>
                            <?php
                        }elseif($space_row["state"] == "RESERVED"){
                            ?>
                            <div class="ParkingSpace Reserved"></div>
                            <?php
                        }else{
                            ?>
                            <div class="ParkingSpace"></div>
                            <?php
                        }

                    }?>
                    <?php
                    if($space_row["Section"] == "2"){

                        if($space_row["availability"] == "NOT AVAILABLE"){
                            ?>
                            <div class="ParkingSpace Occupied"></div>
                            <?php
                        }elseif($space_row["state"] == "RESERVED"){
                            ?>
                            <div class="ParkingSpace Reserved"></div>
                            <?php
                        }else{
                            ?>
                            <div class="ParkingSpace"></div>
                            <?php
                        }

                    }

                    if($space_row["Section"] == "3"){

                        if($space_row["availability"] == "NOT AVAILABLE"){
                            ?>
                            <div class="ParkingSpace Occupied"></div>
                            <?php
                        }elseif($space_row["state"] == "RESERVED"){
                            ?>
                            <div class="ParkingSpace Reserved"></div>
                            <?php
                        }else{
                            ?>
                            <div class="ParkingSpace"></div>
                            <?php
                        }

                    }

                    if($space_row["Section"] == "4"){

                        if($space_row["availability"] == "NOT AVAILABLE"){
                            ?>
                            <div class="ParkingSpace Occupied"></div>
                            <?php
                        }elseif($space_row["state"] == "RESERVED"){
                            ?>
                            <div class="ParkingSpace Reserved"></div>
                            <?php
                        }else{
                            ?>
                            <div class="ParkingSpace"></div>
                            <?php
                        }

                    }

                }
            }

            ?>
        </div>

        <p class="text">
            You have selected <span id="count">0</span> Parking Space(s) to Reserve for a price of KSH.<span id="total">0</span>
        </p>

        <p>
        To reserve Click the following button.
        </p>

        <button class="reserve"> Reserve </button>

    </div>
    
    <script src="trial.js"></script>

</body>
</html>