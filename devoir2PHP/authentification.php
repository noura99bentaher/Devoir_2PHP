
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
 

is_valid_email($_POST["email"]);
echo "<br>";
validpassword($_POST['password']);   

$myfile = fopen("login.txt", "r") or die("Unable to open file!");
$exist = false;
$passMatch = false;
while (!feof($myfile)) {
    $array = str_split(fgets($myfile));
    if ($array[0] == $email) {
        $exist = true;

        if (preg_replace('<\s+>', '', $array[1]) == $password) {
            $passMatch = true;
        }
    }
}
if ($exist) {
    if ($passMatch) {
        
        echo 'auth success';
    } else {
        
        echo 'pass false';
    }
} else {
    
    echo 'user doesn\'t exist';
}


fclose($myfile);
?>