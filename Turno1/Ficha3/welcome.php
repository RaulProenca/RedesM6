<?php
$login = "luis.fernandes@aerp.pt";
$pass = "12345";

if (isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])) {
    if ($_POST["inputEmail"] == $login && $_POST["inputPassword"] == $pass) {
        if (isset($_POST["inputRemember"])) {
            setcookie('email', $_POST["inputEmail"], time()+60);
            setcookie('pass', $_POST["inputPassword"], time()+60);
            
            echo "Welcome, $login <br>
            Cookies Set Successfully <br>
            <a href='login.php'>Go to Login Page</a>";
        }else{
            setcookie('email', $_POST["inputEmail"], time() - 3600);
            setcookie('pass', $_POST["inputPassword"], time() - 3600);
            
            echo "Welcome, $login <br>
            Cookies Not Set <br>
            <a href='login.php'>Go to Login Page</a>";
        }
    }else{
        echo "Wrong Email or Password <br>
              Cookies Not Set <br>
              <a href='login.php'>Go to Login Page</a>";
    }
}
?>