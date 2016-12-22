<?php
session_start();


include_once 'dbConnect.php';

$error = false;

if (isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "*Please Enter Valid Email ID.";
    }

   
    if (!$error) {
        if (mysqli_query($conn, "INSERT INTO feedback(email,firstName,lastName,comments) VALUES('" . $email . "', '" . $firstName . "', '" . $lastName . "', '"  . $comments . "')")) {
            $successmsg = "Comment Successfully.";
        } else {
            $errormsg = "Error occurred while comment. Please try again later.";
        }
    }
}
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="css/feedback1style.css" />
        <title>feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="row header" style="background:url(img/backgrounds/2.jpg)">
    <h1>Do you have any good suggestion?</h1>
    <h3>Please sent the feedback to us</h3>
  </div>
  <div class="row body">
    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Commentsform">
      <ul>
        
        <li>
          <p class="pleft">
            <label>firstName</label>
            <input type="text" name="firstName" placeholder="Carl"  />
          </p>
          <p class="pright">
            <label >lastName</label>
            <input type="text" name="lastName" placeholder="Sun" />      
          </p>
        </li>
		
        <li>
          <p>
            <label >email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="Carl.Sun@gmail.com" required value="<?php if ($error) echo $email; ?>"/>
          </p>
		  <p style="color: #FF0000; font-weight: bold; font-size: 12px"><?php if (isset($email_error)) echo $email_error; ?></p>
        </li>        
        <li><div class="divider"></div></li>
        <li>
          <label >comments</label>
          <textarea cols="46" rows="3" name="comments" placeholder="Input your comments" ></textarea>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" name="submit" value="Submit" />
          <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
    </body>
</html>
