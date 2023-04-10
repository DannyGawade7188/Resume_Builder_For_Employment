<?php
include'./All_Database.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
		$c_name=$_POST['c_name'];		
		$c_uname=$_POST['c_uname'];	
        $c_gender=$_POST['c_gender'];
		$c_dob=$_POST['c_dob'];
		$c_email=$_POST['c_email'];				
		$c_phoneno=$_POST['c_phoneno'];
		$c_address=$_POST['c_address'];				
		$c_city=$_POST['c_city'];
		$c_zip=$_POST['c_zip'];				
		$c_college_name=$_POST['c_college_name'];
		$c_insititute_name=$_POST['c_insititute_name'];
		$c_qualification=$_POST['c_qualification'];
		$c_department=$_POST['c_department'];
		$c_skills=$_POST['c_skills'];
	       
        $result=$con->prepare("UPDATE register_can SET c_name='$c_name',c_gender='$c_gender',c_dob='$c_dob',c_email='$c_email',c_phoneno='$c_phoneno',c_address='$c_address',c_city='$c_city',c_zip='$c_zip',c_college_name='$c_college_name',c_insititue_name='$c_insititute_name',c_qualification='$c_qualification',c_department='$c_department',c_skills='$c_skills' WHERE c_uname='$c_uname'");	
