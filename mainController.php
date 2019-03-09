<?php
include "bdd.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


/*******GERE LA PAGE index.php */
$randomPic=new BDD;
$pictureRandom=$randomPic->randomPicture();

/*******GERE LA PAGE DisplayImage.php */
$PicturesList=new BDD;
$allPictures=$PicturesList->getAllPicture();

$colorPic=new BDD;
$colorPicture=$colorPic->getColorPicture();


/*******GERE LA PAGE bigImage.php */
if(isset($_GET["id"])){
    $onePicture=new BDD;
    $pictureDisplay=$onePicture->DisplayPicture($_GET["id"]);
}


/*******GERE LA PAGE admin.php 
if(isset($_GET["action"])){
    if($_GET['action']=='add'){
        $PicturesList->insertPicture($_POST["name"],$_POST["size"],$_POST["source"],$_POST["href"],$_POST["alt"],$_POST["type"]);
        header("Location: admin.php");
    }
}
*/



/*******GERE LA PAGE Contact.php */
$ContactList=new BDD;


if(isset($_GET["action"])){
    if($_GET['action']=='addContact'){
        if(!empty($_POST["email"])){
            $creationDate = time();
            $ContactList->insertContact($_POST["name"],$_POST["email"],$_POST["question"],$creationDate);

            $lastInsertId= $ContactList->lastId();
            
            //echo $lastInsertId;
         //echo json_encode($lastInsertId);
         
        } 
        /*GERE l'envoi du message par mail */  
if(!empty($_POST["question"])){
    // je crée une instance de la classe PHPMailer    
    $mail = new PHPMailer(true);
   // $mailList= new BDD;
 //   $mailLastId=$mailList->lastId();
   // var_dump($mailLastId);

  try {

        // To load the French version
        $mail->setLanguage('fr');
        $mail->CharSet = 'UTF-8';

      //Server settings
      // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'ocoffineau@gmail.com';                 // SMTP username
        $mail->Password = 'Juliette75';                           // SMTP password                         // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom("ocoffineau@gmail.com",'Roger.com');
      $mail->addAddress('ocoffineau@gmail.com', 'Moi');      // Add a recipient

      //Attachments

       // $mail->addAttachment($_FILES["fichier"]["tmp_name"],$_FILES["fichier"]["name"]);           // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Nouveau message sur Roger.com';
      $mail->Body    = "<h1>Nouveau message</h1><p>".$lastInsertId["question"]."</p><p> envoyé par : ".$lastInsertId["name"]."</p><p> Adresse e-mail : ".$lastInsertId["email"]."</p>";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 

      $mail->send();
     // echo 'Message has been sent';
     // header('Location: mail.php');
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }      
   /* $mail = new PHPMailer(true);
  //  $maiList= new BDD;
    //$mailLastId=$mailList->lastId();
    //var_dump($mailLastId);
    try {
        //Server settings
         $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        // $mail->SMTPAuth = true;                               // Enable SMTP authentication
        // 
        // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 587;                                    // TCP port to connect to
                                     // Enable verbose debug output
                                         // Set mailer to use SMTP
        $mail->Host = 'localhost';  // Specify main and backup SMTP servers
        $mail->isSMTP();                             // Enable SMTP authentication
        $mail->Username = null;                 // SMTP username
        $mail->Password = null;                           // SMTP password
        $mail->SMTPSecure = false;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 1025;                                    // TCP port to connect to
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false;
        
        
        //Recipients
        // expediteur
        $mail->setFrom("ocoffineau@gmail.com", 'Roger.com');
        $mail->addAddress('ocoffineau@gmail.com', 'Moi');     // Add a recipient
   
   
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Nouveau message sur Roger.com';
        $mail->Body    = "<h1>Nouveau message</h1><p>".$lastInsertId["question"]."</p><p> envoyé par : ".$lastInsertId["name"]."</p><p> Adresse e-mail : ".$lastInsertId["email"]."</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
       $mail->send();
       
       // echo 'Message has been sent';
        
        //exit();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
   }
   //header("Location:mail.php");
  //include 'mail.php';
*/
    }     
} 
}  
?>
