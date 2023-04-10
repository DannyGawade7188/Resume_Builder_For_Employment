<?php
include("./All_Database.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$fname=$_POST['fname'];
	$pnumber=$_POST['pnumber'];
	$email=$_POST['email'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
$sql="INSERT INTO signup_can(fname,pnumber,email ,uname,pass) 
		VALUES('$fname','$pnumber','$email','$uname','$pass')";
$con->exec($sql);
echo '<script>alert("Account Created SucessFully...!")</script>';
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

            input {
                height: 33px;
                width: 16rem;
                border-radius: 9px;
            }

            .hr1 a {
                text-decoration: none;

            }

            .button1 {
                width: 7rem;
                height: 2rem;
                background-color: #49be25;
                border-radius: 4px;
            }

            .button2 {
                width: 7rem;
                height: 2rem;
                background-color: #Dcd21e;
                border-radius: 4px;
            }
            </style>
        </head>
        <form method="POST">
            <center>

                <nav class="pati">
                    <h1>Sign Up Candidate</h1>
                </nav>
                <div class="rfrom">
                    <br>
                    <h1>Sign Up Candidate</h1><br>
                    <input type="text" name="fname" placeholder="Enter Your Full Name..." required><br><br>

                    <input Type="text" name="pnumber" placeholder="Enter Your Phone Number..." required><br><br>

                    <input Type="email" name="email" placeholder="Enter Your Email..." required><br><br>

                    <input Type="text" name="uname" placeholder="Create A New User Name..." required><br><br>

                    <input Type="password" name="pass" placeholder="Enter Your Password..." required><br><br>

                    <div class="hr1">
                        <hr><b><a class="a_link" href="Login_Can.php">Login....</a></b>
                        <hr>
                    </div><br>
                    <br><br>
                    <input class="button1" type="Submit" value="Login" style="">&nbsp;&nbsp;
                    <input class="button2" type="Reset" value="Reset" style="">

        </form>
    </body>

</html>