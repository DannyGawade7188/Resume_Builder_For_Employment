<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
	include 'All_Database.php';
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$_SESSION['user']=$email;
	
$sql="select *from signup_emp where uname='$email' and pass='$pass'";
$result=$con->query($sql);
$cnt=$result->rowCount();
	if($cnt==1)
	{
		header("location: Home_Emp.php");
		echo '<script>alert("You Have SuccessFully Login...!")</script>';
	}
	else 
	{
		echo '<script>alert("User Name And Password Are Wrong...!")</script>';
	
				if (empty($_POST['email'])) 
				{
					echo '<script>alert("Enter A User Name...!")</script>'; 
				}
				if (empty($_POST['pass'])) 
				{
					echo '<script>alert("Enter A User Name...!")</script>'; 
				}
	}
}
	?>

<html>

    <body>

        <head>
            <style>
            .pati {
            block-size: 65px;
            background-color: darkgrey;
            margin-block: -5px;
        }

        .hr1 {
            background-color: #e9f5f9;
        }

        .rfrom {
            border: 2px solid black;
            border-radius: 49px;
            height: 35rem;
            width: 25rem;
            margin-top: 28px;
        }

        label {
            text-align: left;
            font-weight: bold;
            font-size: 18px;
        }

        input {
            height: 33px;
            width: 16rem;
            border-radius: 9px;
        }

        .a_link {
            text-decoration: none;
        }

        .button1 {
            width: 7rem;
            height: 2rem;
            background-color:#49be25 ;
            border-radius: 4px;
        }

        .button2 {
            width: 7rem;
            height: 2rem;
            background-color:#Dcd21e;
            border-radius: 4px;
        }
            </style>
        </head>
        <form method="POST">
            <center>

                <nav class="pati">
                    <h1>Login Employee</h1>
                </nav>
                <div class="rfrom">

                    <div class="image">
                        <img src="log_ima.png" alt="Login Picture Aahe" width="200" ; height="200" ;
                            style=" margin-top:22px;">
                    </div>
                    <br>
                    <label>Username</label><br><br>
                    <input type="text" name="email" placeholder="Enter Your UserName..." required><br><br>


                    <label>Password</label><br><br>
                    <input Type="password" name="pass" placeholder="Enter Your Password..." required><br><br>


                    <div class="hr1">
                        <hr>
                        <a href="SignUp_Emp.php" style="text-decoration:none">Create New Account....</a>
                        <hr>
                    </div><br>


                    <input class="button1" type="Submit" value="Login">&nbsp;&nbsp;
                    <input class="button2" type="Reset" value="Reset">

        </form>
    </body>

</html>