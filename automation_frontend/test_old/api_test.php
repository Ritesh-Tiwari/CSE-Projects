<?php
// require 'php-encrypt-decrypt/Encryption.php';
require "e.php";
echo "<br>HOST : ". $_ENV['ODOO_HOST'];
echo "<br>USERNAME : ". $_ENV['ODOO_USERNAME'];
echo "<br>DATABASE : ". $_ENV['ODOO_DATABASE'];
echo "<br>PASSWOR  : ". $_ENV['ODOO_PASSWORD'];
echo "<br> Password : d8MLm8Q+eZ0uR+CHjGScBGadSU2ab+S+yQivN2NaNDdaUT09";


// Set a secret key
const KEY = 'avcdev-odoo-rtiwari';



// Decrypt message
$decoded_text = Encryption::Decode('d8MLm8Q+eZ0uR+CHjGScBGadSU2ab+S+yQivN2NaNDdaUT09', KEY);
//@return Hello world
echo "<br> decode : ";
echo $decoded_text;

echo "<br><br>";

for ($i = 1; $i <= 4; $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex   = bin2hex($bytes);

    echo "Lengths: Bytes: $i and Hex: " . strlen($hex) . PHP_EOL;
    var_dump($hex);
    var_dump($cstrong);
    echo PHP_EOL;
}


// require __DIR__ . '/../vendor/autoload.php';; // Include the Composer autoloader
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ ."/.."); // Create a Dotenv instance
// $dotenv->load(); // Load environment variables from .env
// echo $getenv('DB_USER');

// echo $_ENV['DB_USER'];

// $data = "odoo";
// $encryptionKey = sodium_crypto_secretbox_keygen(); // Generate a secret key

// // Encrypt the data
// $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
// $encrypted = sodium_crypto_secretbox($data, $nonce, $encryptionKey);
// $encryptedData = base64_encode($nonce . $encrypted);

// // Decrypt the data
// $decoded = base64_decode($encryptedData);
// $nonce = substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
// $decrypted = sodium_crypto_secretbox_open(substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES), $nonce, $encryptionKey);

// echo "Original Data: $data\n";
// echo "Encrypted Data: $encryptedData\n";
// echo "Decrypted Data: $decrypted\n";

// $data = "This is a secret message";
// $encryptionKey = openssl_random_pseudo_bytes(32); // Generate a secure encryption key

// // Encrypt the data
// $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
// $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryptionKey, 0, $iv);
// $encryptedData = base64_encode($iv . $encrypted);

// // Decrypt the data
// $decoded = base64_decode($encryptedData);
// $iv = substr($decoded, 0, openssl_cipher_iv_length('aes-256-cbc'));
// $decrypted = openssl_decrypt(substr($decoded, openssl_cipher_iv_length('aes-256-cbc')), 'aes-256-cbc', $encryptionKey, 0, $iv);

// echo "Original Data: $data\n";
// echo "Encrypted Data: $encryptedData\n";
// echo "Decrypted Data: $decrypted\n";

// $odooDb = getenv('ODOO_DB');
// $dbUser = getenv('DB_USER');


// // $odooDb = $_ENV['ODOO_DB'];
// // $dbUser = $_ENV['DB_USER'];

// echo "ODOO_DB: $odooDb<br>";
// echo "DB_USER: $dbUser<br>";
phpinfo();

// $arr=getenv();
// foreach ($arr as $key=>$val)
// echo "$key=>$val <br>
// ";
// require __DIR__ . '/../vendor/autoload.php';; // Include the Composer autoloader
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ ."/.."); // Create a Dotenv instance
// $dotenv->load(); // Load environment variables from .env

// $dbHost = getenv('HOST');
// $dbUsername = getenv('USERNAME');
// $dbPassword = getenv('DATABASE');
// $apiKey = getenv('PASSWORD');

// $dbHost = $_ENV['HOST'];
// $dbUsername = $_ENV['USERNAME'];
// $dbPassword = $_ENV['DATABASE'];
// $apiKey = $_ENV['PASSWORD'];

