

<html lang="en">
<head>    
  <meta charset="utf-8">

  <title>User Login</title>
  <meta name="Page for the User Login" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>
      h1{
          text-align: center;
      }
      body{
          background-color: lightgrey;
          text-align: center;
      }
      .loginForm{
          position: absolute;
          left: 275px;
          right: 275px;
         background-color: #f7e081;
          border: 3px;
          padding-top: 75px;
          padding-bottom: 125px;
          padding-left: 50px;
          padding-right: 50px;
          
      }
      input{
          position:relative
          width: 50%;
      }
      label{
          font-size: 20px;
      }
      .button {
          border: none;
          color: white;
          padding: 9px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
        }

        .homeButton{
          background-color: #f7e081;;
          color: black;
          left: 580px;
          right: 275px;
          border: 2px solid black;
          position: absolute;
          top: 85%;
        }

        .homeButton:hover {
          background-color: darkgrey;
          color: black; 
        }
        .fields{
            
        }
  </style>
</head>

<body>
    <div>
        <h1>New User</h1>

        <form class="loginForm" action="" method="POST">
            
            <label for="userType">Please select the user:</label>
            <select name="userType" id="users">
              <option value="super admin">Super Admin</option>
              <option value="admin">Admin</option>
              <option value="student">Student</option>
            </select>
            <div class="fields">
            <br><br>

            Full Name: <input  type="text" name="name" class="inputBox">

            <br><br>
            University: <input  type="text" name="university" class="inputBox">

            <br><br>
            Username: <input type="text" name="username" class="inputBox">
            <br>
            <br>
            Password: <input type="password" name="password" class="inputBox">
            <br>
            <br>
            Email: <input type="text" name="email" class="inputBox">
            <br>
            <br>

            <i><a href="login.php">Have an account? Login here</a></i>
            <br>
            <br>
            <input  type="submit" name="submit" value="Add User">

    </div>

        </form>
    </div>
   <a href="Home.php"><button class="button homeButton">HOME</button></a>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
 // echo  "Clicked";  


 $university=$_POST['university'];


 $sql="INSERT INTO university SET
University_Name='$university';
 ";



 $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select= mysqli_select_db($conn, 'events') or die(mysqli_error());

 $result = $conn->query($sql);

//if($res==true){
//echo "Data Inserted";
//}
//else{
//   echo "Failed";
//}

}


?>

<?php 

if(isset($_POST['submit'])){
 // echo  "Clicked";  



   $username=$_POST['username'];
$password=$_POST['password'];
 $name=$_POST['name'];
 $Cat_Level=$_POST['userType'];
 $university=$_POST['university'];
 $Email=$_POST['email'];


 $sql="INSERT INTO users SET
 Username='$username',
 Password='$password',
 Name='$name',
 Cat_Level='$Cat_Level',
 University_Name='$university',
Email='$Email';
 ";
 

 $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select= mysqli_select_db($conn, 'events') or die(mysqli_error());

 $result = $conn->query($sql) or die($conn->error);



}

?>

<php

?>




