<?php
        include './All_Database.php';
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $j_id=$_POST['j_id'];   
            $result=$con->exec("DELETE FROM reg_job WHERE j_id='$j_id'");
            if($result==true)
            {
                echo '<script>alert("Job Deleted Successfully...!")</script>';
            }
            else
            {
                echo '<script>alert("Job Id Not Found...!")</script>';
            }
        }
    ?>

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
        .form-floating>label {
            left: 25rem;

        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext {
            padding: 1rem 4.50rem;
        }

        .form-control {
            width: 50%;
        }
        </style>

    </head>

    <body class="bg-success p-2 text-dark bg-opacity-25">
        <form action="" method="POST">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Nothing This Area</h5>
                    <span class="text-muted">Welcome.</span>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav><br>
            <center>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="j_id" placeholder="Password">
                    <label for="floatingPassword">Enter Your Job Id:</label>
                </div><br>
                <input type="Submit" value="Submit" class="btn btn-outline-primary">
            </center>
           
        </form>
    </body>

</html>