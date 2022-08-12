<?php
session_start();
    include("config.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
{
   // something was posted
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($email))

   {
   
     //read from database
     $query = "select * from anisa where username = '$username' limit 1";

     $result = mysqli_query($conn, $query);

    if($result)
    {
        if($result && mysqli_num_rows($result)>0)
       {
            $user_data=mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['password'] = $user_data['password'];

             
                header("Location: index.php");
                die;
            }
        }
    }
    echo "Wrong username or password!";

}else
{
 echo "Wrong username or password!";

}
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
</head>
<body>
   <style type="text/css">
       
       #text{
       height:25px;
       border-radius:5px;
       padding:4px;
       border:solid thin #aaa;
       width: 100%;
   }
   #button{

       padding:10px;
       width:100px;
       color:white;
       background-color: black;
       border:none;
   }
#box{
border:1px solid#fff;
margin:0 auto;
width:300px;
padding:20px;

}
body{
    background-image:url("../assets/img/8.jpg");
    background-repeat: no-repeat;
    height: 100vh;
    width:100%;
    overflow-y: hidden;
    overflow-x: hidden;
    background-position: center;
    background-size: cover;
}

</style>

<div id="box">
     <form method="post">
     <div style="font-size:20px;margin:10px; color: white;"><h1>Login</h1></div>
           <label for="username">Username</label>
           <input id="text" type="text"name="username"><br><br>
           <label for="email">Email</label>
           <input id="text" type="text"name="email"><br><br>
           <label for="password">Password</label>
           <input id="text" type="password"name="password"><br><br>
           <input id="button" type="submit"value="Login"><br><br>
           <p>Don't have an account?<a href="signup.php">Sign up here</a></p><br><br>
     </form>
</div>
</body>