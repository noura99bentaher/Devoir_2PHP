
<?php 
function is_valid_email($mail)
{
     if (empty($mail)) {
         echo "veuillez saisir votre email !!";
         return false;
     } else {
         $email = $mail;
         
         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo "Valid email";
             return true;}
         else   { 
           echo "Invalid email format !!"; 
           return false;
     } 
    }}
    function validpassword($ch) 
    {  
        $uppercase = preg_match('@[A-Z]@', $ch);
        $lowercase = preg_match('@[a-z]@', $ch);
        $number    = preg_match('@[0-9]@', $ch);
        $specialChars = preg_match('@[^\w]@', $ch);
    
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($ch) < 8) 
        {
        echo 'Invalid password';
	    }
	
    else {
        echo 'Valid password';
	    }	

            
    }
 
$email=$_POST["email"];
$password=$_POST['password'];
is_valid_email($email);
echo "<br>";
validpassword($password);   
echo "<br><br>";
$myfile = fopen("login.txt", "r") or die("Unable to open file!");
$exist = false;
$pass = false;
while (!feof($myfile)) {
    $array = explode('|',fgets($myfile));
    if ($array[0] == $email) {
        $exist = true;

        if (preg_replace('<\s+>', '', $array[1]) == $password) {
            $pass = true;
        }
    }
}
fclose($myfile);
if ($exist) {
    if ($pass) {
    
        echo 'Authentification réussi';
    } else {
        
        echo 'Mot de passe invalide';
    }
} else {
    
    echo 'Login inexistant ';
}
?>
