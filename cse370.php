<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Project Activation Plan Mangement System</title>
		<link rel="stylesheet" href="externalStyle.css"/>
		<style>
				a:link, a:visited {
				background-color: #f44336;
				color: black;
				padding: 14px 25px;
				text-align: center;	
				text-decoration: none;
				display: inline-block;
			}
			a:hover, a:active {
				background-color: lime;
			}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: none;
			}
			li {
				float: left;
				border-right:1px solid #bbb;
				}
			li:last-child {
				border-right: none;
				}
			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			li a:hover:not(.active) {
				background-color: lime;
			}
			.active {
				background-color: lime;
			}
			html{
				background: url(background-1130505_960_720.jpg) no-repeat center fixed;
				background-size: cover;
			}
			h1.sansserif{
				font-family: Eras, Arial, sans-serif;
				font-weight: bold;
				font-style: italic;
			}
	</style>	
	</head>
	<body>
		<ul>
		<li><a href="cse370.php">Home</a></li>
		<li><a href="page02.php">Sign Up</a></li>
		</ul>
		<h1 style="color:#d9d9d9" class="sansserif">Project Activation Plan Mangement System</h1>
		<p style="color:#d9d9d9" ><label>Login</label>
		<input class="w3-input w3-border-0" type="text" ></p>
		<p style="color:#d9d9d9"><label>Password</label>
		<input class="w3-input w3-border-0" type="password"></p>
		<p><a href="submit.html">Sign In</a></p>
		<p style="color:#d9d9d9"><label>Not Registered?</label>
		<p><a href="page02.php">Register Now!</a></p>
	</body>
</html>