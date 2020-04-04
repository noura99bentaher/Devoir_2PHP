
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>la date </title>


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
    
<form action='exo3.php' method="POST">
<tr>
  <td>
<select type="date" name="jour" >
<?php

 for($i=1;$i<32;$i++)
echo "<option value=".$i."> $i </option>";
?>
</select>
</td>
<td>
<select type="date" name = "mois"> 
<?php

 for($i=1;$i<13;$i++)
echo "<option value=".$i."> $i </option>";
?>
</select> 
</td>
<td>
<select  type="date" name = "annee">
<?php
for($i=1990;$i<2025;$i++) 
echo"<option value=".$i."> $i </option>"; 
?>
</select>
</td>
</tr>
<tr><td colspan="2">
<br><input type="submit" value="Envoyer" name="OK">
</td>
</tr>
</form>
</table>
</div>




</body>
</html>
