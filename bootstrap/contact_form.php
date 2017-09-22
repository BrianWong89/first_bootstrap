<?php
require("header.php");
?>

    <div class="container">

        <?php if ($_POST["email"] == "") { ?>

            <div class="alert alert-danger">
                <strong> Warning! Please enter a valid email address.</strong>
            </div>
        <?php } else { ?>

            Your email is: <?php echo $_POST["email"]; ?><br>
            Your message is: <?php echo $_POST["message"]; ?>

            <div class="alert alert-success">
                <strong>Success! Your message has been sent.</strong>
            </div>

        <?php } ?>

    </div>

<?php
require("footer.php");
?>