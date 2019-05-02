<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Question 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="functions.js"></script>
</head>
<body>
	<div>
        <script>DisplayTime()</script>
    <table width="95%">
		<tr>
			<td rowspan="3">
				<a href="home.php">
					<img src="https://peterviney.files.wordpress.com/2014/03/grand-budapest-hotel.png" alt="Hotel Grand Budapest" width="300">
				</a>
			</td>
			<td >
                <p id="time" style="text-align: right"></p>
            </td>
        </tr>
        <tr>
            <td id="center" >
                Hotel Reservation Form
			</td>
        <tr>
            <td><a href="home.php">Home</a> |
                <?php
                if (!isset($_SESSION['username'])) {
                ?><a href="login.php">Login</a> | <a href="login.php">Registration</a></td>
            <?php
            } else
                echo "<span class='welcome'> Welcome, ",$_SESSION['username'],"! </span> | <a href=\"login.php\">Log out</a></td>";
            ?>
        </tr>
	</table>
    </div>
