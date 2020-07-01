
     <?php
          $indx   = intval($_GET['q']);



       include("DB.php");
 $con =    mysqli_connect($dbhost , $username , $password,$db);


      if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



 $query = "UPDATE acc_reminder SET Ischecked=1 WHERE ID =$indx ;";

    $result = mysqli_query($con ,$query ) ;

         if ($result) {



    echo "New record created successfully";

} else {

    echo "Error: " . $result . "<br>" . mysqli_error($con);
}
   mysqli_close($con);

          ?>

