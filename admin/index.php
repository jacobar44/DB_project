


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
   
     
      input{
          position:relative;
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
          left: 655px;
          right: 275px;
          border: 2px solid black;
          position: absolute;
          top: 85%;
        }

        .homeButton:hover {
          background-color: darkgrey;
          color: black; 
        }
  </style>
</head>

<body>
    <div>
        <h1>User Login</h1>

        <form class="loginForm" action="" method="POST">
            
            <label for="userType"><u>Please select the user:</u></label>
            <select name="userType" id="users">
              <option value="super admin">Super Admin</option>
              <option value="admin">Admin</option>
              <option value="student">Student</option>
            </select>
            
            <br><br>
            Username: <input type="text" name="username" class="inputBox">
            <br>
            <br>
            Password: <input type="password" name="password" class="inputBox">
            <br>
            <br>
            <i><a href="ForgotPassword.html">Forgot Password</a></i>

            <input type="submit" name="submit" value="Add User">



        </form>
    </div>
   <a href="Home.html"><button class="button homeButton">HOME</button></a>
</body>
<?php 

if(isset($_POST['submit'])){
 // echo  "Clicked";  

   $username=$_POST['username'];
 $password=$_POST['password'];


 $sql="INSERT INTO users SET
 Email='$username',
 Password='$password'
 ";
 

 $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select= mysqli_select_db($conn, 'events') or die(mysqli_error());

 $result = $conn->query($sql) or die($conn->error);

//if($res==true){
//echo "Data Inserted";
//}
//else{
//   echo "Failed";
//}

}


?>