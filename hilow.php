<?php
  $card = rand(1,13);
  $image = "<img src='cards/".$card.".gif' alt='' height='100px' width='75px' />";
  $oc = $_POST['card'];
  $image1 = "<img src='cards/".$oc.".gif' alt='' height='100px' width='75px' />";
  $choice = $_POST['pick'];
  if(empty($oc)) {
    echo "".$image." <br /> Will the next card be <form method='POST' action='$PHP_SELF'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'> 
    <input type=submit value='HIGHER'></form> or <form method='POST' action='$PHP_SELF'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
    <input type=submit value='LOWER'></center></strong></form>? <br />";
  }
  if("$choice" == "high" && "$card" > "$oc") {
    echo "$image1 <br /> $image <br /> You Win! 
    <br /><br /> 
    <form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'> 
    <input type=submit value='HIGHER'></form> 
    or 
    <form method='POST' action='$PHP_SELF'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
    <input type=submit value='LOWER'></form>"; 
  }
  if("$choice" == "high" && "$card" < "$oc") 
{ 
echo "$image1 <br /> $image <br /> You Lose! 
<br /><br /> 
<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='high'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='HIGHER'></form> 

<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='low'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='LOWER'></form>"; 
} 

//if user selected low and new card is higher than old card 
if("$choice" == "low" && "$card" > "$oc") 
{ 
echo "$image1 <br /> $image <br /> You Lose! 
<br /><br /> 
<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='high'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='HIGHER'></form> 

<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='low'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='LOWER'></form>"; 
} 

//if user selected low and old card is lower than new card 
if("$choice" == "low" && "$card" < "$oc") 
{ 
echo "$image1 <br/> $image <br /> You Win!<br /><br /> 
<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='high'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='HIGHER'></form> 

<form method='POST' action='$PHP_SELF'> 
<input type='hidden' name='pick' value='low'> 
<input type='hidden' name='card' value='$card'> 
<input type=submit value='LOWER'></form>"; 
}
?>
