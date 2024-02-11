<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM data WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if (password_verify($password, $user_data['Password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: show.php");
                exit;
            } else {
                echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please enter a valid email')</script>";
    }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <h1>
            Happy World Travel:)
        </h1>
    <div class="container">
        <div class="box form_box">
         
        <header>Login</header>
        <form action="" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email"  autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">password</label>
                <input type="password" name="password" id="password"  autocomplete="off" required>
            </div>

            <div class="field input">
             
                <input  type="submit" class="btn"   name="submit" value="Login" required>
            </div>

            <div class="links">
                Dont't have account? <a href="./signup.php">sign up now</a>
                <a  href="./term.php"><p>Terms&Condition</p></a>
            </div>

        </form>

        </div>
        </div>
    </div>




    <style>
  
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        
        h1{
            font-family: "Playfair Display", serif; 
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30px;
            color: #fcfbe9;
            
        }

        .wrapper{
                /* display: flex;
                justify-content: center;
                align-items: center; */
                min-height: 100vh;
                background:rgba(39,39,39,0.4);
        }
      

        input{
            color: black; 
   width: 600px;
   background: rgba(255, 255,255,0.2);
   
        }
        input:hover{
            background: rgba(257, 257,257,0.50);

            /* box-shadow: 1px 50px 7px 1px rgba(0, 0,0,0.2); */
        }

        label{
            color: #fcfbe9;
            letter-spacing: 2px;
            font-family: "Playfair Display", serif;
            
        }

        body {
            /* background: #e4e9f7; */
            background: url(./plain.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    

        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
        }

        .box {
            /* background: #fdfdfd; */
            display: flex;
            padding: 25px 25px;
            flex-direction: column;
            border-radius: 20px;
            /* box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5); */
            width: 450px;
            margin: 0px 10px;
        }

        .box header {
            font-size: 25px;
            font-weight: 800;
            padding-bottom: 10px;
            border-bottom: 1px solid #fcfbe9;
            margin-bottom: 10px;
            letter-spacing: 2px;
            font-family: "Playfair Display", serif;
            color: #fcfbe9;
        }

        .box form .field {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;
        }

        .box form .input input {
            height: 40px;
            width: 100%;
            font-size: 16px;
            padding: 0 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }

        .btn {
            height: 35px;
            /* background: rgba(76, 66, 182, 0.808); */
            border-radius: 5px;
            /* color: #fff; */
            font-size: 15px;
            cursor: pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0px 10px;
            color: black;
            letter-spacing: 2px;
            font-family: "Playfair Display", serif;
            font-weight: 800;
        }

        .btn:hover {
            opacity: 0.82;
              box-shadow: 1px 50px 7px 1px rgba(0, 0,0,0.2);
        }

        .submit {
            width: 100%;
        }

        .links {
            color: #fcfbe9;
            /* font-weight: 800; */
            margin-bottom: 15px;
            font-family: "Playfair Display", serif;
        }
   
        a{
            font-family: "Playfair Display", serif;
            color: greenyellow;
            font-size: medium;
             font-weight: 800;
        
        }
    </style>



</body>
</html>