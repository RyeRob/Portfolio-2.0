<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<div class="contact-page">
    <h1>Contact</h1>
    <a class="form-link" href="mailto:ryan@ryanrobinson.dev">ryan@ryanrobinson.dev</a>
    <?php
        if(isset($_POST['submit'])){
            $to = "ryan@ryanrobinson.dev";
            $from = $_POST['sender-email'];
            $name = $_POST['sender-name'];
            $subject = "Message From Portfolio Site";
            $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
            echo "<br /> Thanks for the message! I'll get back to you soon. <br />";
            echo "<a class='form-link' href='/'>Back to main page</a>";
        }
    ?>
    <form id="contact-form" class="contact-form contact-card card" action="" method="post">
        <label for="sender-name">Name:</label>
        <input type="text" name="sender-name" id="sender-name" required minlength="1">
        <label for="sender-email">E-mail:</label>
        <input type="email" name="sender-email" id="sender-email" required>
        <label for="message">Message:</label>
        <textarea rows="5" name="message" id="message" cols="30" required minlength="8"></textarea>
        <input class="contact-btn" type="submit" name="submit" value="Send">
    </form>
</div>

<?php
include( WEB_ROOT.'/views/partials/footer.php' );