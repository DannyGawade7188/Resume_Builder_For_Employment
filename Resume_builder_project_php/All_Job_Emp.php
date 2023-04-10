<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <style>
                p{
                    font-size:20px; 
                    font-weight:bold;
                }
            </style>
</head>
<body class="bg-success p-2 text-dark bg-opacity-25">
<form action="job_desc.php" method="POST">
<center>
        
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
                <?php
    include'./All_Database.php';
        $result=$con->query("select * from reg_job ORDER BY j_id DESC");
        if($result->rowCount()>0)
        {   
            
            while($row=$result->fetch())
            {
                ?>
                <br>
                <br>
                <p>Job Id :<?php echo $row[0]?></p>
                <p>Job name : <?php echo $row[1]?></p>
                <p>Vaccancy : <?php echo $row[2]?></p>
                <p>Job Location : <?php echo $row[3]?></p>
                <p>Company Name: <?php echo $row[4]?></p>
                <p>Job Salary : <?php echo $row[5]?></p>
                <p>Job Skills : <?php echo $row[6]?></p>
                <p>Job Qualification : <?php echo $row[8]?></p><br><hr class="border border-danger border-2 opacity-50">
                <?php
            }
        }
    ?>
                </from>
    </center>
</body>
</html>