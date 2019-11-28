<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
include( WEB_ROOT.'/includes/form-logic.php' );
?>
<div class="contact-page">
    <h1>Contact</h1>

    <?php
        if(isset($_POST['submit'])){
            $to = "ryan@ryanrobinson.dev";
            $from = $_POST['sender-email'];
            $name = $_POST['sender-name'];
            $subject = "Form submission";
            $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
            echo "Message sent. Thanks for reaching out I will get back to you soon. <br />";
            echo "<a class='back-button' href='/'>Back to main page</a>";
        }
    ?>
    <form id="contact-form" class="contact-form card" action="" method="post">
        <label for="sender-name">Name</label>
        <input type="text" name="sender-name">
        <label for="sender-email">E-mail</label>
        <input type="text" name="sender-email">
        <label for="message">Message</label>
        <textarea rows="5" name="message" cols="30"></textarea>
        <input class="contact-btn" type="submit" name="submit" value="Send">`
    </form>
</div>

<?php
include( WEB_ROOT.'/views/partials/footer.php' );