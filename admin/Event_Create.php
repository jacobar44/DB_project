<!doctype html>

<html lang="en">
<head>    
  <meta charset="utf-8">

  <title>User Login</title>
  <meta name="Page for creating new RSO" content="The HTML5 Herald">
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
      .EventForm{
          position: absolute;
          left: 355px;
          right: 275px;
          background-color: #f7e081;
          border: 3px;
          padding-top: 75px;
          padding-bottom: 125px;
          padding-left: 225px;
          padding-right: 150px;
          
      }
      form{
          text-align: left;
      }
      select, TEXTAREA{
          background-color: lightgrey;
      }
      input{
          position:relative;
          width: 50%;
          background-color: lightgrey;
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
          left: 55px;
          right: 275px;
          border: 2px solid black;
          position: absolute;
          top: 2%;
        }

        .homeButton:hover {
          background-color: darkgrey;
          color: black; 
        }
        .submitButton{
          background-color: #f7e081;;
          color: black;
          left: 275px;
          right: 275px;
          border: 2px solid black;
          position: absolute;
          top: 85%;
        }
        .submitButton:hover {
          background-color: darkgrey;
          color: black; 
        }
  </style>
</head>

<body>
    <div>
        <h1>Event Creation</h1>

        <form class="EventForm" action="" method="POST">
            
            <label for="EventCategory">Please select the event category:</label>
            <select name="EvenCategory" id="category">
              <option value="social">Social</option>
              <option value="fundraising">Fundraising</option>
              <option value="tech talks">Tech Talks</option>
              <option value="sports">Sports</option>
              <option value="lifeskills">Life Skills</option>
            </select>
            <br>
            <br>
            <label for="EventType">Please select the event type:</label>
            <select name="Eventype" id="type">
              <option value="public">Public</option>
              <option value="private">Private</option>
              <option value="rso">RSO</option>
            </select>
            
            <br><br>
            Event Name: <input type="text" name="eventName" class="inputBox">
            <br>
            <br>
            Event Time: <input type="time" name="eventTime" class="inputBox">
            <br>
            <br>
            Event Date: <input type="date" name="eventDate" class="inputBox">
            <br>
            <br>
            Location Name: <input type="text" name="Lname" class="inputBox">
            <br>
            <br>
            Event Address: <input type="text" name="eventAddress" class="inputBox">
            <br>
            <br>
            Event Description: <TEXTAREA type="text" name="content" ROWS="2" COLS="20"></TEXTAREA>
            <br>
            <br>
            Contact Phone Number: <input type="tel" name="phoneNum" class="inputBox"
                                placeholder="123-456-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            <br>
            <br>
            Contact Email Address: <input type="email" name="eventEmail" class="inputBox">
            <a href=#submit><button type="submit" name="submit" class="button submitButton">SUBMIT</button></a>
        </form>
    </div>
   <a href="Home.php"><button class="button homeButton" >HOME</button></a>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
 // echo  "Clicked";  


 $Lname=$_POST['Lname'];
 $Address=$_POST['eventAddress'];

 $sql="INSERT INTO locations SET
Lname='$Lname',
Address='$Address'
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

<?php 

if(isset($_POST['submit'])){
// echo  "Clicked";  

   //$username=$_POST['username'];
   $Event_Name=$_POST['eventName'];
   $Event_Date=$_POST['eventDate'];
   $Event_Time=$_POST['eventTime'];
   $Lname=$_POST['Lname'];
   $Description=$_POST['content'];
   $Category=$_POST['Eventype'];
   $Contact_Phone=$_POST['phoneNum'];
   $Contact_Email=$_POST['eventEmail'];



 $sql="INSERT INTO event_at SET
  Event_Name='$Event_Name',
  Event_Date='$Event_Date',
  Event_Time='$Event_Time',
  Lname='$Lname',
  Descriptions='$Description',
  Category='$Category',
  Contact_Phone='$Contact_Phone',
  Contact_Email='$Contact_Email'
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