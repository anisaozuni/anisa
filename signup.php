<?php 
session_start();

    include("config.php");
    include("lib/functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($email))
        {
            $query = "insert into anisa (username,email,password) values ('$username','$email','$password')";

            mysqli_query($conn, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Signup</title>
</head>
<style type="text/css">
       
       *{
        padding: 0;
        margin:0;
        box-sizing:border-box;
    }  
.row{
    background:white;
    border-radius:30px;
    box-shadow:12px 12px 22px;
}

.inp{
    height:50px;
    width:70%;
    border:none;
    outline:none;
    border-radius:60px;
}
#button{
    height:50px;
    width:50%;
    border:none;
    outline:none;
    border-radius:60px;
    font-weight: 600px;
    background: rgb(223,56,56);
    color:white;
}
#button:hover{
    background:brown;
    transition:0.5s;
}
.signup img{
height:600px;
}

</style>

<body>
<section class="signup py-5 bg-light">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="assets/img/9.jpg" class="img-fluid" alt="...">
</div>
<div class="col-lg-7 text-center py-5">
    <h1>Sign up</h1>
    <form method="Post">
        <div class="form-row py-1 pt-5">
            <div class="offset-1 col-lg-10">
            <input id="text" type="text"name="username" class="inp" placeholder="Username"><br><br>
            </div>
            </div>
        <div class="form-row">
            <div class="offset-1 col-lg-10">
            <input id="text" type="text"name="email" class="inp" placeholder="Email"><br><br>
            </div>
            </div>
        <div class="form-row">
            <div class="offset-1 col-lg-10">
            <input id="text" type="password"name="password" class="inp" placeholder="Password"><br><br> 
            </div>
            </div>
        <div class="form-row py-3">
            <div class="offset-1 col-lg-10">
            <input id="button" type="submit" value="Sign up"><br><br>
            </div>
            </div>
           <a href="login.php">Click to Login</a><br><br>
     </form>
</div>
</div>
</div>
</section>
</body>