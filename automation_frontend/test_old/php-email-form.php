<?php

class PHP_Email_Form {
    public $to;            // Recipient email address
    public $from_name;     // Sender's name
    public $from_email;    // Sender's email address
    public $subject;       // Email subject
    public $message;       // Email message
    public $smtp;          // SMTP settings

    public function sendEmail() {
        // Check if all required fields are set
        if (empty($this->to) || empty($this->from_name) || empty($this->from_email) || empty($this->subject) || empty($this->message)) {
            return false; // Some required fields are missing
        }

        // Create headers for the email
        $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
        $headers .= "Reply-To: {$this->from_email}\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        // Send the email using SMTP settings
        $success = mail($this->to, $this->subject, $this->message, $headers, "-f{$this->from_email}");

        return $success;
    }

    public function add_message($content, $label, $maxLength = null) {
        // Add a message to the email content
        if ($maxLength !== null) {
            $content = substr($content, 0, $maxLength);
        }
        $this->message .= "<strong>{$label}:</strong> {$content}<br>";
    }

    public function send() {
        // Call the sendEmail method and return the result
        return $this->sendEmail() ? 'Message sent successfully.' : 'Message could not be sent.';
    }
}

// Usage example:
// $contact = new PHP_Email_Form;
// $contact->to = "recipient@example.com";
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];
// $contact->add_message($_POST['name'], 'From');
// $contact->add_message($_POST['email'], 'Email');
// $contact->add_message($_POST['message'], 'Message', 10);
// echo $contact->send();

?>
