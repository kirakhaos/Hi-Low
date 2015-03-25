<?php
  $card = rand(1,13);
  $image = "<img src='cards/".$card.".gif' alt='' height='100px' width='75px' />";
  $oc = $_POST['card'];
  $score = $_POST['score'];
  $image1 = "<img src='cards/".$oc.".gif' alt='' height='100px' width='75px' />";
  $choice = $_POST['pick'];
  echo'<table>';
  if(empty($oc)) {
    echo "<tr><td>$image</td></tr>
	<tr><td>Will the next card be</td></tr>
	<tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>";
  }
  if($card == $oc){
	echo "<tr><td>Old</td><td>New</td></tr>
	<tr><td>$image1</td><td>$image</td></tr>
	<tr><td>Draw!</td><td>Score $score</td></tr>
    <tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>";
  }
  if("$choice" == "high" && "$card" > "$oc") {
	$score = $score + 1;
    echo "<tr><td>Old</td><td>New</td></tr>
	<tr><td>$image1</td><td>$image</td></tr>
	<tr><td>You Win!</td><td>Score $score</td></tr>
    <tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>"; 
  }
  if("$choice" == "high" && "$card" < "$oc") 
{ 
	$score = $score - 1;
	echo "<tr><td>Old</td><td>New</td></tr>
	<tr><td>$image1</td><td>$image</td></tr>
	<tr><td>You Lose!</td><td>Score $score</td></tr>
	<tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>"; 
} 

//if user selected low and new card is higher than old card 
if("$choice" == "low" && "$card" > "$oc") 
{ 
	$score = $score - 1;
	echo "<tr><td>Old</td><td>New</td></tr>
	<tr><td>$image1</td><td>$image</td></tr>
	<tr><td>You Lose!</td><td>Score $score</td></tr>
	<tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>"; 
} 

//if user selected low and old card is lower than new card 
if("$choice" == "low" && "$card" < "$oc") 
{ 
	$score = $score + 1;
	echo "<tr><td>Old</td><td>New</td></tr>
	<tr><td>$image1</td><td>$image</td></tr>
	<tr><td>You Win!</td><td>Score $score</td></tr>
	<tr><td><form method='POST'> 
    <input type='hidden' name='pick' value='high'> 
    <input type='hidden' name='card' value='$card'>
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='HIGHER'></form></td>
	<td><form method='POST'> 
    <input type='hidden' name='pick' value='low'> 
    <input type='hidden' name='card' value='$card'> 
	<input type='hidden' name='score' value='$score'>
    <input type=submit value='LOWER'></center></strong></form></td></tr>"; 
}
echo'</table>';
?>
