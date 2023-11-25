<?php
// Include the class file
require 'Encryption.php';

// Set a secret key
const KEY = 'secretkey';

// Message string to encode
$message = 'odoo';

// Encrypt message
$encoded_text = Encryption::Encode($message, KEY);
//@return d1pXc2dsYVBqQ0NrSkJ1Zy85RWprUT09
echo $encoded_text;


// Decrypt message
$decoded_text = Encryption::Decode($encoded_text, KEY);
//@return Hello world

echo $decoded_text; 