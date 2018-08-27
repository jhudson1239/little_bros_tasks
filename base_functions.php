<?php
    session_start();

    if(isset($_POST['f_name'])){
        $fullname = $_POST['f_name'] . " " . $_POST['l_name'];
        $_SESSION['full_name'] = $fullname;
        header('Location: index.php?mode=3');        
        
    } else {
        $fullname = $_GET['f_name'] . " " . $_GET['l_name'];
        $_SESSION['full_name'] = $fullname;
        header('Location: index.php?mode=3');
    }

?>