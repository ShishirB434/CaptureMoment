<html>
<head>
    <title> Login </title>
    <style>
       body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('login2.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
    height: 100vh;
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.6); /* Light overlay to soften the background */
    z-index: 0;
}

.login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 380px;
    padding: 40px;
    background: #ffffff; /* Clean white background */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Softer shadow */
    transform: translate(-50%, -50%);
    z-index: 1;
    border-radius: 12px;
}

.login-box h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 26px;
}

.login-box input[type="text"], 
.login-box input[type="password"] {
    width: 100%;
    padding: 14px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    outline: none;
    color: #333;
    font-size: 16px;
    margin-bottom: 20px;
    border-radius: 6px;
    box-sizing: border-box;
    transition: border-color 0.3s ease, background-color 0.3s ease;
}

.login-box input[type="text"]:focus, 
.login-box input[type="password"]:focus {
    border-color: #3498db; /* Blue outline on focus */
    background-color: #fff;
}

.login-box input[type="submit"] {
    width: 100%;
    padding: 12px;
    background: #3498db; /* Light blue color for the button */
    border: none;
    border-radius: 6px;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-box input[type="submit"]:hover {
    background-color: #2980b9; /* Darker blue on hover */
}

.login-box a {
    color: #3498db;
    text-decoration: none;
    font-size: 14px;
    display: block;
    text-align: center;
    margin-top: 20px;
}

.login-box a:hover {
    color: #2980b9;
}

.avatar {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    position: absolute;
    top: -45px;
    left: calc(50% - 45px);
    border: 4px solid #fff; /* White border for the avatar */
}

p {
    font-size: 16px;
    color: #555;
}

#link {
    font-size: 14px;
    font-style: italic;
    color: #555;
}
</style>
 
</head>
    <body>
    <div class="login-box">
        <img class="avatar" src="images.jfif" alt="">
        <h1>Admin Login</h1>
		<form name="login" method="POST" autocomplete="off">
			 
           
		   <p>User Name</p>
            <input type="text" name="name" placeholder="Enter Admin's username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
			     
            
			
            <input type="submit" name="submit" value="Login">
            
			</form>
       </div>
    </body>
</html>
<?php
session_start();
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $query="select * from admin where username='$name' and password='$pass' ";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        $_SESSION['username'] = $name;
        header("Location: http://localhost/capture/admin.php");
    }
    else{
        echo '<script>alert("Invalid username or password! Please try again")</script>';
    }
}
?>