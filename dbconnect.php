<?php
$server = "localhost";
$user = "root";
$serverpassword = "";
$db = "dbinfo";

$con = mysqli_connect($server, $user, $serverpassword, $db);
if(!$con){
    ?>
        <script>
            window.alert("Connection not found!");
        </script>
    <?php
}
?>