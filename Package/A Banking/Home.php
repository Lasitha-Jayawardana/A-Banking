<?php session_start() ?>
<?php  if (isset($_POST['lsub'])){

         switch ($_POST['psw']){
            case '97':
             $_SESSION["username"]='Lasitha';
       break;

       case '02':
             $_SESSION["username"]='Chamil';
       break;

       case '25':
             $_SESSION["username"]='Harsha';
       break;
       case '49':
             $_SESSION["username"]='Mithun';
       break;
        case '27':

             $_SESSION["username"]='Sandaruwan';
       break;
       case '09':
             $_SESSION["username"]='Sharuka';
       break;

       case '33':
             $_SESSION["username"]='Uchitha';

       break;
       case '14':
             $_SESSION["username"]='Uminda';
       break;


         }




       } ?>
<?php
    if (empty($_SESSION["username"])){
        session_unset();
 session_destroy();
    header('location:https://sltclasith.000webhostapp.com/index.php');

       }
       ?>
<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temporary Data Collector</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <style >
         .topbox{

   text-align: center;
    background-color: #ffffff;
    height: auto;
    padding-top: 10px;
    line-height: 40px;
     overflow: hidden;
    z-index:  2;


}
.bank-logo{

       padding: 0.01em 14px;
          font-family: fontawesome;
    text-decoration: none;
    line-height: 1;

    font-size: 36px;
    letter-spacing: 3px;
    color: #555555;
    display: block;

    top: 14px;


}
   .bank-logo .green{

        color: #4CAF50;
    }
.bank-sub-logo{
    width: 100%;
    font-size: 10px;
    text-align: center;
    float: right!important;
    letter-spacing: 4px;
    display: block;
    }
    .header{

    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
    }
    #navbar{
      overflow: auto;
     white-space:nowrap;
      z-index: 5;
    background-color: #333;
    }
    #navbar a {

         display: inline-block;
         color: #f2f2f2;
         text-align: center;
           padding: 8px 10px;
          text-decoration: none;
          font-size: 17px;

    }
    #navbar a.kk:hover{

    background-color: #ddd;
    color: black;

    }
    #navbar a.active{

    background-color: #4CAF50;
    color: white;

    }
    .content{

    padding: 16px;
    }
    .sticky{

    position: fixed;
    top: 0;
    width: 100%;

    }
    .sticky + .content{

    padding-top: 60px;
    }

 .divimg{

       position: relative;
    /* outline-offset: 1px;
     outline-style: solid;
     outline-color: #08CC36;*//*  */
      margin: 5px;

 }
  i:hover{

    color: red;
    }

    button {
    background-color: #4CAF50;
    color: white;
    padding: 8px 10px;

    border: none;
    cursor: pointer;
    box-shadow: 5px 5px 19px -4px;
}
 button:hover {
    opacity: 0.8;
}
  </style>
  <style type="text/css">
  table {
    border-collapse: collapse;
    width: 100%;
    font-family: fontawesome;
       letter-spacing: 3px;
    color: #555555;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
  </style>
</head>

<body onload="myfun()">


      <div class="topbox">
  <a class="bank-logo">Hostal <span class="green">A Banking </span>System</a>

  <div class="bank-sub-logo" style="font-family:'Segoe UI',Arial,sans-serif">TEMPORY DATA COLLECTOR</div>
   </div>
<div style="position:-webkit-sticky;position: sticky;top: 0;z-index: 1;" id="navbar" ><a class="active kk" href="">Home</a>
<a class="kk" href="AR.php">Account Reminder</a>
<a style="float: right;height: 20px" href="Log_Out.php"><span style="color: #FFFFFF;"><i
style="overflow: auto;font-size: 22px;" class= "fa fa-sign-out"></i></span></a>
</div>


  <?php

        $total=0;
        include("DB.php");
 $con =    mysqli_connect($dbhost , $username , $password,$db);




      if (!$con) {
    die("Connection failed: " . mysqli_error($con));
}

 $query = "SELECT * FROM accSummary;";

     $result = mysqli_query($con ,$query ) ;


      $opt='';

       while($row=mysqli_fetch_assoc($result)){

   $opt .=   '<tr><td>'.$row['Name'].'</td>' ;


    if ($row['Amount'] >0){
               $opt .='<td>'.$row['Amount'] . '</td>' ;




            }  else{
              $opt .= '<td style="color : #E00000">'.$row['Amount'] . '</td>' ;
            }

    $opt .= '</tr>';
    $total = $total + $row['Amount'];
    $dd=date("Y/m/d");
     }
      $opt .= '<tr><td><hr></td><td><b><hr></b></td></tr>';
      $opt .= '<tr><td><b>Total</b></td><td><b>'.$total.'</b></td></tr>';

    ?>
    <br>




<fieldset style="padding-top: 15px" > <legend style="font-size: x-large" ><b style="color: #CC0000">Account Summary</b><span style="color: #CC7578; font-size: small"><sub><?php echo $dd; ?></sub></span></legend>




<table  id="tt">
  <tr>
<span style="font-size: 12pt">  <th>Name</th>
    <th>Savings</th></span>
  </tr>

    <?php echo $opt; ?>

</table>





</fieldset>

    <br><br><br>



<script>
function clickb(){
  document.getElementById("fisub").click();
}
  function bhover(){
  var bn =   document.getElementById("bnew");

  bn.style.opacity=0.8;

  }
  function bhovero(){
  var bn =   document.getElementById("bnew");

  bn.style.opacity=1;

  }

</script>
</body>
</html>