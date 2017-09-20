<?php
require("header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Contact us</h2>
    <form>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="msg">Message:</label>
            <input type="message" class="form-control" id="msg" placeholder="Enter message">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>