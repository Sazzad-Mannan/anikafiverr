<?php
session_start();
include "includes/db/config.php";

if(isset($_POST['register'])){

    $name=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    $description=mysqli_real_escape_string($conn,$_POST['des']);

    $pwd = password_hash($pass,PASSWORD_DEFAULT); 

    $filename= basename($_FILES['profile_pic']['name']);
    $filetype= pathinfo($filename,PATHINFO_EXTENSION);
    $image=$_FILES['profile_pic']['tmp_name'];
    $imgcontent=addslashes(file_get_contents($image));


    $sql= "INSERT INTO user (name, email, pass, description, image) VALUES ('".$name."', '".$email."', '".$pwd."', '".$description."', '".$imgcontent."')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['message']= "Registered Successfully. Login please.";
        header("Location: login.php");
        die();
    }

}

if(isset($_POST['login'])){

    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    
    $sql="SELECT * FROM user WHERE email='".$email."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['pass'])){

        $_SESSION['message']= "Login Successful.";
        $_SESSION['logged_email']=$email;
        header("Location: editprofile.php");
        die();
    }
    else{
        $_SESSION['message']= "Email or password didn't match.Try again.";
        header("Location: login.php");
        die();
    }

}


if(isset($_POST['update'])){

    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    $description=mysqli_real_escape_string($conn,$_POST['des']);

    $sql="SELECT * FROM user WHERE email='".$email."'";
    $result=mysqli_query($conn,$sql);
    
    if($result->num_rows>0){
        $_SESSION['message']= "This email already exist in data.";
        header("Location: login.php");
        die();
    }


    if ($_FILES['profile_pic']['size'] == 0 && $_FILES['profile_pic']['error'] == 0){
        
        $oldemail=$_SESSION['logged_email'];
        $sql= "UPDATE user SET email = '".$email."', description = '".$description."'  WHERE email = '".$oldemail."'";
        $result=mysqli_query($conn,$sql);
    }else{
        
        $filename= basename($_FILES['profile_pic']['name']);
        $filetype= pathinfo($filename,PATHINFO_EXTENSION);
        $image=$_FILES['profile_pic']['tmp_name'];
        $imgcontent=addslashes(file_get_contents($image));
        $oldemail=$_SESSION['logged_email'];
        $sql= "UPDATE user SET email = '".$email."', description = '".$description."', image='".$imgcontent."' WHERE email = '".$oldemail."'";
        $result=mysqli_query($conn,$sql);
    }


    


    $sql= "INSERT INTO user (name, email, pass, description, image) VALUES ('".$name."', '".$email."', '".$pwd."', '".$description."', '".$imgcontent."')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['message']= "Registered Successfully. Login please.";
        header("Location: login.php");
        die();
    }

}



?>