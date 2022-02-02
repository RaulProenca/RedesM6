<?php
   
    session_start();
    if(isset($_GET["user"])){
        $name = $_GET["user"];
        unset($_SESSION["users"][$name]);
    }else{
        $_SESSION["users"] = array("anasantos" => "Collaborator",
                "ruialmeida" => "Administrator",
                "tiagogomes" => "Collaborator");
    }

    $str = "<table class='table table-striped w-50 text-center'>
            <tr>
                <td>User</td>
                <td>Authority</td>
                <td>Remove User</td>
            </tr>";              
       
    foreach ($_SESSION["users"] as $key => $value) {
        $str = $str . "<tr>
                        <td>$key</td>
                        <td>$value</td>
                        <td>
                        <a href='users.php?user=$key'>
                        <img width='30' src='images/trash.png' alt='trash' >
                        </a>
                        </td>
                        </tr>"; 
    }
    $str = $str . "</table>";
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container my-3">

        <?php
            echo $str;
        ?>

    </div>

    

</body>
</html>