<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = mysqli_real_escape_string($con, $_POST['name']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $Age = mysqli_real_escape_string($con, $_POST['age']);
    $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validate email format
    if (!empty($Email) && filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $query = "INSERT INTO data (Username, Email, Age, Password) VALUES ('$Username', '$Email', '$Age', '$Password')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error registering user')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please Enter a Valid Email')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>


<div class="wrapper">
<h1>
        Welcome To The World Tour:
    </h1>
    <div class="container">
        <div class="box form_box">
            <header>Sign up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Username:<i class="bx bx-user"></i></label> 
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="email">Email:   <i class="bx bx-envelope"></i></label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password:<i class="bx bx-lock-alt"></i></label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already a member? <a href="./login.php">LogIn</a>
                     <a  href="./term.php"><p>Terms&Condition</p></a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>


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
