<?php 
    session_start();
    $user=$_SESSION['user'];
    include './All_Database.php';
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $j_id=$_POST['j_id'];
            $name=$_POST['name'];
            $vaccancy=$_POST['vaccancy'];
            $location=$_POST['location'];
            $company=$_POST['company'];
            $salary=$_POST['salary'];
            $skill=$_POST['skill'];
            $exp=$_POST['exp'];
            $qualification=$_POST['qualification'];

                $result=$con->prepare("UPDATE reg_job SET
                j_title='$name',j_vacancy='$vaccancy',j_location='$location',j_cmp_name='$company',j_salary='$salary',
                j_skills='$skill',j_exp='$exp',j_quali='$qualification' WHERE j_id='$j_id'");
                $result->execute();
                echo '<script>alert("Job Uadate Successfully...!")</script>';
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
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav><br><br>
            <center>
                <?php echo "<h2>"."Welcome ".$user.".</h2>"; ?>
                <br><br>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="j_id" placeholder="name@example.com">
                    <label for="floatingInput" class="label">Enter Job Id</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" placeholder="name@example.com">
                    <label for="floatingInput" class="label">Job Name</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="vaccancy" placeholder="Password">
                    <label for="floatingPassword">Vaccancy</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="location" placeholder="name@example.com">
                    <label for="floatingInput" class="label">Location</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="company" placeholder="Password">
                    <label for="floatingPassword">Company</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="salary" placeholder="name@example.com">
                    <label for="floatingInput" class="label">salary</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="skill" placeholder="Password">
                    <label for="floatingPassword">Skills</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="exp" placeholder="name@example.com">
                    <label for="floatingInput" class="label">Experience</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="qualification" placeholder="Password">
                    <label for="floatingPassword">Qualification</label>
                </div>

                <input type="Submit" value="Submit" class="btn btn-outline-primary">
            </center>

        </form>
    </body>

</html>