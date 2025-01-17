<!-- 
Write a PHP Script to –
a. Display Current Time
b. Today’s date
c. Display the date in dd-mon-yyyy format(Ex: 06-Feb-2023)
d. Display the date and time in Day, Date Month YYYY, hh:mm AM/PM
format(Ex: Monday, 06 February 2023, 01:30 PM) 
-->

    <?php
    date_default_timezone_set('Asia/Kolkata');
    echo "<br>".date('H:i:s');
    echo "<br>".date('Y-m-d');
    echo "<br>".date("d-M-Y");
    echo "<br>".date("l, d M, Y H:i A");
    ?>