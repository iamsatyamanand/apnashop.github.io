<?php
    session_start();
    session_destroy();
    ?>
    <script>
        window.alert("Logout Successful!");
        window.location.replace("login.php");
    </script>
    <?php
?>