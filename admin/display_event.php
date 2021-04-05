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
          left: 285px;
          right: 275px;
          border: 2px solid black;
          position: absolute;
          top: 85%;
        }
        .submitButton:hover {
          background-color: darkgrey;
          color: black; 
        }
        table, th, td {
  border: 1px solid black;
  background-color: #f7e081;
}
  </style>
</head>

<body>
    <div>
        <h1>Event Creation</h1>
        <form class="EventForm" action="" method="POST">
        <table class= "tbl">

            <tr>
                <th>Event_Name</th>
                <th>Event_Date</th>
                <th>Event_Time</th>
                <th>Lname</th>
                <th>Category</th>
                <th>Description</th>
                <th>Contact_Phone</th>
                <th>Contact_Email</th>
                </tr>

            <?php


               
                $sql= "SELECT * From event_at";
                $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
                $db_select= mysqli_select_db($conn, 'events') or die(mysqli_error());

                $result = $conn->query($sql) or die($conn->error);
               
                $res = mysqli_query($conn,$sql);
                
                
                if($res==TRUE)
                {
                   

                    $count= mysqli_num_rows($res);
                   // echo $count;
                    if($count>0){
                      //  echo "hello";
                        while($rows=mysqli_fetch_assoc($res)){
                          
                            $Event_Name=$rows['Event_Name'];
                            $Event_Date=$rows['Event_Date'];
                            $Event_Time=$rows['Event_Time'];
                            $Lname=$rows['Lname'];
                            $Category=$rows['Category'];
                            $Description=$rows['Descriptions'];
                            $Contact_Phone=$rows['Contact_Phone'];
                            $Contact_Email=$rows['Contact_Email'];

                            ?>

            <tr>
            <td><?php echo $Event_Name; ?></td>
            <td><?php echo $Event_Date; ?></td>
            <td><?php echo $Event_Time; ?></td>
            <td><?php echo $Lname; ?></td>
            <td><?php echo $Category; ?></td>
            <td><?php echo $Description; ?></td>
            <td><?php echo $Contact_Phone; ?></td>
            <td><?php echo $Contact_Email; ?></td>
            </tr>

                            
                            <?php
                            
                            
                          

                        }


                    }
                    else{
                        echo "hola";
                    }

                }


            ?>

            </table >

</form>

           


     


    </div>

  
   <a href="Home.php"><button class="button homeButton" >HOME</button></a>
       
</body>
</html>