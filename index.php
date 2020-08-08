 <?php
 

$_SESSION['balance'] = 50000;
$ATM_pin = 1234;
$Incorect = "";
 
$count = 0;
$_SESSION['Deposit'] =  0;
$_SESSION['Withdraw'] =  0;
 
$Deposited = false;
$Withdrawan = false;

if (isset($_POST['enter_pin'])){
   
if($_POST['ATM_pin'] == $ATM_pin) {

}
  else{
$Incorect = "incorect pin, try again";
}}

if (isset($_POST['enter_Deposit'])){
   
  $_SESSION['Deposit'] = $_POST['Deposit'];
  $_SESSION['balance'] +=   $_SESSION['Deposit'] ;
  $Deposited = true;


 }
if (isset($_POST['enter_Withdraw'])){
   
  $_SESSION['Withdraw']  = $_POST['Withdraw'];
  $_SESSION['balance'] -=  $_SESSION['Withdraw']  ;
  $Withdrawan = true;

 }
 
 
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
form{
margin-bottom: 10px;
}

.enter_pin{
background-color: green;
color: white
}

.Deposit{
background-color: tomato;
color: white
}

.Withdraw{
background-color: dodgerblue;
color: white
}
.balance{
background-color: magenta;
color: white
}
</style>
</head>
<body>
<form method="post" >
<label for="pin">ATM pin: </label><br>
<input type="number" name="ATM_pin" class="pin">
<button name="enter_pin" class="enter_pin">Enter Pin</button><br>
<h4 style="color: red; margin: 0px"><?php echo "$Incorect"; ?></h4>
</form>
<div >
<form method="post" >
<label for="Deposited"> Deposit money: </label><br>
<input type="number" name="Deposit" class="Deposited">
<button name="enter_Deposit" class="Deposit"> Deposit</button><br>
<h4 style="color: red; margin: 0px"><?php if ($Deposited){echo $_SESSION['balance']; } ?></h4>

</form>
<form method="post" >
<label for="pin"> Withdraw  money: </label><br>
<input type="number" name="Withdraw" class="pin">
<button name="enter_Withdraw" class="Withdraw"> Withdraw </button><br>

<h4 style="color: red; margin: 0px"><?php if ($Withdrawan){echo $_SESSION['balance']; } ?></h4>
</form>
<button name="enter_pin" class="balance"> Check balance </button>
</div>

</body>
</html>  
