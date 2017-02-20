<!DOCTYPE html PUBLIC
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Calculate Money</title>
</head>

<body>
<div class="box-input">
<div align="center">
   
   <h2 class="header-backpage">THE CALCULATION OF  FOREIGN</h2>

  <?php
  $money = $_POST['money'];   
  $coin = $_POST['coin'];
  switch ($coin) {
  case "A":{
    $coin_m=0.02;
    $sum=$money*$coin_m;
    echo " Amount ".$money." Bath  =  ".$sum." Poun (GBP)";
    break;  
    }

  case "B": {
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo " Amount ".$money." Bath  =  ".$sum." Euro (EUR)";
    break;
    }

   case "C":{
    $coin_m = 0.03;
    $sum = $money*$coin_m;
    echo " Amount ".$money." Bath  =  ".$sum." United States Dollar (USD)";
  break;
    }

    }
  ?>
  <br>
  <a href="index.html"><button class="btn-back">BACK TO HOME</button></a>
</div>
</div>
</body>
</html>