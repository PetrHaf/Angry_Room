<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Datepicker - Display inline</title>
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <div id="datepicker">

    </div>
    <div id="timepicker">

    </div>
</body>
</html>

<script>
$( function() {

    $( "#datepicker" ).datepicker({
        dateFormat: "yy-mm-dd" // formatting date
    });

    $.datepicker.setDefaults({
        onSelect: function(dateText, inst){
        var dateAsString = dateText; // string date
            $.ajax({
                type: "GET",
                url: "reservation.php",
                data: dateText,
                success: function (data) {
                    var selectHoursOfReservation = "SELECT hour FROM Reservation WHERE time=" + dateText;
                        if( typeof selectHoursOfReservation == "undefined" )
                            return null;
                    var $timeTable = $('#timepicker');
                    if ( $timeTable.length > 0 )
                        

                    console.log(selectHoursOfReservation);
                }
            });
        }
    });
} );
</script>

<?php
?>