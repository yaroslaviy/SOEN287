<?php

if(isset($_POST['logout']) && $_POST['logout'] == "y"){
    session_start();
    unset($_SESSION);
    session_destroy();}

require "header.php";

if (!isset($_SESSION['username'])) {
?>
<div class="content">
    <p>
        Please enter your login and password. If you don't have an account enter your login and password and press
        register.</p>
    </p>
    <p>
        A username can
        contain letters (both upper and lower case) and digits only. <br> A password
        must be at least 6 characters long (characters are to be letters and
        digits only), have at least one letter and at least one digit.
    </p>
    <form method="post" action="login.php">
        <table onkeyup="Validate()">
            <tr>
                <td><label>Login:</label></td>
                <td><input type="text" name="username"></td>
                <td><img id="loginvalidate" src="x.png" width="20px"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password"></td>
                <td><img id="passvalidate" src="x.png" width="20px"></td>
            </tr>
        </table>
        <button type="submit" name="Login">Login</button>
        <button type="submit" name="register">Register</button>
    </form>



    <?php
    if (!isset($_POST['register']) && !empty($_POST['username'])) {
        $data = fopen("login.txt", 'r');
        while (!feof($data)) {
            $line = fgets($data);
            $regex = "/^" . trim($_POST['username']) . ":" . trim($_POST['password']) . "$/";

            if (preg_match($regex, trim($line))) {
                $_SESSION['passed'] = true;
                $_SESSION['username'] = $_POST['username'];
                echo "<p class='success'> ", $_SESSION['username'], " logged in successfully <a href='home.php'>Go to search page</a></p>";
                break;
            }


        }
        if (!isset($_SESSION['username']))
            echo "<p class='warning'>Username and password don't match. Try again</p>";
    } elseif(isset($_POST['register'])) {
        $data = fopen("login.txt", 'a');
        $info = "\r\n".trim($_POST['username']) . ":" . trim($_POST['password']);
        if(fwrite($data, $info) > 0)
        echo "<p class='success'>Registration is successful! You can log in with your new account.</p> ";
    }
} else  {
    echo "<div>","<p class='welcome'> Welcome, ", $_SESSION['username'], "!</p>","<form method='post' action='login.php'><input type='hidden' name='logout' value='y'> <button type='submit'>Log out</button></form></div>";
}
echo "</div>";
require "footer.php";

?>
