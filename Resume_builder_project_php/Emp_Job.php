<?php 
        session_start();
        $user=$_SESSION['user'];
        include'All_Database.php';

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $name=$_POST['name'];
            $vaccancy=$_POST['vaccancy'];
            $location=$_POST['location'];
            $company=$_POST['company'];
            $salary=$_POST['salary'];
            $skill=$_POST['skill'];
            $exp=$_POST['exp'];
            $qualification=$_POST['qualification'];
            
            $result=$con->query("insert into reg_job(j_title,j_vacancy,j_location,j_cmp_name,j_salary,j_skills,j_exp,j_quali,emp_id) values('$name',$vaccancy,'$location','$company','$salary','$skill','$exp','$qualification','$user')");
            if($result==true)
            {
                echo '<script>alert("Job Add Successfully...!")</script>';
            }
            else
            {
                echo '<script>alert("Job Not Added...!")</script>';
            }
        }
        ?>

<html>

    <head>
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
        <form method="POST">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <center><br>
                <?php echo "<h2>"."Welcome ".$user.".</h2>"; ?><br><br>

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