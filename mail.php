<?  



// Enter your contact email address here
$adminaddress = "anotovska@axentrix.com"; 

// Enter the address of your website here include http://www. 
$siteaddress ="boomraid.bg"; 

// Enter your company name or site name here 
$sitename = "Boomraid"; 

$name = htmlentities($_POST["fullname"]);
$email = htmlentities($_POST["_replyto"]);
$message = htmlentities($_POST["message"]);




$date = date("m/d/Y H:i:s");

if ($REMOTE_ADDR == "") $ip = "no ip";
else $ip = getHostByAddr($REMOTE_ADDR);

$subject=$name." изпрати съобщение от ".$siteaddress;
$body= nl2br("Имаш ново съобщение на ". $sitename."\r\n".
"Име:". $name."\r\n".
"Е-mail:".$email."\r\n".
"Съобщение:"."\r\n".

$message);


$headers ="Content-Type: text/html; charset=UTF-8";
mail($adminaddress, $subject, $body, $headers); 









		
			
		
		




?>

