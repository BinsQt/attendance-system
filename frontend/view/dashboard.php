<?php 
require_once('backend\connection.php');

$select = "SELECT student_data.*, student_attendance.*, schedule.*
FROM student_data 
LEFT JOIN student_attendance 
ON student_data.user_key = student_attendance.user_key
LEFT JOIN schedule
ON student_attendance.date = schedule.date";

$result = mysqli_query($conn, $select);


?>

<div class="dash">
    <div class="dashboard-header">
        <div>
            <input id="search" type="text" class="search" placeholder="Search..">
        </div>

        <div class="sort-calendar">
            <label for="date">Date:</label>
            <input type="date" name="date-sort" id="date-sort" class="date-sort" value="<?php echo date("Y-m-d"); ?>">
        </div>
    </div>

    <div class="dashboard-main">

    <div id="addstudent" class="addstudent">
            <?php
                include('frontend/view/partials/addstudent.php');
            ?>
        </div>
        
        <div id="schedule" class="schedule">
            <?php
                include('frontend/view/partials/settings.php');
            ?>
        </div>

    <div class="table" id="sample">
            <table>
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Attendance</th>
                        <th>User Key</th>
                        <th>Date</th>
                        <th>TimeIn</th>
                        <th>TimeOut</th>
                        <th>Late</th>
                        <th>View Profile</th>
                    </tr>
                </thead>

                <tbody id="myTable"> 
                        <tr id="att">
                        <?php 
                        if ($result->num_rows > 0){
                            
                        
                            while($row = mysqli_fetch_assoc($result)) {
                                $user_key = $row["user_key"];
                                $name = $row["fullname"];
                                $date = $row['date'];

                                $dates = date("Y-m-d");
                                $time = $row['time'];
                                $timein = $row['timein'];
                                $timeout = $row['timeout'];
                                $time_in = $row['time_in'];
                                $time_out = $row['time_out'];
                                $twentyfour = $row['twentyfour'];
                                $section = $row["section"];
                                $grade = $row["grade"];
                                $address = $row["address"];
                                $sex = $row["sex"];
                                $birthday = $row["dateofbirth"];
                                $contactNumber = $row["contactNumber"];


                        ?>
                        <td>
                        <?php 
                            // lastname
                            $name_parts = explode(" ", $name);

                            $lastname = array_slice($name_parts, 0)[0];

                            echo $lastname

                        ?>
                        </td>

                        <td>
                        <?php 
                            //firstname
                            $name_parts = explode(" ", $name);
                            $firstname = array_slice($name_parts, 2);
                            foreach ($firstname as $fname){
                                echo $fname . " ";
                            }          
                        ?>          
                        </td>

                        <td>
                        <?php   
                            //middlename
                            $name_parts = explode(" ", $name);
                            $middlename = array_slice($name_parts, 1)[0];

                            echo $middlename;
                        ?>  
                        </td>

                        <td>
                        <?php      
                            //attendance
                            
                            if($timeout != 1) {
                                if($timein == "Present") {
                                    if ($twentyfour < $time_in) {
                                        echo "Present";
                                    } elseif ($twentyfour > $time_in) {
                                        if ($twentyfour > $time_out) {
                                            echo "Absent";
                                        } else {
                                            echo "Present";
                                        }
                                    }
                                } elseif ($timein != "Present") {
                                    echo "Absent";
                                } 
                            } elseif ($timeout == 1) {
                                
                                if ($twentyfour < $time_out && $twentyfour > $time_in) {
                                    echo "Early Time Out";
                                } elseif ($twentyfour > $time_out) {
                                    echo "Time Out";
                                } 

                            } 
                        ?>  
                        </td>

                        <td>
                        <?php   
                            echo $user_key;
                        ?>  
                        </td>

                        <td>
                        <?php   
                            echo $date;
                        ?>  
                        </td>
                            
                        <td>
                        <?php   
                            // echo $timein
                            if ($timein != "Present") {
                                echo "";
                            } elseif ($timein = "Present"){
                                echo $time;
                            }
                        ?>  
                        </td>

                        <td>
                        <?php   
                            // echo $timeout
                           
                            if ($timeout < 1) {
                                echo "";
                            } elseif ($timeout = 1){
                                echo $time;
                            }
                        ?>  
                        </td>

                        <td>
                        <?php   

                            if($timeout != 1 && $twentyfour > $time_in && $twentyfour < $time_out) {
                                echo "Late";
                            } elseif ($timeout == 1) {
                                
                                if ($twentyfour < $time_out && $twentyfour > $time_in) {
                                    echo "";
                                } elseif ($twentyfour > $time_out) {
                                    echo "";
                                } 

                            } 
                            // if($twentyfour > $time_in && $twentyfour < $time_out) { 
                            //     echo "Late";
                            // }  elseif ("$twentyfour > $time_out") {
                            //     echo "";
                            // }
                        ?>  
                        </td>

                        <td>
                        <a href="backend/view.php?id=<?= $user_key; ?>" class="btn btn-info btn-sm">View</a>
                        </td>


                    </tr> 
                    
    
                        <?php 
                            }
                        } else {
                            echo "0 Results";
                        }
                        ?>
                    </tbody>

            </table>
    </div>
</div>

