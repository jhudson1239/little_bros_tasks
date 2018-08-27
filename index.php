<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Breif One</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<style>
    .container{
        margin:auto;
        width:30%;
        margin-top:2em;
    }
</style>
<body>
    <div class="container">
   
        <?php
        switch($_GET['mode']){
            case '1': include 'forms/post.php'; break;
            case '2': include 'forms/get.php';break;
            case '3': echo "</br>";break;
        }
        ?>
        
        <form action="clear.php" method="POST">
            <button style="margin-top:1em;" class="btn btn-primary" type="submit" name="submit" value="submit">Clear Session</button>
        </form>

        <?php
            session_start();
            if (isset($_SESSION['full_name'])){
                echo "<h4>Welcome, <strong>" . $_SESSION['full_name'] ."</strong> I hope you enjoy your stay.</h4>";
            }
        ?>
    </div>
</body>
</html>