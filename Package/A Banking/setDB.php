<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temporary Data Collector</title>

</head>

<body>

       <?php

 INCLUDE("DB.php");
 $con =    mysqli_connect($dbhost , $username , $password,$db);


      if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

  $name =$_POST['pname'];
  $date = $_POST['sdate'];




   if (isset($_POST['submitd'])){
       $dtype = $_POST['dtype'];
        $damount = $_POST['damount'];
         $type = 'Debit';


     $qq = "SELECT Amount AS amu FROM accSummary WHERE Name ='$name' ;";
     $r = mysqli_query($con,$qq);
     $query ="";
     $ro=mysqli_fetch_array($r);

          $ee=$ro['amu'] + $damount;
         $query .= "UPDATE accSummary SET Amount=$ee WHERE Name ='$name' ;";






        $query .= "INSERT INTO acc_reminder(ID,Name,Date,Amount,Type,Money_Type)
     VALUES(NULL,'$name','$date',$damount,'$type','$dtype');
               ";

   }
    elseif (isset($_POST['submitc'])){
       $camount = $_POST['camount'];
          $type = 'Credit';



             $qq = "SELECT Amount AS amu FROM accSummary WHERE Name ='$name' ;";
     $r = mysqli_query($con,$qq);
     $query ="";
     $ro=mysqli_fetch_array($r);

          $ee=$ro['amu'] - $camount;
         $query .= "UPDATE accSummary SET Amount=$ee WHERE Name ='$name' ;";




       $query .= "INSERT INTO acc_reminder(Date,Name,Type,Amount)
     VALUES('$date','$name','$type',$camount*(-1));
               ";

   }  elseif (isset($_POST['submitt'])){
       $tname = $_POST['tname'];
       $tamount = $_POST['tamount'];
       $treason = $_POST['treason'];
        $type = 'Transfer';

        $query ="";





     $qq = "SELECT Amount AS amu FROM accSummary WHERE Name ='$tname' ;";
     $r = mysqli_query($con,$qq);

     $ro=mysqli_fetch_array($r);

          $ee=$ro['amu'] + $tamount;
         $query .= "UPDATE accSummary SET Amount=$ee WHERE Name ='$tname' ;";




       $qq = "SELECT Amount AS amu FROM accSummary WHERE Name ='$name' ;";
     $r = mysqli_query($con,$qq);

     $ro=mysqli_fetch_array($r);

          $ee=$ro['amu'] - $tamount;
         $query .= "UPDATE accSummary SET Amount=$ee WHERE Name ='$name' ;";


       $query .= "INSERT INTO acc_reminder(Date,Name,Money_Type,Amount,Reason,Type)
     VALUES('$date','$name','$tname',$tamount*(-1),'$treason','$type');
               ";

   } elseif (isset($_POST['submite'])){

       $eamount = $_POST['eamount'];
       $ereason = $_POST['ereason'];
         $type = 'Expensive';

       if (!empty($_POST["epartners"])){
         $partners = implode("|",$_POST["epartners"]);


       }
     $ee=0;
     $qq = "SELECT Name,Amount FROM accSummary";
     $r = mysqli_query($con,$qq);
     $query ="";
     while($ro=mysqli_fetch_assoc($r)){
         $vv=$ro['Name'];

         $ww=$_POST[$vv];
         $rr=$ro['Amount'];
         $eee=$rr - $ww ;
         $query .= "UPDATE accSummary SET Amount=$eee WHERE Name ='$vv' ;";
        if ($name==$vv){
          $ee=$eee;
        }
     }

         $query .= "INSERT INTO acc_reminder(Date,Name,Type,Amount,Reason,Member,Money_Type)
     VALUES('$date','$name','$type',$eamount*(-1),'$ereason','$partners','$ww');
               ";
   }


     $result = mysqli_query($con ,$query ) ;

     if ($result) {



    echo "<script>alert('Your Current Account Balance Is : ".$ee."'); </script>";

} else {

    echo "Error: " . $result . "<br>" . mysqli_error($con);
}
   mysqli_close($con);




 if (isset($_POST['submitd'])){
if ($dtype == 'As Goods'){

 echo '<script>

   window.location.href = "AR.php?examount='.$damount.'&exdate='.$date.'";
   exit();
   </script>';
   }else{
      echo '<script>

   window.location.href = "AR.php";
   exit();
   </script>';
   }
   } else{
      echo '<script>

   window.location.href = "AR.php";
   exit();
   </script>';
   }

     ?>
</body>
    <!--  <script>alert('Update successfully ".$ee."'); </script>-->
</html>