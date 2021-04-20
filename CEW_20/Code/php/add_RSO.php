

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
        <h1>Create RSO</h1>

        <form class="loginForm" action="" method="POST">
            
          
            
            <div class="fields">
            <br><br>

            RSO name: <input  type="text" name="RSO" class="inputBox">
            <br><br>
           Username: <input  type="text" name="RSOUser" class="inputBox">
            <br><br>
            University: <input  type="text" name="university" class="inputBox">

            <br><br>
            Email Domain: <input type="text" name="emaildomain" class="inputBox">
            <br>
            <br>
         
            
            <br>
            <input type="submit" name="submit" value="Create RSO">

    </div>

        </form>
    </div>
   <a href="newHome.php"><button class="button homeButton">HOME</button></a>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
 // echo  "Clicked";  

   $RSO=$_POST['RSO'];
$emaildomain=$_POST['emaildomain'];
$university=$_POST['university'];
$RSOUser=$_POST['RSOUser'];
 

//  if(){


 $sql="INSERT INTO rso_create SET

 RSO_Name='$RSO',
 Email_Domain='$emaildomain',
 University_Name='$university',
 Admin_Username='$RSOUser';

 ";
 

 $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select= mysqli_select_db($conn, 'events') or die(mysqli_error());

 $result = $conn->query($sql) or die($conn->error);;

//if($res==true){
//echo "Data Inserted";
//}
//else{
//   echo "Failed";
//}

//  }

}


?>

<!-- <?php include('../admin/constants.php'); ?> -->