$result->execute();
$cnt=$result->rowCount();
if($cnt==1)
{
    echo '<script>alert("From Has Been Updated SucessFully...!")</script>';
}
else
{
    echo '<script>alert("From Has Been Not Updated...!")</script>';
}
}
?>
<html>

    <head>
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            width: 95vw;
            background: #6fd5e659;
            padding: 25px;
        }

        .container h1 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(59, 55, 55);
            font-size: 40px;
            margin-top: 5px;
            color: red;
        }

        .form-wrapper {
            margin: 15px;
            width: 100%;
        }

        .form {
            width: 90%;
        }

        #studentimage {
            height: 80px;
            width: 80px;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(59, 55, 55);
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            color: Black;
            font-size: 14px;
        }

        .form-item1 {
            margin: -19px;
            /* border: 2px solid black; */
            padding: 27px;
            float: right;
        }

        .form-item1 label {
            width: 150px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-item1 input {
            margin: 5px 15px;
            height: 22px;
            width: 100%;
            font-size: 13px;
            border: 1px black solid;
            border-radius: 5px;
        }

        .form-item1 select {
            margin: 5px 0px;
            width: max-content;
        }

        .form-item {
            display: flex;
            margin: auto;
            align-items: center;
            width: 70%;
        }

        .form-item label {
            width: 150px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-item input {
            margin: 5px 15px;
            height: 22px;
            width: 100%;
            font-size: 13px;
            border: 1px black solid;
            border-radius: 5px;
        }

        .form-item select {
            margin: 5px 0px;
            width: max-content;
        }

        .genders {
            display: flex;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .genders input {
            width: 20px;
        }

        .department {
            display: flex;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .department input {
            width: 20px;
        }

        hr {
            margin-top: 15px;
            width: 80%;
        }

        h3 {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .same-perm {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 13px;
            margin: 5px 105px;
        }

        .register {
            margin: 25px;
            background: #1e90ff;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 7px 20px;
            border-radius: 5px;
            color: #fbfbfb;
            border: 0;
            cursor: pointer;
        }

        .register:hover {
            color: #3a3636;
        }

        @media screen and (max-width: 640px) {
            .container {
                width: 90vw;
                padding: 10px 5px;
            }

            .form-item label {
                font-size: 14px;
            }

            .form-item input {
                margin: 5px 10px;
                font-size: 12px;
            }

            .genders {
                margin-left: 10px;
                font-size: 13px;
            }

            .genders input {
                width: 15px;
            }

            .department {
                margin-left: 10px;
                font-size: 13px;
            }

            .department input {
                width: 15px;
            }

            .same-perm {
                font-size: 13px;
                margin: 5px 50px;
            }

            .register {
                margin: 25px;
                font-size: 15px;
                padding: 7px 10px;
            }
        }
        </style>
    </head>

    <body>
        <form method="POST">
            <div class="topnav">
                <a href="Home_Can.php">HOME</a>
                <a class="active" href="Update_Can.php">UPDATE FORM</a>
                <a href="Show_Report.php">SHOW REPORT</a>
                <a href="Home.php">SIGN OUT</a>
            </div>
            <div class="container">
                <h1>Candidate Updation From</h1>
                <div class="form-wrapper">
                    <form method="POST">
                        <div class="form-item">
                            <label>Enter Your Username:</label>
                            <input type="text" name="c_uname" placeholder="Enter Your User Name" required>
                        </div>
                        <div class="form-item">
                            <label>Student Name:</label>
                            <input type="text" name="c_name" placeholder="Full Name" required>
                        </div>
                        <div class="form-item">
                            <label>Gender:</label>
                            <div class="genders">
                                <p>Male</p> <input type="radio" name="c_gender" value="male" required>
                                <p>Female</p> <input type="radio" name="c_gender" value="female" required>
                                <p>Other</p> <input type="radio" name="c_gender" value="other" required>
                            </div>
                        </div>
                        <div class="form-item">
                            <label>Date of Birth</label>
                            <input type="date" name="c_dob" required>
                        </div>
                        <div class="form-item">
                            <label>E-mail:</label>
                            <input type="email" name="c_email" placeholder="email@xyz.com" required>
                        </div>
                        <div class="form-item">
                            <label>Tel/Mobile:</label>
                            <input type="text" name="c_phoneno" placeholder="XXX XXX XXXX" maxlength="10" required>
                        </div>
                        <hr>
                        <h3>Student Address</h3>
                        <div class="form-item">
                            <label>Enter Your Adderss:</label>
                            <input type="text" name="c_address" placeholder="Address" required>
                        </div>
                        <div class="form-item">
                            <label>City:</label>
                            <input type="text" name="c_city" placeholder="City" required>
                        </div>
                        <div class="form-item">
                            <label>Zip Code:</label>
                            <input type="text" name="c_zip" placeholder="Zip Code" maxlength="6" required>
                        </div>
                        <hr>
                        <h3>Eductional Information</h3>
                        <div class="form-item">
                            <label>College Name:</label>
                            <input type="text" name="c_college_name" placeholder="College Name" required>
                        </div>
                        <div class="form-item">
                            <label>Insititue Name:</label>
                            <input type="text" name="c_insititute_name" placeholder="Insitiute Name" required>
                        </div>

                        <div class="form-item">
                            <label>Qualifiaction:</label>
                            <div class="genders">
                                <p>High School</p> <input type="radio" name="c_qualification" value="high" required>
                                <p>Bachelor</p> <input type="radio" name="c_qualification" value="Bachelor" required>
                                <p>Masters</p> <input type="radio" name="c_qualification" value="Masters" required>
                                <p>Phd</p> <input type="radio" name="c_qualification" value="phd" required>
                            </div>
                        </div>
                        <div class="form-item">
                            <label>Department:</label>
                            <div class="department">
                                <p>Computer </p> <input type="radio" name="c_department" value="Computer Science"
                                    required>
                                <p>Electrical Engineering</p> <input type="radio" name="c_department"
                                    value="Electrical Engineering" required>
                                <p>Computer Engineering</p> <input type="radio" name="c_department"
                                    value="Computer Engineering" required>
                                <p>Software Engineering</p> <input type="radio" name="c_department"
                                    value="Software Engineering" required>
                                <p>Civil Engineering</p> <input type="radio" name="c_department"
                                    value="Civil Engineering" required>
                            </div>
                        </div>
                        <div class="form-item">
                            <label>Enter Your Skills:</label>
                            <input type="text" name="c_skills" placeholder="C , PHP , JAVA" required>
                        </div>
                        <center>
                            <button class="register" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </form>
    </body>

</html>