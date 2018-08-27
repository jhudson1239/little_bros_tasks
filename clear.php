<?php
    session_start();
    $_SESSION['full_name'] = null;
    header('location: index.php?mode=1');
?>