<?php 
include('connection.php');

//set schedule
if(isset($_GET['schedule_submit'])) {
    date_default_timezone_set("Asia/Manila");
    $time_in = $_GET['timein'];
    $time_out = $_GET['timeout'];
    $date = $_GET['date'];

    $sql_att = "INSERT INTO schedule (time_in, time_out, date) VALUES 
    ('$time_in', '$time_out', '$date')";

    if (mysqli_query($conn,$sql_att)) {
        echo '<script>alert("Successfully added schedule!"); window.location="/attendance-system/index.php"</script>';
    } else {
        echo "Error: " . $sql_att . "<br>" . $conn->error;  
    }
}

$conn->close();
?>