// echo "Database Host: $dbHost<br>";
// echo "Database Username: $dbUsername<br>";
// echo "API Key: $apiKey<br>";


// session_start();
// include("connection.php");
// $check_username = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read',
//  array(array("|","|",array('username', '=',"stiwari" ),
//  array('phone','=','8784687850'), 
//  array('email','=','5s@gmail.com
// '))), array('fields'=>array('id'), 'limit'=>1));
// if (empty($check_username)) {
// print_r($check_username);
// }else{
//     print_r($check_username);
// }


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

// $mail = new PHPMailer(true);

// try {
// 	$mail->SMTPDebug = 2;									
// 	$mail->isSMTP();										
// 	$mail->Host	 = 'smtp.gmail.com';				
// 	$mail->SMTPAuth = true;							
// 	$mail->Username = 'parthadm0514@gmail.com';				
// 	$mail->Password = 'tpznbekusqvfeyvs';					
// 	$mail->SMTPSecure = 'tls';							
// 	$mail->Port	 = 587;

// 	$mail->setFrom('parthadm0514@gmail.com', 'Automtaton');		
// 	$mail->addAddress('tiwariritesh989@gmail.com');
// 	// $mail->addAddress('receiver2@gfg.com', 'Name');
	
// 	$mail->isHTML(true);								
// 	$mail->Subject = 'Subject';
// 	$mail->Body = 'HTML message body in <b>bold</b> ';
// 	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
// 	$mail->send();
// 	echo "Mail has been sent successfully!";
// } catch (Exception $e) {
// 	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }



/*

$to = 'tiwariritesh989@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: parthadm0514@gmail.com' . "\r\n" .
    'Reply-To: parthadm0514@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}

echo "<br><br><br>";



$otp = $models->execute_kw($db, $uid, $password, 'customer.details', 'send_otp',array(array(100)));
print_r($otp);

$app_details = $models->execute_kw($db, $uid, $password, 'au.services.app', 'search_read', 
array(array(array('id', '>',0))), array('fields' => array()));
echo "<pre>";
print_r($app_details);
echo "</pre>";


$details = $models->execute_kw($db, $uid, $password, 'ir.module.module', 'search_read', 
array(array(array('id', '=', 392))), array('fields'=>array("icon_image"), 'limit'=>1));

echo "<pre>";
print_r($details);
echo "</pre>";

$binaryData = "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";
            $bin = base64_decode($binaryData);

            // Gather information about the image using the GD library
            $size = getImageSizeFromString($bin);

            // Check the MIME type to be sure that the binary data is an image
            if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
            die('Base64 value is not a valid image');
            }

            // Mime types are represented as image/gif, image/png, image/jpeg, and so on
            // Therefore, to extract the image extension, we subtract everything after the “image/” prefix
            $ext = substr($size['mime'], 6);

            // Make sure that you save only the desired file extensions
            if (!in_array($ext, ['png', 'gif', 'jpeg'])) {
            die('Unsupported image type');
            }

            // Specify the location where you want to save the image
            // $id = $data['id'];
            // $image_name = $data['name'];
            // echo $name;
            $img_file = "./one.{$ext}";


            // Save binary data as raw data (that is, it will not remove metadata or invalid contents)
            // In this case, the PHP backdoor will be stored on the server
            file_put_contents($img_file, $bin);
  



echo '<img src="data:image/gpg;base64, '.$binaryData.'" alt="Binary Image">';

// foreach($details as $d){
//     $ser = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', 
// array(array(array('id', '=', $d['service_ids']))), array('fields'=>array("customer_id","service_name")));
// echo "<pre>";
//     print_r($ser);
//     echo "</pre>";

// }


// $id = $models->execute_kw($db, $uid, $password, 'customer.services', 'create', 
// array(array('customer_id'=>3,"service_name"=>"rtest601")));


// $models->execute_kw($db, $uid, $password, 'customer.details', 'write', array(array(3),
//  array('service_ids'=>3, 'service_name'=>"test600")));

 // // get record name after having changed it
// $models->execute_kw($db, $uid, $password,
//     'res.partner', 'name_get', array(array($id)));


*/
?>