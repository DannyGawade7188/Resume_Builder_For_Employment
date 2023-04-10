<?php
include'./All_Database.php';
$j_id=$_POST['job_id'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
	<title>All Job Employee</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <style>
                .a_link{
                    text-decoration:none;
                }
            </style>
    </head>

    <body class="bg-success p-2 text-dark bg-opacity-25">
        <form action="" method="POST">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <center>
                <br><br><br>
                <?php
        $result=$con->query("select * from reg_job where j_id='$j_id';");
        if($result->rowCount()>0)
        {
            while($row=$result->fetch())
            {
                ?>
                <p>Title : <?php echo $row[1]?></p>
                <p>Post's : <?php echo $row[2]?></p>
                <p>Location : <?php echo $row[3]?></p>
                <p>Company Name : <?php echo $row[4]?></p>
                <p>Expected Salary : <?php echo $row[5]?></p>
                <p>Skill Required : <?php echo $row[6]?></p>
                <p>Experience Required : <?php echo $row[7]?></p>
                <p>Qualification : <?php echo $row[8]?></p><br>
                <button class="btn btn-outline-primary"><a class="a_link" href="Register_Can.php">Apply This Job</a></button>
                <?php
            }
        }
    ?>
        </form>
    </body>

</html>