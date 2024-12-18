<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM tb_user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Rating</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style-rescheduleDanRating.css">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon"size="46x46">
</head>
    <body>
        <header class="main">
            <nav>
                <a href="#" class="logo">
                    <img src="images/Logo2.png" alt="TerbangBerkelas" width="75%">
                </a>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="booking.php?rekomen=0">Booking</a></li>
                    <li><a href="reschedule.php">Reschedule</a></li>
                    <li><a href="rating.php" class="aktif">Rating</a></li>
                    <li><a href="logout.php">Log Out dari <?php echo $_SESSION['namaUser']; ?>?</a></li>
                </ul>
            </nav>
        </header>
            <div id="form-int">
                <h2>Rating Penerbangan</h2>
                <h4>Kode booking tidak valid/tidak ada</h4>
            </div>
    </body>
</html>