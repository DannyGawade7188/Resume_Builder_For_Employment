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

        .search {
            border-radius: 20px;
            float: right;
            padding: 0px;
            margin: 12px;
        }
		.report{
			float:left;
			align
		}
        </style>
    </head>

    <body class="bg-success p-2 text-dark bg-opacity-25">
        <form action="" method="POST">
            
                <div class="topnav">
                    <a href="Home_Can.php">HOME</a>
                    <a href="Update_Can.php">UPDATE FORM</a>
                    <a class="active" href="Show_Report.php">SHOW REPORT</a>
                    <a href="Home.php">SIGN OUT</a>
                    <input class="search" type="search" name="search" placeholder="  Search your Job">
                </div>
                <?php
    include'./All_Database.php';
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $search=$_POST['search'];       
    $result=$con->query("select *from reg_job where j_title='$search'");
    if($result->rowcount()>0)
    {
        while($row=$result->fetch())
            {
              ?>
                <br>
                <br>
				<div class="report">
                <p>Job name : <?php echo $row[1]?></p>
                <p>Vaccancy : <?php echo $row[2]?></p>
                <p>Job Location : <?php echo $row[3]?></p>
                <p>Company Name: <?php echo $row[4]?></p>
                <p>Job Salary : <?php echo $row[5]?></p>
                <p>Job Skills : <?php echo $row[6]?></p>
                <p>Job Qualification : <?php echo $row[8]?></p><br>
                <hr class="border border-danger border-2 opacity-50">
				<div>
                <?php
            } 
    }
    }
        $result=$con->query("select * from reg_job ORDER BY j_id DESC");
        if($result->rowCount()>0)
        {   
            
            while($row=$result->fetch())
            {
                ?>
                <br>
                <br>
                <p>Job name : <?php echo $row[1]?></p>
                <p>Vaccancy : <?php echo $row[2]?></p>
                <p>Job Location : <?php echo $row[3]?></p>
                <p>Company Name: <?php echo $row[4]?></p>
                <p>Job Salary : <?php echo $row[5]?></p>
                <p>Job Skills : <?php echo $row[6]?></p>
                <p>Job Qualification : <?php echo $row[8]?></p><br>
                <hr class="border border-danger border-2 opacity-50">
                <?php
            }
        }
    ?>
                </from>
            </center>
    </body>

</html>