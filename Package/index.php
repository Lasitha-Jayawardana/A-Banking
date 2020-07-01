<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temporary Data Collector</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
  display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
      margin-bottom: 20px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 400px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }


}
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
label{
    line-height: 30px;

     padding-bottom: 10px
}

</style>
</head>
<body>
      <div class="topbox">
  <a class="bank-logo">Hostal <span class="green">A Banking </span>System</a>

  <div class="bank-sub-logo" style="font-family:'Segoe UI',Arial,sans-serif">TEMPORY DATA COLLECTOR</div>
   </div>
<h3 style="color: #6264CC "  >Login Form</h3>

<form action="A Banking/Home.php" onsubmit="return my()" method="post">


  <div class="container">

    <label for="psw"><b>User ID</b></label>
    <input id="pass" type="password" placeholder="Enter User ID" name="psw" title="Must contain 2 numbers" pattern="[0-9]{2}" required>

    <button type="submit" name="lsub" >Login</button>

  </div>


</form>

</body>
<script>
function my(){


   var ps = document.getElementById("pass").value;


   switch(ps){
       case '97':


              return true;


       break;

       case '02':

              return true;

       break;

       case '25':

       break;
       case '49':


              return true;

       break;
        case '27':


              return true;

       break;
       case '09':

              return true;

       break;

       case '33':


              return true;

       break;
       case '14':

              return true;

       break;
       default:
       alert("Not Valid User Name or Password !");
        return false;
   }

}
</script>
</html>
