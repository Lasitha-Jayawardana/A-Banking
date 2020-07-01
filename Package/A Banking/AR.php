<?php session_start() ?>
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
<link rel="stylesheet" href="dist/pretty-checkbox.min.css" />

  <style>
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
    table {

    border-collapse: collapse;
    width: 100%;
     font-family: fontawesome;
}

th{
   padding: 4px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-family: fontawesome;
}

 td {
     font-size: smaller;
    padding: 4px;
    padding-bottom: 4px;
    padding-top: 4px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-family: fontawesome;
}

tbody tr:hover {background-color:#f5f5f5;}

 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;

}

/* Modal Content/Box */
.modal-con {
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 15px;

    margin-bottom: 35vw;
    background-color: #fefefe;
    margin: 0 auto 15%; /* 15% from the top and centered */
   /* border: 4px solid #4CAF50;
*/    border-radius: 4px;

    width: 80%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
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


.close {
    position: absolute;
    right: 15px;
    top: 2px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

div{

/*outline-color: #CC0000;
outline-style: solid;*/
}
   /* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 1s, fadeout 1s 2.5s;
    animation: fadein 1s, fadeout 1s 9.0s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

  /* Dropdown Button */
.dropbtn {
    background-color: #3498DB;
    color: white;
    border-radius: 3px;
    border: none;
    cursor: pointer;
    padding-bottom: 1px;
    padding-top: 1px;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-bottom: 30vw;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 5px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
   i:hover{

    color: red;
    }
    </style>



</head>

<body onload="money()">
       <?php


      include("DB.php");
 $con =    mysqli_connect($dbhost , $username , $password,$db);




      if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

 $query = "SELECT * FROM acc_reminder ORDER BY Ischecked DESC,Date ASC;";

     $result = mysqli_query($con ,$query ) ;
           $check =mysqli_num_rows($result);


 ?>
   <div class="topbox">
  <a class="bank-logo">Hostal <span class="green">A Banking </span>System</a>

  <div class="bank-sub-logo" style="font-family:'Segoe UI',Arial,sans-serif">TEMPORY DATA COLLECTOR</div>
   </div>
<div id="navbar" ><a class="kk"  href="Home.php">Home</a>
<a class="active kk" href="">Account Reminder</a>
<a style="float: right;height: 20px" href="Log_Out.php"><span style="color: #FFFFFF;"><i
style="overflow: auto;font-size: 22px;" class= "fa fa-sign-out"></i></span></a>

<!--<a href="">Loan Reminder</a>-->
</div>
  <br>
   <table style="position:-webkit-sticky;position: sticky;top: 0;z-index: 1;">
       <thead style="font-family: fontawesome;
    text-decoration: none;
    line-height: 2;


    letter-spacing: 3px;color: #F1F1F1;background-color: #5F5F5F;">
  <tr >
      <th hidden="hidden"></th>
    <th style="width: 27%;padding-right: 3%;">Date</th>
    <th style="width: 25%;padding-right: 4%;">Name<br></th>
    <th style="padding-left: 3%;">Type</th>
    <th>&nbsp;&nbsp;$$.$$&nbsp;</th>
    <th style="width: 5%;"></th>
  </tr>  </thead>
   </table>
   <table>
       <tr hidden="hidden"></tr>
       <tbody >
     <?php

   if($check>0){
               while($row=mysqli_fetch_assoc($result)){


  echo '<tr>';
                 echo '<td hidden="hidden">'.$row['ID'].'</td><td style="width: 25%;padding-right: 3%;">'.$row['Date'].'</td>
                    <td style="width: 25%;padding-left: 1%;margin-left:1%;">';
           if($row['Type']=='Transfer'){
             echo $row['Name'];
            echo '<br><sub style="font-size: x-small;color: #ABABAB">TO : ('.$row['Money_Type'].')</sub>';
    }elseif ($row['Type']=='Expensive') {
           echo '<select class="dropbtn" style = "width:65px;font-size: smaller; "><option >'.$row['Name'].'</option>';

     $member=explode("|",$row['Member']);
    foreach($member as $mem){
       echo '<option disabled="disabled" >'.$mem.'</option>';
    }
  echo '</select>';
    } else{
        echo $row['Name'];
    }

  echo '</td> <td>'.$row['Type'];
    if($row['Type']=='Debit'){
        echo '<br><sub style="font-size: x-small;color: #ABABAB">'.$row['Money_Type'].'</sub>';
        }elseif($row['Type']=='Expensive'){
          echo '<br><sub style="font-size: x-small;color: #ABABAB">'.$row['Reason'].'</sub>';

        } elseif($row['Type']=='Transfer'){
          echo '<br><sub style="font-size: x-small;color: #ABABAB">'.$row['Reason'].'</sub>';

        }
        echo '</td>';



            if ($row['Amount'] >0){
                echo '<td>'.$row['Amount'] . '' ;




            }  else{
               echo '<td style="color : #E00000">'.$row['Amount'] . '' ;
            }
                   if ($row['Type']=='Expensive'){
                 echo '<br><sub style="font-size: x-small;color: #ABABAB">'.$row['Money_Type'].'</sub></td>';
        } else{

             echo '</td>';
        }
                     echo '<td style="width: 10%;">';
          if ($row['Ischecked']==0){
              echo '<div style="left:40%" class="pretty p-default p-round p-thick"><input type="checkbox" class="tc" onchange="tableset(this)"
               value=1 name="Ischecked"  ><div class="state p-success-o">
            <label></label></div></div>';
          } else{
               echo '<div style="left:40%;" class="pretty p-default p-round p-thick"><input class="tc" type="checkbox" name="Ischecked" onchange="tableset(this)" checked><div class="state p-success-o">
            <label></label></div></div>';
          }

                     echo '</td>
                </tr>';

                 }

           }

 mysqli_close($con);
?>
  </tbody>

</table><br><br><br><br>
 <style>
 label{

 position: absolute;
 }

 </style>

 <button onclick="document.getElementById('id01').style.display='block'"
 style="position: fixed; bottom: 25px; right: 13px;">Add New</button>
  <div id="snackbar">Some text some message..</div>

 <div class="modal animate" id = "id01">
   <div class="modal-con" style="height: auto;">
      <div style="overflow: visible;position: relative;">
          <span onclick="document.getElementById('id01').style.display='none'" title="Close Modal" class="close">&times;</span>
      </div>
      <h2 style="text-align: center;padding-top: 8px;"><?php echo $_SESSION["username"] ?></h2>



   <label style=""> &nbsp;&nbsp;Select Date : </label>

       <?php if (isset($_GET['examount'])){
        echo '<input class="dropbtn" id="dateselecter" form="form4" style="margin-left: 30vw;width: auto;"
     name="sdate" type="date" required value='.$_GET["exdate"].'>';
       }else{
         echo '<input class="dropbtn" id="dateselecter" form="form4" style="margin-left: 30vw;width: auto;"
     name="sdate" type="date" required />';
            }
        ?>
 <br>
    <br>
    <input id="nameselecter" type="hidden" name="pname" form="form4" value="<?php echo $_SESSION["username"] ?>"/>
    <div style="display: flex ; flex-wrap: wrap; justify-content: space-around;">
         <div style=" padding-bottom: 10px;" ><div style="" class="pretty p-default p-curve"><input name="rad" type="radio" onclick="setreq('form2');document.getElementById('id03').style.display='block';
         document.getElementById('id05').style.display='none';document.getElementById('id04').style.display='none';document.getElementById('id02').style.display='none';"
           /><div class="state p-success-o">
            <label>Credit</label></div></div></div>
         <div style=" padding-bottom: 10px;"><div style="" class="pretty p-default p-curve"><input name="rad" type="radio" onclick="setreq('form1');document.getElementById('id03').style.display='none';
         document.getElementById('id05').style.display='none';document.getElementById('id04').style.display='none';document.getElementById('id02').style.display='block';"
          /><div class="state p-success-o">
            <label>Debit</label></div></div></div>
         <div style=" padding-bottom: 10px;"><div style="" class="pretty p-default p-curve"><input name="rad" type="radio" onclick="setreq('form3');document.getElementById('id03').style.display='none';
         document.getElementById('id04').style.display='block';document.getElementById('id05').style.display='none';document.getElementById('id02').style.display='none';"
         /><div class="state p-success-o">
            <label>Transfer</label></div></div></div> <br>
          <div style=" padding-bottom: 10px;padding-top: 10px;" ><div style="" class="pretty p-default p-curve"><input name="rad" type="radio" onclick="setreq('form4');document.getElementById('id03').style.display='none';
         document.getElementById('id04').style.display='none';document.getElementById('id05').style.display='block';document.getElementById('id02').style.display='none';"
          checked/> <div class="state p-success-o">
            <label>Expensive</label></div></div></div>
    </div> <br>

    <form  id="form1" action="setDB.php" method="post">
    <fieldset id="id02"  style="padding-top: 15px;display: none;" >
         <legend style="font-size: x-large" ><b style="color: #CC0000">Debit</b></legend>
      <label for="">Amount : </label><input style="margin-left: 25vw; width: 25%;" size="" type="number"  step="0.01" name="damount" required="required"/><br>
      <br><label for="">Type : </label> <select class="dropbtn" style="margin-left: 25vw;" name="dtype">
          <option value="By Cash">By Cash</option>
          <option value="As Goods">As Goods</option>
          <option value="As hosfee">As Hostel fee</option>
      </select>
      <br><br><div style="position: static;overflow: auto;"  >
         <button  style="position: static;float: right;margin: 5px;" name="submitd" type="submit" value="Save">Save</button>

    </div>
    </fieldset>
            </form>

    <form id="form2" action="setDB.php" method="post">
    <fieldset  id="id03" style="padding-top: 15px;display:none ;" >
         <legend style="font-size: x-large" ><b style="color: #CC0000">Credit</b></legend>
      <label for="">Amount : </label><input name="camount" style="margin-left: 25vw;width: 25%" type="number" step="0.01" required="required"/><br> <br>
     <br> <div style="position: static;overflow: auto;"  >

        <button style="position: static;float: right;margin: 5px;" name="submitc" type="submit" value="Save">Save</button>
    </div>
    </fieldset>
          </form>

    <form id="form3" action="setDB.php" method="post">
    <fieldset  id="id04" style="padding-top: 15px;display: none;" >
         <legend style="font-size: x-large" ><b style="color: #CC0000">Transfer</b></legend>
      <label for="">From :</label>
      <label style="margin-left: 22vw;"><?php echo $_SESSION["username"] ?></label><br><br><label for="">To : </label>
      <select class="dropbtn" style="margin-left: 25vw;" name="tname">
          <option value="Lasitha">Lasitha</option>
          <option value="Chamil">Chamil</option>
          <option value="Harsha">Harsha</option>
          <option value="Mithun">Mithun</option>
          <option value="Sandaruwan">Sandaruwan</option>
           <option value="Sharuka">Sharuka</option>
          <option value="Uchitha">Uchitha</option>
          <option value="Uminda">Uminda</option>
      </select> <br><br>
        <label for="">Amount : </label><input name="tamount" style="margin-left: 25vw;width: 25%" type="number" step="0.01" required="required"/><br><br>
        <label for="">Reason : </label><input name="treason" style="margin-left: 25vw;width: 25%" type="text" /><br>
         <br>  <div style="position: static;overflow: auto;"  >

       <button style="position: static;float: right;margin: 5px;" name="submitt" type="submit" value="Save">Save</button>
    </div>
    </fieldset>
          </form>

    <form id="form4" action="setDB.php" method="post" onsubmit="enable()">
     <fieldset id="id05"  style="padding-top: 15px;" >
         <legend style="font-size: x-large" ><b style="color: #CC0000">Expensive</b></legend>
       <label for="">Amount : </label>

       <?php if (isset($_GET['examount'])){
        echo '<input  onchange="money()" id="eval" name="eamount" style="margin-left: 25vw; width: 25%;" type="number"  step="0.01" required="required" value='.$_GET["examount"].'>';
       }else{
      echo '<input  onchange="money()" id="eval" name="eamount" style="margin-left: 25vw; width: 25%;" type="number"  step="0.01" required="required">';
       }
        ?>
        <br><br>
        <label >Partners :  </label>
       <div style="margin-left: 25vw;" class="dropdown">
   <select  onchange="money()" onclick="" class="dropbtn">

        <option id="auto" selected="selected" value="auto">Input Type : Auto</option>
          <option id="manual" value="manual">Input Type : Manual</option>    </select>
  <div >
          <a class="aa"><div style="margin-top: 15px;" class="pretty p-default p-curve p-thick"><input onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Lasitha"checked="checked"/>
           <div class="state p-success-o">
            <label>Lasitha</label></div></div><input disabled="disabled" name="Lasitha" style="margin-left: 25px;width:100px; " type="number"  step="0.01" ></a>
          <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Chamil" checked="checked" />
          <div class="state p-success-o">
            <label>Chamil</label></div></div> <input disabled="disabled" name="Chamil" style="margin-left: 25px; width:100px; " type="number"  step="0.01" ></a>
          <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Harsha"checked="checked"/>
          <div class="state p-success-o">
            <label>Harsha</label></div></div><input disabled="disabled" name="Harsha" style="margin-left: 25px; width:100px; " type="number"  step="0.01" ></a>
           <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Mithun"checked="checked"/>
           <div class="state p-success-o">
            <label>Mithun</label></div></div> <input disabled="disabled" name="Mithun" style="margin-left: 25px; width:100px; " type="number"  step="0.01" > </a>
           <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Sandaruwan"checked="checked"/>
           <div class="state p-success-o">
            <label>Sandaruwan</label></div></div><input disabled="disabled" name="Sandaruwan" style="margin-left: 25px;width:100px; " type="number"  step="0.01" > </a>
           <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Sharuka"checked="checked"/>
           <div class="state p-success-o">
            <label>Sharuka</label></div></div>  <input disabled="disabled" name="Sharuka" style="margin-left: 25px; width:100px; " type="number"  step="0.01" > </a>
           <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  onchange="money(this)" class="aa qq" type="checkbox" name="epartners[]" value="Uchitha"checked="checked"/>
           <div class="state p-success-o">
            <label>Uchitha</label></div></div> <input disabled="disabled" name="Uchitha" style="margin-left: 25px; width:100px; " type="number"  step="0.01" ></a>
           <a class="aa"><div style="" class="pretty p-default p-curve p-thick"><input  class="aa qq" type="checkbox" name="epartners[]"  value="Uminda" onchange="money(this)" checked="checked"/>
           <div class="state p-success-o">
            <label>Uminda</label></div></div> <input disabled="disabled" name="Uminda" style="margin-left: 25px; width:100px; " type="number"  step="0.01" ></a>


  </div>
</div>
     <br><br>



        <label for="">Reason : </label>

     <input name="ereason" style="margin-left: 25vw;width: 40%" type="text" />




        <br><br>
       <br> <div style="position: static;overflow: auto;"  >

        <button  style="position: static;float: right;margin: 5px;" name="submite" type="submit" value="Save">Save</button>

    </div>
    </fieldset>

    </form>
   </div>
 </div>


  <?php

       if (isset($_GET['examount'])){

             echo '<script>document.getElementById("id01").style.display="block";</script>';

       } ?>
</body>

 <script>
 function enable(){
      var ob=document.getElementsByClassName("qq");

          var i=0;

        for ( i=0;i<ob.length;i++){





                document.getElementsByName(ob[i].value)[0].disabled=false;



        }

 }
function money(oo) {
  /*  console.log(oo);*/
  if (oo !=undefined){
     document.getElementsByName(oo.value)[0].value=0;
     document.getElementsByName(oo.value)[0].disabled=true;

  }


            if (document.getElementById("auto").selected==true){

        var ob=document.getElementsByClassName("qq");
          var i=0;
          var arr=[];
        for ( i=0;i<ob.length;i++){

        document.getElementsByName(ob[i].value)[0].disabled=true;

              if (ob[i].checked==true ){

               arr.push(ob[i].value)


              }

        }


         /*  console.log(document.getElementById("eval").value);
           console.log(arr.length);
*/

          var newamount = document.getElementById("eval").value/arr.length;
            /*console.log(newamount);
*/
            i=0;

        for ( i=0;i<arr.length;i++){

          /* console.log(document.getElementsByName(arr[i])[0]);*/
           document.getElementsByName(arr[i])[0].value=newamount.toFixed(2);

        }
        /*var l = Object.keys(ob).map(function(key,index,arr){


          console.log(ob[key].checked);

        if (ob[key].checked==true && index<ob.length ){
        return ob[key].value;
              }

        });

        console.log(l);*/




        /*for (var key in ob) {
           if (key.checked==true){
        return value;

     }
            console.log(key);
        }
*/





      } else{

      var ob=document.getElementsByClassName("qq");
          var i=0;

        for ( i=0;i<ob.length;i++){



              if (ob[i].checked==true ){


                document.getElementsByName(ob[i].value)[0].disabled=false;

              }

        }


      }




        }




 function tableset(obb)
{
    if (obb.checked==true){
        var ex = obb.parentNode;
  var w = ex.parentNode;
var r=w.parentNode;
   var xx= r.cells
   if('<?php echo $_SESSION["username"] ?>'=="Lasitha"){
      if (confirm('Are You Sure you want to Clear this event ?')){

 var index=xx[0].innerHTML;
  var q=document.getElementsByName("Ischecked")[r.rowIndex-1];
/* q.disabled = true;*/
   q.checked = true;
 UpdateDB(index,snk,obb) ;


  } else{
    obb.checked = false;

     obb.preventDefault();
  }
   }
   else{

       alert("You are not allowed to do changes.");
         obb.checked = false;

     obb.preventDefault();
   }


  }else{
   obb.checked = true;

     obb.preventDefault()
  }
}
function UpdateDB(str,func,eventt) {
  var xhttp;
  if (str > 0) {
   }else{
   alert("Update Unsuccessfully !");
    eventt.checked = false;

   eventt.preventDefault();
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("snackbar").innerHTML = this.responseText;

      if (this.responseText.trim() != "New record created successfully"){

   eventt.checked = false;

     eventt.preventDefault();
     }

     func();


    }
  };
  xhttp.open("GET", "UpdateDB.php?q="+str, true);
  xhttp.send();
}
 function snk() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
/*function myFunction() {

    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("myDropdown").scrollIntoView();
}*/

//Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {

  if (!event.target.matches('.aa') )  {
          if (!event.target.matches('.dropbtn') ){
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  } }
}

function setreq(index){
    document.getElementById('dateselecter').setAttribute('form',index);
    document.getElementById('nameselecter').setAttribute('form',index);

}


</script>

</html>