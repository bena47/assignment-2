<?php 
require_once("connect.php");

if(isset($_POST["submit"])){
    $name=mysqli_real_escape_string($conn,addslashes($_POST["name"]));
    $email=mysqli_real_escape_string($conn,addslashes($_POST['email']));
    $address=mysqli_real_escape_string($conn,addslashes($_POST['address']));
    $number=mysqli_real_escape_string($conn,addslashes($_POST['number']));
    $gender=mysqli_real_escape_string($conn,addslashes($_POST['gender']));
    
    $sql="INSERT INTO `forms`(`name`, `email`, `address`, `number`, `gender`) VALUES ('$name','$email','$password','$number','$gender')";
    $result=$conn->query($sql);
    
    if($result) {
        echo"successfully registered";
        header("location: index.php");
        exit();
    }
        else{
            echo"error";
        }
    
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registartion page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    

    
    
</head>
<body>
    <!--this is the main body-->
  <?php include_once("templates/nav.php");?>
    <div class="banner">
        <h1>BENA TECH CO.</h1> 
        </div>
    <center>
        <div class="form">
            <h1>Fill in your information</h1>
            <form action="">
            
                <input type="text" placeholder="Name" >
                <br>
                
                <input type="email" placeholder="Email">
                <br>
                
                <input type="text" placeholder="Address">
                <br>
                <input type="number" placeholder="Phonenumber">
                <br>
                Gender:
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="notsay">Not to say</option>
                </select>
                <br>
                <button>Submit</button>
    
    
    
    
            </form>
        </div>
    </center>
    
    
    
</body>




</html>
