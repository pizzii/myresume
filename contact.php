<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';



  $mail = new PHPMailer(true);


  //message variable
  $msg = "";
  $msg_class = "";

  // Check submit
  if(filter_has_var(INPUT_POST, "submit")){
    //GET FORM DATA
    $email = htmlspecialchars($_POST ['email']);
    $mobile_number = htmlspecialchars($_POST ['mobile_number']);
    $message = htmlspecialchars($_POST ['message']);

    //Check required fields
    if(!empty($email) && !empty($mobile_number) && !empty($message) ){
      //submitted
      //Check email validation
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $msg = "Please use a valid email";
        $msg_class = "alert-danger";
      }else{
        //recipient email
        try{
          $mail->SMTPDebug = 2;
          $mail->isSMTP();
          $mail->HOST = "ping smtp.gmail.com";
          $mail->SMTPAuth = true;
          $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS; 
          $mail->Port = "587";
          $mail->Username = "reginaldejike3@gmail.com";
          $mail->Password = "1234must";
          $mail->setFrom("reginaldejike3@gmail.com", 'Reginald');
          $mail->addAddress("dono4executive@gmail.com", 'Reginald');
          $mail-> isHTML(true);
          $mail->Subject = 'Contact information';
          $mail->Body = "<h4>Email</h4><p>'.$email'.</p>
            <h4>Mobile Number</h4><p>'.$mobile_number'.</p>
            <h4>Message</h4><p>'.$message'.</p>
        ";
        $mail -> Send();
        $msg = "You information has been sent";
        $msg_class = "alert-success";
        }
        catch(Exception $e){
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
      }
    }else{
      //not submitted 
      $msg = "Please fill all required informations";
      $msg_class = "alert-danger";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Reginald|Resume</title>
    <style>
      form {
        background-color: white;
        width: 50%;
        margin: auto;
        margin-top: 50px;
        border-radius: 5px;
        padding: 20px;
      }
      form > h3{
        text-align: center;
        text-transform: capitalize;
      }
      label{
        text-transform: capitalize;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="container">
        <?php if($msg != ''):?>
          <div class = "alert <?php echo $msg_class; ?>"> <?php echo $msg; ?> </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <h3>Contact Information</h3>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" />
          </div>
          <div class="form-group">
            <label for="mobile_number">Mobile number</label>
            <input
              type="number"
              name="mobile_number"
              id="mobile_number"
              class="form-control"
              value = "<?php echo isset($_POST['mobile_number']) ? $mobile_number : ''; ?>"
            />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea
              type="text"
              name="message"
              id="message"
              class="form-control"
              value="<?php echo isset($_POST['message']) ? $message : ''; ?>""
            ></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">
            Submit
          </button>
        </form>
      </section>
    </main>
  </body>
</html>
