<?php
$connect = mysql_connect(“MySQL:3306”, “TimesheetManager”, “TimesheetManagerDatabase”); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“TimesheetManager”, $connect);

$user_info = “INSERT INTO usersignout (userid, time_out, day) VALUES ('$_POST[userid]', '$_POST[time_out]', '$_POST[day]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Your information was added to the database.”;

mysql_close($connect); 
?>
