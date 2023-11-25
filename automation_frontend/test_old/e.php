<?php
class Encryption {
    /**
     * Encode - Encrypt string
     *
     * @param string $input - String to encode
     * @param string $key - Secret key
     * @param string $enc_method (optional)
     *
     * @return string Encrypted string
     */
    static function Encode(string $input, string $key, string $enc_method = 'AES-256-GCM') {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($enc_method));
        $tag = null; // Initialize the tag variable

        $encrypted = openssl_encrypt($input, $enc_method, $key, 0, $iv, $tag, '', 16); // Increase length of authentication tag to 16 bytes

        if ($encrypted === false) {
            throw new Exception('Encryption failed.');
        }

        // Combine IV, encrypted data, and tag for storage/transmission
        $encoded_data = base64_encode($iv . $tag . $encrypted);

        return $encoded_data;
    }

    /**
     * Decode - Decrypt encrypted string
     *
     * @param string $input - Encrypted string
     * @param string $key - Secret key
     * @param string $enc_method (optional)
     *
     * @return string Decoded string
     */
    static function Decode(string $input, string $key, string $enc_method = 'AES-256-GCM') {
        $decoded_data = base64_decode($input);

        $iv_length = openssl_cipher_iv_length($enc_method);
        $tag_length = 16; // Assuming a 16-byte authentication tag

        $iv = substr($decoded_data, 0, $iv_length);
        $tag = substr($decoded_data, $iv_length, $tag_length);
        $encrypted_data = substr($decoded_data, $iv_length + $tag_length);

        $decrypted = openssl_decrypt($encrypted_data, $enc_method, $key, 0, $iv, $tag);

        if ($decrypted === false) {
            throw new Exception('Decryption failed.');
        }

        return $decrypted;
    }
}


?>