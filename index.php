<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance System</title>
    <link href="frontend\css\css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="frontend\js\js.js"></script>


    <style>
        body {
          background: #f1f1f1;
        }
    </style>
</head>
<body>


<div class="main">

    <div class="header">
            <?php include('frontend\view\header.php'); ?>
    </div>

    <div class="main-content">
        <div class="navbar">
            <?php include('frontend\view\navbar.php'); ?>
        </div>

        <div class="content">
        <?php include('frontend\view\dashboard.php'); ?>
        </div>
    </div>
</div>

</body>
</html>