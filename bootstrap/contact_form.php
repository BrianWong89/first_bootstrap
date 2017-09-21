<?php
require("header.php");
?>

    <html>
    <body>

    Your email is: <?php echo $_POST["email"]; ?><br>
    Your message is: <?php echo $_POST["message"]; ?>

    </body>
    </html>

<?php
require("footer.php");
?>