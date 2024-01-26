<?PHP

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $consulting = $_POST['consulting'];
    $contactNumber = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];


    // ======= Messages =================================================
    $bodyHTML = '<p><strong>Name: </strong>' . $name . '</p>';
    $bodyHTML .= '<p><strong>Consulting For: </strong>' . $consulting . '</p>';
    $bodyHTML .= '<p><strong>Contact Number: </strong>' . $contactNumber . '</p>';
    $bodyHTML .= '<p><strong>Email: </strong>' . $email . '</p>';
    $bodyHTML .= '<p><strong>Address: </strong>' . $address . '</p>';
    $bodyHTML .= '<p><strong>Country: </strong>' . $country . '</p>';

    // ====================================================================
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@drahmedhaque.com';
        $mail->Password = 'Unknown@1';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        $mail->setFrom('info@drahmedhaque.com', 'From drahmedhaque.com');
        $mail->addAddress('ahmedshaque@gmail.com');


        $mail->isHTML(true);
        $mail->Subject = 'Consulting enquiry from: ' . $name . " - " . date("Y-m-d", time());
        $mail->Body    = $bodyHTML;

        $mail->send();

        echo 'sent';
    } catch (Exception $e) {
        echo "Message could not be sent";
    }
}
//  Mailer Error: {$mail->ErrorInfo}