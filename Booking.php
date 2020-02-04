<?php
$reg_num =$_GET['value'];
$cost=$_GET['value1'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="src/css/booking.css" />
    <script type="text/javascript" src="src/js/booking.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

    </style>
</head>

<body>
    <form action="src/includes/bookingSystem.php?reg=<?php echo $reg_num; ?>" onsubmit="return validateBook()" method="POST">
        <div class="booking">
            <h2 align="center">Booking Details</h2>
            <div class="controls">Rs <?php echo $cost; ?> per guest per night</div>
            <div class="controls">
                <label for="checkIn" class="label-date">Check in</label>
                <input type="date" id="checkIn" name="checkIn" onblur="return validateBook()" onblur="return CheckDate(input)" />
                <span id="msg1" style="color: red;"></span>
            </div>
            <div class="controls">
                <label for="checkOut" class="label-date">Check out</label>
                <input type="date" id="checkOut" name="checkOut"  onblur = "return validateBook()"/>
                <span id="msg2" style="color: red;"></span>
            </div>
            <div class="controls">
                <label for="guests">Guests</label>
                <select name="guest_num" id="guests" onchange="calculation();">
                   <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                </select>
            </div>
            <?php //echo '<script>';
        // echo 'var cost_per_guest = ' . json_encode($cost) . ';';
         //echo '</script>';?>

            <div class="controls">
                <label for="Total Cost" class="cost">Total Cost</label>
                <input type="number" id="totalCost" name="totalCost" readonly="readonly"/>
                <span id="msg3" style="color: red;"></span><br>
            </div>
            <button class="book" type="submit" id="book" name="book">Book Now</button>
            <script>
                function calculation(){
                    var checkIn = document.getElementById('checkIn').value;
                    var date1 = new Date(checkIn);
                     var checkOut = document.getElementById('checkOut').value;
                      var date2 = new Date(checkOut);
                    var diff= date2.getTime()-date1.getTime();
                    var Days = (diff / (1000 * 3600 * 24))+1; 
                    
                    var cost = <?php echo $cost;?>;
                    var guest = document.getElementById('guests').value;
                    var total = Days * cost * guest;
                    document.getElementById('totalCost').value=total;
                }
            </script>
        </div>
    </form>
</body>

</html>
