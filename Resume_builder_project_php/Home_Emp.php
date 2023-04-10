<?php
session_start();
$user=$_SESSION['user'];
include'./All_Database.php';
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <body class="bg-success p-2 text-dark bg-opacity-25">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <center><br><br><br><br><br><br><br><br><br><br>
            <a href="Emp_Job.php"><button class="btn btn-outline-primary">Add Job</button></a>
            <a href="Update_Emp.php"><button class="btn btn-outline-primary">Update Old Job</button></a>
            <a href="Delete_Job.php"><button class="btn btn-outline-danger">Delete Old Job</button></a>
            <a href="All_Job_Emp.php"><button class="btn btn-outline-primary">See All Job</button></a>
        </center>
    </body>

</html>