<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <style>
    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #04AA6D;
        color: white;
    }
    .a_link{
        text-decoration:none;
    }
    </style>

    <body class="bg-success p-2 text-dark bg-opacity-25">
        <form action="job_desc.php" method="POST">
            <div class="topnav">
                <a class="active" href="Home_Can.php">HOME</a>
                <a href="Update_Can.php">UPDATE FORM</a>
                <a href="Show_Report.php">SHOW REPORT</a>
                <a href="Home.php">SIGN OUT</a>
            </div>
            <center><b>
                <?php
                    include'./All_Database.php';
                    $result=$con->query("select * from reg_job");
                    if($result->rowCount()>0)
                    {    
                        while($row=$result->fetch())
                        {
                            ?>
                <br> <br>
                <p>Job name : <?php echo $row[1]?></p>
                <p>Job Location : <?php echo $row[3]?></p>
                <p>Job Salary : <?php echo $row[5]?></p>
                <p>Job Qualification : <?php echo $row[8]?></p>
                <button name="job_id" value="<?php echo $row[0]?>" class="btn btn-outline-primary">Show More</button>
                <button class="btn btn-outline-primary"><a class="a_link" href="Register_Can.php">Apply Now</button></a>
               <br><hr>
                <?php
                        }
                    }
                 ?>
                </from>
    </body>

</html>