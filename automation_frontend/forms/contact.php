<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'tiwariritesh989@gmail.com';

  // if( file_exists($php_email_form = './php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = "Ritesh Tiwari";
  // $contact->from_email = "Desiswag@gmail.com";
  // $contact->subject = "Test Subject";

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
 
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
 

  // $contact->add_message( "Ritesh Tiwari", 'From');
  // $contact->add_message( "desiswag", 'Email');
  // $contact->add_message( "hello ", 'Message', 10);

  // echo $contact->send();

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require '../vendor/autoload.php';
  require "./connection.php";  

  $mail = new PHPMailer(true);

  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['message'];
  try {
      // $mail->SMTPDebug = 2;									
      $mail->isSMTP();										
      $mail->Host	 = 'smtp.gmail.com';				
      $mail->SMTPAuth = true;							
      $mail->Username = 'parthadm0514@gmail.com';				
      $mail->Password = 'tpznbekusqvfeyvs';					
      $mail->SMTPSecure = 'tls';							
      $mail->Port	 = 587;

      $mail->setFrom('tiwariritesh989@gmail.com', 'Automtaton');		
      // $mail->addAddress('tiwariritesh989@gmail.com');
      $mail->addAddress("tiwariritesh989@gmail.com", "Automation");
      
      $mail->isHTML(true);								
      $mail->Subject = $subject;
      $mail->Body = msg_body($from_email, $from_name, $subject, $msg);
      $mail->AltBody = 'Body in plain text for non-HTML mail clients';

      $mail->send(); 
      
      // echo "<p class='text-dark'> Please check ". $email ." ! </p>";
  
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }  

  function msg_body($from_email, $from_name, $subject, $msg){
    $msg_body='
<div class="">
  <table border="0" cellpadding="0" cellspacing="0"
    style="padding-top:16px;background-color:#f1f1f1;font-family:Verdana,Arial,sans-serif;color:#454748;width:100%;border-collapse:separate">
    <tbody>
      <tr>
        <td align="center">

          <table border="0" cellpadding="0" cellspacing="0" width="590"
            style="padding:16px;background-color:white;color:#454748;border-collapse:separate">
            <tbody>

              <tr>
                <td align="center" style="min-width:590px">
                  <table border="0" cellpadding="0" cellspacing="0" width="590"
                    style="min-width:590px;background-color:white;padding:0px 8px 0px 8px;border-collapse:separate">
                    <tbody>
                      <tr>
                        <td valign="middle" align="right">
                          <img
                            src="https://cloud97.io/wp-content/uploads/2021/11/Logo-v1.png"
                            style="padding:0px;margin:0px;height:auto;width:30px" alt="cloud97" class="CToWUd"
                            data-bit="iit">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="text-align:center">
                          <hr width="100%"
                            style="background-color:rgb(204,204,204);border:medium none;clear:both;display:block;font-size:0px;min-height:1px;line-height:0;margin:16px 0px 16px 0px">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>

              <tr>
                <td align="center" style="min-width:590px">
                  <table border="0" cellpadding="0" cellspacing="0" width="590"
                    style="min-width:590px;background-color:white;padding:0px 8px 0px 8px;border-collapse:separate">
                    <tbody>
                      <tr>
                        <td valign="top" style="font-size:13px">
                          <div>

                             <p>'.
                               'Name - ' . $from_name.
                               '<br>Email Address - ' . $from_email.
                               '<br>Subject - '. $subject
                                .'<br>Message -' . $msg
                             .'</p>
                            
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:center">
                          <hr width="100%"
                            style="background-color:rgb(204,204,204);border:medium none;clear:both;display:block;font-size:0px;min-height:1px;line-height:0;margin:16px 0px 16px 0px">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>


      <tr>
        <td align="center" style="min-width:590px">
          <table border="0" cellpadding="0" cellspacing="0" width="590"
            style="min-width:590px;background-color:#f1f1f1;color:#454748;padding:8px;border-collapse:separate">
            <tbody>
              <tr>
                <td style="text-align:center;font-size:13px">
                  Powered by
                  <a href="https://cloud97.io/" style="color:#875a7b" target="_blank"
                    data-saferedirecturl="https://www.google.com/url?q=https://cloud97.io/&amp;source=gmail&amp;ust=1692423626933000&amp;usg=AOvVaw1Ms6SvlvEZKowL5VJcQLs3">Cloud
                    97
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

</div>';
return $msg_body;
  }
?>
