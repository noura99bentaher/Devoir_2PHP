<?php include('exo3.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>la date </title>
<?php



?>
</head>
<body>
	<div>
    <h1> Choisir une date </h1>
    <br>
    <table>
      <tr>
    <?php
    $j=ucwords("jour ");
    $m=ucwords(" mois ");
    $a=ucwords( " année");
    echo"<td>$j </td>";
    echo"<td>$m </td>";
    echo"<td>$a </td>";
    ?>
    </tr>
    
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" ?enctype="application/x-www-form-urlencoded">
<tr>
  <td>
<select name="jour">
<?php

 for($i=1;$i<32;$i++)
echo "<option value=".$i."> $i </option>";
?>
</select>
</td>
<td>
<select name = "mois"> 
<option value="1">1</option> 
<option value="2">2</option> 
<option value="3">3</option> 
<option value="4">4</option> 
<option value="5">5</option> 
<option value="6">6</option> 
<option value="7">7</option> 
<option value="8">8</option> 
<option value="9">9</option> 
<option value="10">10</option> 
<option value="11">11</option> 
<option value="12">12</option> 
</select> 
</td>
<td>
<select name = "annee">
<?php
for($i=1980;$i<2020;$i++) 
echo"<option value=".$i."> $i </option>"; 
?>
</select>
</td>
</tr>
<tr><td colspan="2">
<br><input type="submit" value="Envoyer" name="ok" onclick="<?php val(); ?>">
</td>
</tr>
</form>
</table>
</div>




</body>
</html> 