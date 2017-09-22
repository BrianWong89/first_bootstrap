<?php
require("header.php");
$showForm = true;
//print_r($_POST);
?>

    <div class="container">
        <h2>Contact us</h2>
        <?php if (isset($_POST["email"]) && isset($_POST["message"])) { ?>
            <?php if ($_POST["email"] == "" || $_POST["message"] == "") { ?>
                <div class="alert alert-danger">
                    <strong> Warning! Please enter a valid email address or message!</strong>
                </div>
            <?php } else { ?>

                Your email is: <?php echo $_POST["email"]; ?><br>
                Your message is: <?php echo $_POST["message"]; ?>

                <div class="alert alert-success">
                    <strong>Success! Your message has been sent.</strong>
                </div>
                <?php $showForm = false;

            }
        }?>
        <?php if ($showForm == true) { ?>

            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email"
                           value="<?php if (isset($_POST['email'])) echo $_POST["email"];  ?>"
                           placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" class="form-control" id="message" name="message"
                           value="<?php if (isset($_POST['message'])) echo $_POST["message"]; ?>"
                           placeholder="Enter message">
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        <?php } ?>
    </div>


<?php
require("footer.php");
?>