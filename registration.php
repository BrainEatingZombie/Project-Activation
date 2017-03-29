<?php
session_start();
include 'functions.php';
$username="root";
$host="localhost";
$password=""; 
$db="user_registration";   //name of your database
$conn=new mysqli($host,$username,$password,$db);
if(!$conn)
die("could not connect to server");

if(isset($_POST['submit']))
{

                                      // table name customer
	$firstname=$_POST['first_name']; //attributes firstname, lastname, b_a_no, address, email, username, password 
	$lastname=$_POST['last_name'];
	$bank_account=$_POST['bank_account'];
	$address=$_POST['address'];
	$email_address=$_POST['email_address'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$check_password=$_POST['check_password'];

	if(isset($firstname) && $firstname!='')
	{
		if(isset($lastname) && $lastname!='')
		{
			if(isset($bank_account) && $bank_account!='')
			{
				if(isset($address) && $address!='')
				{
					if(isset($username) && $username!='')
					{
						if(isset($email_address) && $email_address!='')
						{
							if(isset($password) && $password!='')

							{
								if(isset($check_password) && $check_password==$password)
								{
									$sql="INSERT INTO customer(firstname,lastname,b_a_no,address,email,username,password) 
									VALUES('$firstname','$lastname','$bank_account','$address','$email_address','$username','$password')"; 
									$result=mysqli_query($conn,$sql);
									if($result)

									echo "Data added succesfully";
									else 

									echo "Data was not added!!";
									die();


								}
								phpAlert("passwords don't match!!");

							}

							phpAlert("password not set!!");
						}

						phpAlert("email address not set!!");

					}

				     phpAlert("username not set !!");
				}

				phpAlert("address not set!!");

			}

			phpAlert("bank account not set!!");
		}

		phpAlert("last name not set!!");
	}

	phpAlert("first name not set!!");


}
?>

<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml-transitional.dtd">
<html>
<head>
<title>
Download Games
</title>
</head>
<body>
<h1 class = "register">
Register
</h1>
<div class = "text">
If you are not a member yet then please register below <br /> <br />
<form action = "registration.php" method = "post"> <!--instead of using this "registration.php" you can put the name of the page where you want to redirect after completing the registration process-->
First Name : <br />
<input type = "text" name = "first_name" size = "50px"><br /><br />
Last Name : <br />
<input type = "text" name = "last_name" size = "50px"><br /><br />
Bank Account Number :<br />
<input type = "text" name = "bank_account" size = "50px"> <br /><br />
Address : <br /> 
<input type = "text" name = "address" size = "50px"><br /><br />
Email Address : <br />
<input type = "text" name = "email_address" size = "50px"><br /><br />
Username : <br />
<input type = "text" name = "username" size = "50px"><br /><br />
Password : <br />
<input type = "password" name = "password" size = "50px"><br /><br />
Please Confirm Your Password : <br />
<input type = "password" name = "check_password" size = "50px"><br /><br />
<input type = 'submit' name='submit' value = 'Submit'>
</form>
</div><!--end of text-->
</body>
</html>